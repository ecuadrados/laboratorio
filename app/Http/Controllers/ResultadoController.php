<?php

namespace App\Http\Controllers;
use App\Models\Resultado;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Validator;
use setasign\Fpdi\Fpdi;

require_once(public_path('libreria/phpqrcode/qrlib.php')); 
require_once(public_path('libreria/fpdf/fpdf.php')); 
require_once(public_path('libreria/fpdi/src/autoload.php')); 

use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function storeresultado(Request $request)
    {
        // $pacientes = Paciente::where(['paciente_id'=>1])->get();
        $token22 = "289f40af54730a86dbd45f685414be11";
        if($request->token == $token22) {
            $validate = Validator::make( $request->all(), [
                'identificacion' => 'required',
                'file' => 'required|mimes:pdf|max:1024',
                'paciente' => 'required',
                'fecha_examen' => 'required',
            ]); 
    
            if ($validate->fails()) {          
                return response()->json(['error'=>$validate->errors()], 401);                        
            }  
     
    
            $resultado = new Resultado();
            $identificacion = $request->identificacion;
            $token = md5(uniqid());
            /** */
            if ($request->file('file')) {
            $file = $request->file('file');
            $newname = $identificacion.'_'.date('y-m-d_h_i_s');
            $filename =  $newname.".".$file->getClientOriginalExtension();
            $ruta = public_path('resultado/pdf/'.$filename);      
            copy( $file, $ruta ); // guarda archivo pdf
    
            $this->GenerarCodigoqr($newname, $token); //genera el codigo qr
    
            $this->Addtopdf($filename, $newname); // inserta codigo qr en el pdf
    
            // guardar en base de datos
            $resultado->paciente_documento = $request->identificacion;
            $resultado->resultado_paciente = $request->paciente;
            $resultado->resultado_fecha = $request->fecha_examen;
            $resultado->resultado_token =  $token;
            $resultado->resultado_filename = $newname;
            $resultado->save();
    
            return response()->json([
                        "message" => "ok"                    
                    ]);
            }
            else {
                return response()->json([
                    "message" => "error no hay archivo pdf seleccionado"               
                ]);
            }
        } else {
            return response()->json([
                "message" => "error token no valido"               
            ]);
        }

    }

    public function GenerarCodigoqr($filename, $token) {      
        $url = route('resultado.show',$token);;
        \QRcode::png($url, public_path('images/qr/'.$filename.'.png',QR_ECLEVEL_L,10,2));
    }

    public function Addtopdf($filename, $newname) {       
        $pdf = new Fpdi();
        $pdf->AddPage();   
        $path = public_path("resultado/pdf/".$filename);
        $pdf->setSourceFile($path);
        $tplId = $pdf->importPage(1);
        $pdf->useTemplate($tplId);
        //$pdf->SetXY(90, 110);
        $pdf->Image(public_path('images/qr/'.$newname.'.png'), 180, 230, 20, 20);
        $pdf->Output("F", public_path('resultado/pdfqr/'.$filename));   
    }

    public function show($id)
    {
        $resultado = Resultado::where(['resultado_token'=>$id])->first();
        if($resultado)
            return view('resultado.show',compact('resultado'));
        return redirect('/resultado/error');
    }

    public function create()
    {
        return view('resultado.create');
    }

    public function storeresultadoapp(Request $request)
    {
        
        $validate = Validator::make( $request->all(), [
            'identificacion' => 'required',
            'file' => 'required|mimes:pdf|max:1024',
            'paciente' => 'required',
            'fecha_examen' => 'required',
        ]); 

        if ($validate->fails()) {          
            return response()->json(['error'=>$validate->errors()], 401);                        
        }  
 

        $resultado = new Resultado();
        $identificacion = $request->identificacion;
        $token = md5(uniqid());
        /** */
        if ($request->file('file')) {
        $file = $request->file('file');
        $newname = $identificacion.'_'.date('y-m-d_h_i_s');
        $filename =  $newname.".".$file->getClientOriginalExtension();
        $ruta = public_path('resultado/pdf/'.$filename);      
        copy( $file, $ruta ); // guarda archivo pdf

        $this->GenerarCodigoqr($newname, $token); //genera el codigo qr

        $this->Addtopdf($filename, $newname); // inserta codigo qr en el pdf

        // guardar en base de datos
        $resultado->paciente_documento = $request->identificacion;
        $resultado->resultado_paciente = $request->paciente;
        $resultado->resultado_fecha = $request->fecha_examen;
        $resultado->resultado_token =  $token;
        $resultado->resultado_filename = $newname;
        $resultado->save();

        return redirect()->route('resultado.index');
        }
        else {
            return response()->json([
                "message" => "error no hay archivo pdf seleccionado"               
            ]);
        }

    }

    public function index()
    {
        $resultados = Resultado::where(['resultado_estado'=>1])->get();
        return view('resultado.index', compact('resultados'));
    }

    public function detail($id)
    {
        $resultado = Resultado::where(['resultado_token'=>$id])->first();
        return view('resultado.detail',compact('resultado'));
    }
}

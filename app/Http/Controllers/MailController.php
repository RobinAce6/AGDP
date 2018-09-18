<?php

namespace App\Http\Controllers;

use App\Models\Mail as MailE;
use App\Models\StorageWay as SWM;
use App\Models\Dependency as FM;
use App\Models\City as CM;
use App\Models\Client as CL;
use App\Models\Department;
use App\Models\Dependency;
use Illuminate\Http\Request;
use App\Models\Proyect;
use App\Models\Answer;
use App\Models\Archive;

use DB;
use App\User;
use Auth;

class MailController extends Core\BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->roles()->get()[0]->name) {
            case 'Recepción':
                $mail = MailE::where('state_id','=',1)->orwhere('state_id','=',6)->get();
                return view('maile.listM', compact('mail'));
            break;
            case 'Operador':
                $mail = MailE::where('state_id','=',2)->orwhere('state_id','=',3)->where('user_id','=',Auth::user()->id)->get();
                return view('maile.listM_ope', compact('mail'));
            break;
            case 'Archivo':
                $mail = MailE::where('state_id','=',4)->orwhere('state_id','=',5)->get();
                return view('maile.listM_Arch', compact('mail'));
            break;
            case 'Admin':
                $mail = MailE::all();
                return view('maile.listM', compact('mail'));
            break;
            default:
                $mail = null;
                return view('maile.listM', compact('mail'));
            break;
        }
    }
    public function saveArch(Request $request)
    {
        $this->validate($request, [
            'carpeta'=>'required',
            'folio'=>'required',
            'caja'=>'required',
            'ubicacion'=>'required' 
        ]);
        $archive = new Archive;

        $archive->document_id   =$request->id;
        $archive->carpeta       =$request->carpeta;
        $archive->folio         =$request->folio;
        $archive->caja          =$request->caja;
        $archive->ubicacion     =$request->ubicacion;
        $archive->typeDocument  =$request->typeDocument;
        $archive->save();
        $mail = MailE::find($request->id);
        $mail->state_id = 6;
        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');
    }
    public function saveSend(Request $request)
    {
        $this->validate($request, [
            'le_file'=>'required',
        ]);
        $file = $request->file('le_file');
        $type = $file->getMimeType();
        $dateSplit = explode('/', $type);
        \Storage::disk('local')->put($request->con.'.'.$dateSplit[1],  \File::get($file));
        $answer = new Answer;
        $answer->folder     = $request->con.'.'.$dateSplit[1];
        $answer->mail_id    = $request->id;
        $answer->user_id    = $request->user_id;
        $answer->state_id   = 7;
        $answer->save();    
        $mail = MailE::find($request->id);
        $mail->state_id =$request->state_id;
        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');

    }
    public function download(Request $request)
    {
        $mail = MailE::find($request->id);
        $archivo = $mail->folder;
        $public_path = storage_path('app/upload/');
        $url = $public_path.''.$archivo;
        if (\Storage::exists($archivo))
        {
            return response()->download($url);
        }
        abort(404);
    }
    public function savemsn(Request $request)
    {
        $this->validate($request, [
            'state_id'=>'required|not_in:0'
        ]);

        $answer = Answer::where('mail_id','=',$request->id)->get();
        $mail = Answer::find($answer[0]->id);
        $mail->state_id =$request->state_id;
        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');
    }
    public function downloadAnswer(Request $request)
    {
        $mail = Answer::where('mail_id','=',$request->id)->get();
        $archivo = $mail[0]->folder;
        $public_path = storage_path('app/upload/');
        $url = $public_path.''.$archivo;
        if (\Storage::exists($archivo))
        {
            return response()->download($url);
        }
        abort(404);
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'le_file'=>'required',
        ]);
        $file = $request->file('le_file');
        $nombre = $file->getClientOriginalName();
        \Storage::disk('local')->put($request->con.'-'.$nombre,  \File::get($file));
        $mail = MailE::find($request->id);
        $mail->folder = $request->con.'-'.$nombre;
        $mail->state_id =2;
        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');
    }
    public function savetype(Request $request)
    {
        $this->validate($request, [
            'tipocarta'=>'required',
        ]);
        $mail = MailE::find($request->id);
        $mail->typeresponse = $request->tipocarta;
        $mail->state_id =3;
        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folderAll = FM::all();
        
        $clientAll = CL::all();
        
        $proyectAll = Proyect::all();
        $storagew = SWM::all();
        $city = CM::all();
        $mail = MailE::all();
        $departAll = Department::all();
        $depenAll = Dependency::all();
        $userAll = User::all();
        $selectNull[0] = '';
        $selectCity[0] = '';
        foreach($city as $city) {
            $selectCity[$city->id] = $city->name;
        }
        $selectUser[0] = '';
        foreach($userAll as $city) {
            $selectUser[$city->id] = $city->name;
        }
        $selectProyect[0] = '';
        foreach($proyectAll as $folder) {
            $selectProyect[$folder->id] = $folder->name;
        }
        $selectClient[0] = '';
        foreach($clientAll as $client) {
            $selectClient[$client->id] = $client->name;
        }
        $selectDepart[0] = '';
        foreach($departAll as $depar) {
            $selectDepart[$depar->id] = $depar->name;
        }
        $selectDepend[0] = '';
        foreach($depenAll as $depen) {
            $selectDepend[$depen->id] = $depen->name;
        }
        return view('maile.recepcion', compact('selectUser','selectClient','selectCity','selectNull','selectProyect','selectClient','selectDepart','selectDepend', 'storagew', 'city', 'mail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date'=>'required',
            'client_id'=>'required|not_in:0',
            'proyect_id'=>'required|not_in:0',
            'departamento_id'=>'required|not_in:0',
            'ciudad_id'=>'required|not_in:0',
            'dependency_id'=>'required|not_in:0',
            'persona_id'=>'required|not_in:0',
            'asunto'=>'required',
            'obser'=>'required',
            'empresa'=>'required',
            'mensajeria'=>'required',
            
        ]);
        $data = MailE::where('proyect_id','=',$request->proyect_id)
            ->max('consectutive');
        if (is_null($data)) {
            $codigo =1;
        }
        else
        {
            $codigo =$data+1;
        }
        $dateSplit = explode('/', $request->date);
        $mail = new MailE;
        $mail->receivedDate     = $dateSplit[2].'-'.$dateSplit[1].'-'.$dateSplit[0];
        $mail->proyect_id       = $request->proyect_id; 
        $mail->city_id          = $request->ciudad_id;
        $mail->consectutive     = $codigo;
        $mail->user_id          = $request->persona_id;
        $mail->subjet           = $request->asunto;
        $mail->observations     = $request->obser;
        $mail->folder           = '';
        $mail->typeresponse     = 'XX';
        $mail->companymsn       = $request->empresa;
        $mail->namemessenger    = $request->mensajeria;
        $mail->state_id         = 1;

        $mail->save();
        return redirect()->route('maile')
            ->with('flash_message',
             'Maile successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idMail)
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        return view('maile.updateM', compact('folder','storagew','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idMail)
    {
        $mail = MailE::find($idMail);
                
        $mail->idMail2 = $request->idMail2;
        $mail->codEnterprise = $request->codEnterprise;
        $mail->folder_id = $request->idFolder;
        $mail->typeMail = $request->typeMail;
        $mail->affair   = $request->affair;
        $mail->sentDate = $request->sentDate;
        $mail->sender = $request->sender;
        $mail->addressee = $request->addressee;
        $mail->receivedDate = $request->receivedDate;
        $mail->storagew_id  = $request->idStorageWay;
        $mail->noPages  = $request->noPages;
        $mail->obervations  = $request->obervations;
        $mail->deliveredToArchive = $request->deliveredToArchive;
        $mail->nameMessenger = $request->nameMessenger;
        $mail->city_id = $request->idCity;

        $mail->save();

        return redirect('maile.listM');
    }
}

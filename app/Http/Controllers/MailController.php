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
use DB;
use App\User;

class MailController extends Core\BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = MailE::all();
        return view('maile.listM', compact('mail'));
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

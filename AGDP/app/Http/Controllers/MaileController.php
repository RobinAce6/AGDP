<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MailE as MailE;
use App\Models\StorageWay as SWM;
use App\Models\Folder as FM;
use App\Models\City as CM;

class MaileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = MailE::with('Folder', 'StorageWay', 'City');
        return view('maile.listM', compact('mail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        return view('maile.newM', compact('folder', 'storagew', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = new MailE;
         
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

    public function editM()
    {
        return view('maile.updateM');
    }

    public function verM()
    {
        return view('maile.ver');
    }

}

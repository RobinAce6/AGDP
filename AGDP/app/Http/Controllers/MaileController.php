<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Aapp\Models\MailE as MailE;
use App\Models\Dependency as DM;
use App\Models\StorageWay as SWM;
use App\Models\Folder as FM;

class MaileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = MailE::with('Folder', 'StorageWay','Dependency_Mail');
        return view('maile.newM', compact('mail'));
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
        $depend = DM::all();
        return view('maile.newM', compact('folder', 'storagew','depend'));
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
        $mail->Mailfolder_id = $request->idMailfolder;
        $mail->affair   = $request->affair;
        $mail->dependency_id = $request->idDependency;
        $mail->creationDate  = $request->creationDate;
        $mail->internalEstablishmentDate = $request->internalEstablishmentDate;
        $mail->receivedDate = $request->receivedDate;
        $mail->storagew_id  = $request->idStorageWay;
        $mail->obervations  = $request->obervations;
        $mail->deliveredToArchive = $request->deliveredToArchive;
        $mail->shippingWay   = $request->shippingWay;
        $mail->nameMessenger = $request->nameMessenger;

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
        $depend = DM::all();
        return view('maile.updateM', compact('folder', 'storagew','depend'));
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
        $mail->Mailfolder_id = $request->idMailfolder;
        $mail->affair   = $request->affair;
        $mail->dependency_id = $request->idDependency;
        $mail->creationDate  = $request->creationDate;
        $mail->internalEstablishmentDate = $request->internalEstablishmentDate;
        $mail->receivedDate = $request->receivedDate;
        $mail->storagew_id  = $request->idStorageWay;
        $mail->obervations  = $request->obervations;
        $mail->deliveredToArchive = $request->deliveredToArchive;
        $mail->shippingWay   = $request->shippingWay;
        $mail->nameMessenger = $request->nameMessenger;

        $mail->save();

        return redirect('maile.listM');
    }

}

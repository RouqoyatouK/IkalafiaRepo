<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Mail\Confirmer as MailContact;
use App\Models\Confirmer;

class ConfirmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmer= Confirmer::all();
        return view('confirmer.index',compact('confirmer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('confirmer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
           'nom'=>'required',
          'email'=>'required',
          'message'=>'required',
          
        ]);
        //
        $confirmer=new Confirmer();
        $confirmer->nom=$request->nom;
        $confirmer->email=$request->email;
        $confirmer->message=$request->message;
      /*  $header=from: ".$_POST["email"]:
mail($destinateur.$sujet.$message.$header);*/
    /*  FacadesMail::raw($request->message,function($message) {
            $message->to('adouma@gmail.com');
        });
        */
         FacadesMail::to('amadou123@gmail.com')->send(new MailContact ($confirmer));
      /*  if (isset($_POST)&& ! empty($_POST['nom'])&& ! empty($_POST['message'])){
            extract($_POST);
           /* $message= "Ce message vous a été envoyer via la page contact du site ikalafia 
            Nom : " .$_POST["nom"] . "
            Email : " .$_POST["email"] . "
            Message : " .$_POST["message"];
            $retour = mail()*/
          /*  if (isset($_POST['message'])) {
                $retour = mail('djouratiediarra1998@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: djouratiediarra1998@gmail.com' . "\r\n" . 'Reply-to: ' . $_POST['email']);
                if($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
           /* $destinateur= 'djouratiediarra1998@gmail.com';
            $expediteur =$nom.' <'.$email.'>';
            $to='djouratiediarra1998@gmail.com';
            $mail=mail($destinateur,$nom,$message, $expediteur .' :De ikalafia.com :mail de test');
            if($email)echo'Email envoyé avec succes!!'; else echo'Echec envoie';
        }else echo " formulaire non soumids ou des champs sont vides";*/
    
        $confirmer->save();
        return redirect()->route('confirmer.create');
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
    public function edit($id)
    {
        $confirmer= confirmer::find($id);
        return view('confirmer.show',compact('confirmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

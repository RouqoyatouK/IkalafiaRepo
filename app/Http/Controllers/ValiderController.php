<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valider;
use App\Mail\Valider as MailContact;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use Symfony\Component\Mime\Email;


class ValiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valider= Valider::all();
        return view('valider.index',compact('valider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('valider.create');
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
        $valider=new Valider();
        $valider->nom=$request->nom;
        $valider->email=$request->email;
        $valider->message=$request->message;
      /*  $header=from: ".$_POST["email"]:
mail($destinateur.$sujet.$message.$header);*/
    /*  FacadesMail::raw($request->message,function($message) {
            $message->to('adouma@gmail.com');
        });
        */
         FacadesMail::to('amadou123@gmail.com')->send(new MailContact ($valider));
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
    
        $valider->save();
      return redirect()->route('demande.index')->with('message','Votre message à été envoyer merci!');

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
        $valider= valider::find($id);
        return view('valider.show',compact('valider'));
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

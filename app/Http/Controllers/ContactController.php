<?php

namespace App\Http\Controllers;

use App\Mail\Contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::all();
        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,
        [
           'nom'=>'required',
          'email'=>'required',
          'message'=>'required',
          
        ]);
        //
        $contact=new Contact();
        $contact->nom=$request->nom;
        $contact->email=$request->email;
        $contact->message=$request->message;
       /* Mail::raw($request->message,function($message) {
            $message->to('djouratiediarra1998@gmail.com')
            ->subject($request->message);
        });*/
         FacadesMail::to('djouratie1998@gmail.com')->send(new MailContact ($contact));
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
    
        $contact->save();
        return redirect()->route('contact.create');
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
        $contact= Contact::find($id);
        return view('contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact= Contact::find($id);
      return view('contact.edit', compact('contact'));
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
        $contact= Contact::find($id);
        $contact->nom=$request->nom;
        $contact->email=$request->email;
        $contact->message=$request->message;

        $contact->save();
        return redirect()->route('contact.index');
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
        Contact::find($id)->delete();
        return redirect()->route('contact.index');
    }
}

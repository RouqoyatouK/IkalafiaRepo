<?php

namespace App\Http\Controllers;

use App\Models\Renouvellement;
use Illuminate\Http\Request;

class RenouvellementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $renouvellement =Renouvellement::all();
        return view('renouvellement.index',compact('renouvellement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('renouvellement.create');
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
           'nom'=>'required|unique:renouvellements||min:4',
            'prenom'=>'required|unique:renouvellements',
            'nom_pere'=>'required|unique:renouvellements',
            'nom_mere'=>'required|unique:renouvellements',
            'date_naissance'=>'required|unique:renouvellements',
            'lieu_naissance'=>'required|unique:renouvellements',
           'acte_naissance'=>'required|unique:renouvellements',
            'photo_identite'=>'required|unique:renouvellements',
            'profession'=>'required|unique:renouvellements',
           'photo_profession'=>'required|unique:renouvellements',
            'quartier'=>'required|unique:renouvellements',
            'rue'=>'required|numeric|unique:renouvellements',
            'porte'=>'required|numeric|unique:renouvellements',
           'taille'=>'required|numeric|min:1|max:1.7|unique:renouvellements',
           'teint'=>'required|unique:renouvellements',
            'contact'=>'required|unique:renouvellements',
            'genre'=>'required|unique:renouvellements',
            'date_renouvellement'=>'required|unique:renouvellements',
            'photo_ancienne_carte'=>'required|unique:renouvellements',
              /* 'nom'=>'required',['unique:users'],
              'prenom'=>'required',
              'nom_pere'=>'required',
              'nom_mere'=>'required',
              'date_naissance'=>'required',
              'lieu_naissance'=>'required',
              'acte_naissance'=>'required',
              'photo_identite'=>'required',
              'profession'=>'required',
              'photo_profession'=>'required',
              'quartier'=>'required',
              'rue'=>'required',
              'porte'=>'required',
              'taille'=>'required',
              'teint'=>'required',
              'couleur_cheveux'=>'required',
              'contact'=>'required',
              'genre'=>'required',
              'photo_ancienne_carte'=>'required',
              'date_renouvellement'=>'required',*/





        ]);
        $renouvellement=new Renouvellement();
        $renouvellement->nom=$request->nom;
        $renouvellement->prenom=$request->prenom;
        $renouvellement->nom_pere=$request->nom_pere;
        $renouvellement->nom_mere=$request->nom_mere;
        $renouvellement->date_naissance=$request->date_naissance;
        $renouvellement->lieu_naissance=$request->lieu_naissance;
        $renouvellement->acte_naissance=$request->acte_naissance;
        $renouvellement->photo_identite=$request->photo_identite;
        $renouvellement->profession=$request->profession;
        $renouvellement->photo_profession=$request->photo_profession;
        $renouvellement->quartier=$request->quartier;
        $renouvellement->rue=$request->rue;
        $renouvellement->porte=$request->porte;
        $renouvellement->taille=$request->taille;
        $renouvellement->teint=$request->teint;
        $renouvellement->couleur_cheveux=$request->couleur_cheveux;
        $renouvellement->signe_particuliere=$request->signe_particuliere;
        $renouvellement->date_renouvellement=$request->date_renouvellement;
        $renouvellement->contact=$request->contact;
        $renouvellement->genre=$request->genre;
        $renouvellement->fraction_de=$request->fraction_de;
        $renouvellement->numero_delivrance=$request->numero_delivrance;
        $renouvellement->carte_numero=$request->carte_numero;

        $renouvellement->photo_ancienne_carte=$request->photo_ancienne_carte;
        $renouvellement->lieu_conception=$request->lieu_conception;

        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/identite/',$filename);
            $renouvellement->photo_identite=$filename;
        }

        if($request->hasfile('photo_profession')){
            $file=$request->file('photo_profession');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/profession/',$filename);
            $renouvellement->photo_profession=$filename;
        }
        if($request->hasfile('photo_ancienne_carte')){
            $file=$request->file('photo_ancienne_carte');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/ancienne-carte/',$filename);
            $renouvellement->photo_ancienne_carte=$filename;
        }
        if($request->hasfile('acte_naissance')){
            $file=$request->file('acte_naissance');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/acte/',$filename);
            $renouvellement->acte_naissance=$filename;
        }
        $renouvellement->save();
        return redirect()->route('renouvellement.create')->with('message','Votre demande de renouvellement  à été envoyer merci!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $renouvellement=Renouvellement::find($id);
        return view('renouvellement.show',compact('renouvellement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $renouvellement=Renouvellement::find($id);

      return view('renouvellement.edit',compact('renouvellement'));

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
        $renouvellement=Renouvellement::find($id);
        $renouvellement->nom=$request->nom;
        $renouvellement->prenom=$request->prenom;
        $renouvellement->nom_pere=$request->nom_pere;
        $renouvellement->nom_mere=$request->nom_mere;
        $renouvellement->date_naissance=$request->date_naissance;
        $renouvellement->lieu_naissance=$request->lieu_naissance;
        $renouvellement->acte_naissance=$request->acte_naissance;
        $renouvellement->photo_identite=$request->photo_identite;
        $renouvellement->profession=$request->profession;
        $renouvellement->photo_profession=$request->photo_profession;
        $renouvellement->quartier=$request->quartier;
        $renouvellement->rue=$request->rue;
        $renouvellement->porte=$request->porte;
        $renouvellement->taille=$request->taille;
        $renouvellement->teint=$request->teint;
        $renouvellement->couleur_cheveux=$request->couleur_cheveux;
        $renouvellement->signe_particuliere=$request->signe_particuliere;
        $renouvellement->date_renouvellement=$request->date_renouvellement;
        $renouvellement->contact=$request->contact;
        $renouvellement->genre=$request->genre;
        $renouvellement->fraction_de=$request->fraction_de;
        $renouvellement->numero_delivrance=$request->numero_delivrance;
        $renouvellement->carte_numero=$request->carte_numero;
        $renouvellement->photo_ancienne_carte=$request->photo_ancienne_carte;
        $renouvellement->lieu_conception=$request->lieu_conception;
        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/',$filename);
            $renouvellement->photo_identite=$filename;
        }

        if($request->hasfile('photo_profession')){
            $file=$request->file('photo_profession');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/',$filename);
            $renouvellement->photo_profession=$filename;
        }
        if($request->hasfile('photo_ancienne_carte')){
            $file=$request->file('photo_ancienne_carte');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/',$filename);
            $renouvellement->photo_ancienne_carte=$filename;
        }
        if($request->hasfile('acte_naissance')){
            $file=$request->file('acte_naissance');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/renouvellement/',$filename);
            $renouvellement->acte_naissance=$filename;
        }
        $renouvellement->save();
        return redirect()->route('renouvellement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Renouvellement::find($id)->delete();
        return redirect()->route('renouvellement.index');
    }
}

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show</title>
    <link rel="stylesheet" href="{{url('cssi/show.css')}}">
	<link rel="stylesheet" href="{{url('cssi/css/print.css')}}" type="text/css" media="print" />

    <style></style>
</head>
<body>
<h1>Carte d'identité N°  <td>{{$demande->id}}</td></h1>
<div class="container">        
<h25>Fait le .......        <td>{{$demande->date_demande}}</td>
.............à..... <td>{{$demande->lieu_conception}}</td>...........</h25>
<h26>administrative et cachet</h26>
<h27>Signature de l'autorité</h27>
<h28>Signature du Titulaire</h28>
<h29>(ou mention illetré)</h29>
<h30>Carte N°  <td>{{$demande->id}} </h30>


<td>  <img src="{{asset('assets/demande/identite/' .$demande->photo_identite)}}" width='100px'  ></td>

<td>  <img src="{{url('img/index.jpg')}}" width='100px' id="i"></td>
<td>  <img src="{{url('img/timbre_fiscal-500.jpg')}}" width='100px' id="i2"></td>

        <ul>
        <li>N° DE DELIVRANCE:       <td>{{$demande->numero_delivrance}}</td>           </li>
        	<li>Village de................................................</li>
        	<li>Fraction de............ <td>{{$demande->fraction_de}}</td>.............</li>
        	<li>NATIONALITE MALIENNE</li>
        	<li>NOM.............     <td>{{$demande->nom}}</td>
............................</li>
        	<li>PRENOMS......    <td>{{$demande->prenom}}</td>
.......................</li>
        	<li>Fils de..............        <td>{{$demande->nom_pere}}</td>
..........................</li>
        	<li>et de...............        <td>{{$demande->nom_mere}}</td>
...........................</li>
        	<li>Né le..............        <td>{{$demande->date_naissance}}</td>
......................</li>
        	<li>à............        <td>{{$demande->lieu_naissance}}</td>
.......................................</li>
        	<li>PROFESSION..........        <td>{{$demande->profession}}</td>
........</li>
        	<li>Domicile...........        <td>{{$demande->quartier}}</td>
........................</li>
<li>Rue...........        <td>{{$demande->rue}}</td>
.........Porte.....<td>{{$demande->porte}}</td>............</li>
        	<li>Taille.........        <td>{{$demande->taille}}</td>
............................................</li>
        	<li>Teint...........        <td>{{$demande->teint}}</td>
.......................................</li>
        	<li>Cheveux.............        <td>{{$demande->couleur_cheveux}}</td>
...............................</li>
        	<li>Signes particuliers...........        <td>{{$demande->signe_particuliere}}</td>
........</li>
        </ul>
     </div>
     
     <a href="{{route('demande.edit', $demande->id)}}"><button type="button" id="b1"  class="btn btn-success">Modifier une information</button></a></td>
	 <a href="{{route('valider.index', $demande->id)}}"><button type="button" id="b2"  class="btn btn-success">Face 2</button></a></td>
 
	 <form>
  <input id="impression" name="impression" type="button" onclick="window.print()" value="Imprimer cette page" />
  
</form>
</body>

</html>
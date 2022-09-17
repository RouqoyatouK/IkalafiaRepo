<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show</title>
    <link rel="stylesheet" href="{{url('css/show.css')}}">
	<link rel="stylesheet" href="{{url('css/css/print.css')}}" type="text/css" media="print" />
    <style></style>
</head>
<body>
<h1 id="c1">Carte d'identité N°  <td>{{$renouvellement->id}}</td></h1>
<div class="container">        
<h25>Fait le .......        <td>{{$renouvellement->date_renouvellement}}</td>
.............à..... <td>{{$renouvellement->lieu_conception}}</td>...........</h25>
<h26>administrative et cachet</h26>
<h27>Signature de l'autorité</h27>
<h28>Signature du Titulaire</h28>
<h29>(ou mention illetré)</h29>
<h30>Carte N°  <td>{{$renouvellement->id}} </h30>


<td>  <img src="{{asset('assets/renouvellement/identite/' .$renouvellement->photo_identite)}}" width='100px'></td>
<td>  <img src="{{url('img/index.jpg')}}" width='100px' id="i"></td>
<td>  <img src="{{url('img/timbre_fiscal-500.jpg')}}" width='100px' id="i2"></td>

        <ul>
        <li>N° DE DELIVRANCE:       <td>{{$renouvellement->numero_delivrance}}</td>           </li>
        	<li>Village de................................................</li>
        	<li>Fraction de............ <td>{{$renouvellement->fraction_de}}</td>.............</li>
        	<li>NATIONALITE MALIENNE</li>
        	<li>NOM.............     <td>{{$renouvellement->nom}}</td>
............................</li>
        	<li>PRENOMS......    <td>{{$renouvellement->prenom}}</td>
.......................</li>
        	<li>Fils de..............        <td>{{$renouvellement->nom_pere}}</td>
..........................</li>
        	<li>et de...............        <td>{{$renouvellement->nom_mere}}</td>
...........................</li>
        	<li>Né le..............        <td>{{$renouvellement->date_naissance}}</td>
......................</li>
        	<li>à............        <td>{{$renouvellement->lieu_naissance}}</td>
.......................................</li>
        	<li>PROFESSION..........        <td>{{$renouvellement->profession}}</td>
........</li>
        	<li>Domicile...........        <td>{{$renouvellement->quartier}}</td>
........................</li>
<li>Rue...........        <td>{{$renouvellement->rue}}</td>
.........Porte.....<td>{{$renouvellement->porte}}</td>............</li>
        	<li>Taille.........        <td>{{$renouvellement->taille}}</td>
............................................</li>
        	<li>Teint...........        <td>{{$renouvellement->teint}}</td>
.......................................</li>
        	<li>Cheveux.............        <td>{{$renouvellement->couleur_cheveux}}</td>
...............................</li>
        	<li>Signes particuliers...........        <td>{{$renouvellement->signe_particuliere}}</td>
........</li>
        </ul>
     </div>
     
     <a href="{{route('renouvellement.edit', $renouvellement->id)}}"><button type="button" id="b1" class="btn btn-success">Modifier une information</button></a></td>
     <?php
	 ?>
	 <form>
  <input id="impression" name="impression" type="button" onclick="window.print()" value="Imprimer cette page" />
</form>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show</title>
    <link rel="stylesheet" href="{{url('css/show.css')}}">
	<link rel="stylesheet" href="{{url('cssi/css/print.css')}}" type="text/css" media="print" />

    <style></style>
</head>
<body>
<h1>Fiche de declaration N°  <td>{{$declaration->id}}</td></h1>
<div class="container">        
<h25>REPUBLIQUE DU MALI</h25>
<h32>Un Peuple-Un But-Une Foi</h32>


<h30>Fait................Le.....<td>{{$declaration->date_declaration}}</td>.............</h30>
<h39>Commissaire de police du 7ème arrondissement</h39>



<td>DIRECTION NATIONALE DE LA POLICE:</td> <br>
<td>COMMISSARIAT DE POLICE DU</td><br>
        	<td>7ème ARRONDISSEMENT</td>
			<h3>Declaration de perte</h3>
			<h33>NOM.............     <td>{{$declaration->nom}}</td>
........................................</h33>
<h34>PRENOMS...............     <td>{{$declaration->prenom}}</td>
.............................</h34>
<h35>Domicile.......à......   <td>{{$declaration->quartier}}</td>
........................................</h35>
<h36>PROFESSION..........        <td>{{$declaration->profession}}</td>
........</h36>
<h37>Objet....Perte de la carte d'identité nationale..........................................</h37>
        <ul>
        	
     
        	
        </ul>
     </div>
	 <form>
  <input id="impression" name="impression" type="button" onclick="window.print()" value="Imprimer cette page" />
</form>
</body>
</html>
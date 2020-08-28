<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
{fetch file="{$APS_PATH_TEMPLATES}header.tpl"} 


<title>DELICIOUS MEALS</title>
</head>
<body>
<nav class="navbar navbar-fixed-top" id="head-nav" style="position:fixed"> 
	<a href="index.php">
  <div id="logo-left">
	   <div id="navbar-left-functions" class="navbar-inner-left-functions"></div>
	</div>
  </a>
	<div id="user_setting_buttons">
	<button id="sign-in-btn" type="button" class="btn btn-outline-primary  btn-sm" data-toggle="modal" data-target="#loginForm">Uloguj se</button> <button type="button" id="sign-up-btn" class="btn btn-outline-primary  btn-sm" data-toggle="modal" data-target="#registrationForm">Registruj se</button>
	</div>
</nav> 
<div id="main-content" class="container" style="width:900px;">
<div class="objekat-main-content">
<div class="selected-carousel-top-container">
	<input type="hidden" value="{$lokal.slika}" id="photoInput">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    
  </ol>
  <div class="carousel-inner">
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark local-navbar">
		<div>
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#opis-lokala">Opis <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#meni-lokala">Meni</a>
      			</li>
	  			<li class="nav-item">
        			<a class="nav-link" href="#kontakt-lokala">Kontakt</a>
      			</li>
    		</ul>
  		</div>
	</nav>-->
</div>
<div class="local-name-header">
	<h1>{$lokal.naziv}</h1>
	<hr>
</div>
<div class="opis-lokala">
	<p id="opis-lokala">
		{$lokal.opis}
	</p>
</div>
<div class="meni-lokala">
	<h3 id="meni-lokala">Meni</h3>
	<hr>
	<div class="row" style="margin-bottom: 20px;">
	{foreach $menuitem as $item}
    	<div class="col-sm-6">
			<div class="card" style="margin-bottom: 15px;">
  				<div class="card-body">
    				<h5 class="card-title">{$item.naziv}</h5>
    				<h6 class="card-subtitle mb-2 text-muted">{$item.kategorija}</h6>
    				<p class="card-text">{$item.opis}</p>
					<p class="card-text">Cena: {$item.cena} </p>
  				</div>
			</div>
		</div>
	{/foreach}
	</div>
</div>
        
{* <div class="galerija-lokala">
    <h3 id="galerija-lokala">Galerija</h3>
    <hr>
       
</div> *}
        
<div>
	<h3 id="komentari-lokala">Komentari i ocene</h3>
	<hr>
	{foreach $comments as $item}
	<p>Ocena {$item.ocena} - <i>"{$item.utisak}"</i></p>
	{/foreach}
</div>

<div class="rezervacija">
    <h3 id="rezervacija">Rezervacija</h3>
    <hr>
    <form action="objekat.php">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Ime</label>
      <input type="text" class="form-control" id="validationDefault01" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Prezime</label>
      <input type="text" class="form-control" id="validationDefault02"  value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="inputState">Broj osoba</label>
      <select id="inputState" class="form-control">
        <option selected>Izaberi</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select>
    </div>
      
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Datum</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
          <input type="date" class="form-control" id="validationDefaultDate" aria-describedby="inputGroupPrepend2" required />
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="inputState">Vreme</label>
      <select id="inputState" class="form-control">
        <option selected>Izaberi</option>
        <option>18:00</option>
        <option>18:30</option>
        <option>19:00</option>
        <option>19:30</option>
        <option>20:00</option>
        <option>20:30</option>
        <option>21:00</option>
        <option>21:30</option>
        <option>22:00</option>
        <option>22:30</option>
      </select>
    </div>
  </div>
        <div class="form-row">
            <label for="validationDefaultUsername">Napomena</label>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        
        
    
</div><br>

  <button class="btn btn-primary" type="submit">Rezerviši</button>
</form>
          
</div><br><br>

<div class="kontakt-lokala">
	<h3 id="kontakt-lokala">Kontakt</h3>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<p><i class="fas fa-phone-square"></i> {$lokal.kontakt_telefon}</p>
			<p><i class="fas fa-compass"></i> {$lokal.adresa}</p>
		</div>
		<div class="col-sm-6">
			<h5>Radno Vreme</h5>
			<p>{$lokal.radno_vreme}</p>
		</div>
	</div>
</div>
</div>
</div>
{fetch file="{$APS_PATH_TEMPLATES}modal_login_form.tpl"} 
{fetch file="{$APS_PATH_TEMPLATES}modal_registrovanje_form.tpl"} 
{fetch file="{$APS_PATH_TEMPLATES}body_include_scripts.tpl"} 

<script>
var slike = $('#photoInput').val();
var slikeArr = slike.split('\n');

for(var i = 0; i < slikeArr.length; i++){
  $('<li data-target="#carouselExampleIndicators" data-slide-to="' + i + '"></li>').appendTo('.carousel-indicators');
  $('<div class="carousel-item"><img class="d-block w-100" src="./files/photos/' + slikeArr[i] + '" alt="..."></div>').appendTo('.carousel-inner');
}

$('.carousel-indicators li:first-child').addClass('active');
$('.carousel-inner div:first-child').addClass('active');

</script>
</body>
</html>
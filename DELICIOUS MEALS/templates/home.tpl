<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
{fetch file="{$APS_PATH_TEMPLATES}header.tpl"} 
<title>DELICIOUS MEALS</title>
</head>
<body>
<nav class="navbar navbar-fixed-top" id="head-nav" style="position:fixed">
	<div id="logo-left">
	   <div id="navbar-left-functions" class="navbar-inner-left-functions"></div>
	</div>
	<div id="user_setting_buttons">
	<button id="sign-in-btn" type="button" class="btn btn-outline-primary  btn-sm" data-toggle="modal" data-target="#loginForm">Uloguj se</button> <button type="button" id="sign-up-btn" class="btn btn-outline-primary  btn-sm" data-toggle="modal" data-target="#registrationForm">Registruj se</button>
	</div>
</nav>
<div id="main-content" class="container" style="max-width:800px !important;">
<div style="width:100%; height:20px"></div>
{foreach from=$restorani key=k item=restoran} 
 {if $k === 0}
 	<div class="row text-center">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Restorani</h4></div>
	</div>
  {elseif $k % 2 === 0} {*kad popuni dve,zatvara red i prelazi u novi*}
  	<div class="row text-center dmeals-row-top-margin">
 {/if}
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="{$restoran.pocetna_slika}" alt="">
            <div class="card-body">
              <h4 class="card-title">{$restoran.naziv}</h4>
              <p class="card-text">{$restoran.kratak_opis}</p>
              {for $ocena = 0 to $restoran.ocena -1}
              	 <span class="fa fa-star star-checked"></span>
              {/for}
              {for $ocena = $restoran.ocena  to 4}
              	<span class="fa fa-star"></span>
			  {/for}
            </div>
            <div class="card-footer">
              <a href="{$URL}objekat.php?tip=restoran&id={$restoran.id_ugostiteljskog}" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 {if $k === 1} 
 </div>      
 {elseif $k mod 2 === 1 } 
  	</div>
 {/if}
 {/foreach}
 
 {foreach from=$picerije key=k item=picerija}
 {if $k === 0}
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Picerije</h4></div>
	</div>
  {elseif $k % 2 === 0} 
  	<div class="row text-center dmeals-row-top-margin">
 {/if}
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="{$picerija.pocetna_slika}" alt="">
            <div class="card-body">
              <h4 class="card-title">{$picerija.naziv}</h4>
              <p class="card-text">{$picerija.kratak_opis}</p>
              {for $ocena = 0 to $picerija.ocena -1}
              	 <span class="fa fa-star star-checked"></span>
              {/for}
              {for $ocena = $picerija.ocena  to 4}
              	<span class="fa fa-star"></span>
			  {/for}
            </div>
            <div class="card-footer">
              <a href="{$URL}objekat.php?tip=picerija&id={$picerija.id_ugostiteljskog}" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 {if $k === 1} 
 </div>      
 {elseif $k mod 2 === 1 } 
  	</div>
 {/if}
 {/foreach}
 
 {foreach from=$poslasticare key=k item=poslasticara}
 {if $k === 0}
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Poslasticare</h4></div>
	</div>
 {elseif $k % 2 === 0} 
  	<div class="row text-center dmeals-row-top-margin">
 {/if}
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="{$poslasticara.pocetna_slika}" alt="">
            <div class="card-body">
              <h4 class="card-title">{$poslasticara.naziv}</h4>
              <p class="card-text">{$poslasticara.kratak_opis}</p>
              {for $ocena = 0 to $poslasticara.ocena -1}
              	 <span class="fa fa-star star-checked"></span>
              {/for}
              {for $ocena = $poslasticara.ocena  to 4}
              	<span class="fa fa-star"></span>
			  {/for}
            </div>
            <div class="card-footer">
              <a href="{$URL}objekat.php?tip=poslasticara&id={$poslasticara.id_ugostiteljskog}" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 {if $k === 1} 
 </div>      
 {elseif $k mod 2 === 1 } 
  	</div>
 {/if}
 {/foreach}
 
 {foreach from=$kafici key=k item=kafic}
 {if $k === 0}
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Kafici</h4></div>
	</div>
  {elseif $k % 2 === 0} 
  	<div class="row text-center dmeals-row-top-margin">
 {/if}
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="{$kafic.pocetna_slika}" alt="">
            <div class="card-body">
              <h4 class="card-title">{$kafic.naziv}</h4>
              <p class="card-text">{$kafic.kratak_opis}</p>
              {for $ocena = 0 to $kafic.ocena -1}
              	 <span class="fa fa-star star-checked"></span>
              {/for}
              {for $ocena = $kafic.ocena  to 4}
              	<span class="fa fa-star"></span>
			  {/for}
            </div>
            <div class="card-footer">
              <a href="{$URL}objekat.php?tip=kafic&id={$kafic.id_ugostiteljskog}" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 {if $k === 1} 
 </div>      
 {elseif $k mod 2 === 1 } 
  	</div>
 {/if}
 {/foreach}
</div>
{fetch file="{$APS_PATH_TEMPLATES}modal_login_form.tpl"} 
{fetch file="{$APS_PATH_TEMPLATES}modal_registrovanje_form.tpl"} 
{fetch file="{$APS_PATH_TEMPLATES}body_include_scripts.tpl"} 
</body>
</html>
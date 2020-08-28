<?php
/* Smarty version 3.1.32, created on 2018-06-20 23:54:19
  from '/var/www/html/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2acd0bb43ca8_62135275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a9a57fd920a50a8eaa8b6ed058c1db99dee6dc' => 
    array (
      0 => '/var/www/html/templates/home.tpl',
      1 => 1529531656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2acd0bb43ca8_62135275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/smarty-3.1.32/libs/plugins/function.fetch.php','function'=>'smarty_function_fetch',),));
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<?php echo smarty_function_fetch(array('file'=>((string)$_smarty_tpl->tpl_vars['APS_PATH_TEMPLATES']->value)."header.tpl"),$_smarty_tpl);?>
 
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['restorani']->value, 'restoran', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['restoran']->value) {
?> 
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 0) {?>
 	<div class="row text-center">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Restorani</h4></div>
	</div>
  <?php } elseif ($_smarty_tpl->tpl_vars['k']->value%2 === 0) {?>   	<div class="row text-center dmeals-row-top-margin">
 <?php }?>
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['restoran']->value['pocetna_slika'];?>
" alt="">
            <div class="card-body">
              <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['restoran']->value['naziv'];?>
</h4>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['restoran']->value['kratak_opis'];?>
</p>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? $_smarty_tpl->tpl_vars['restoran']->value['ocena']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['restoran']->value['ocena']-1)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = 0, $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	 <span class="fa fa-star star-checked"></span>
              <?php }
}
?>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['restoran']->value['ocena']) : $_smarty_tpl->tpl_vars['restoran']->value['ocena']-(4)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = $_smarty_tpl->tpl_vars['restoran']->value['ocena'], $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	<span class="fa fa-star"></span>
			  <?php }
}
?>
            </div>
            <div class="card-footer">
              <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
objekat.php?tip=restoran&id=<?php echo $_smarty_tpl->tpl_vars['restoran']->value['id_ugostiteljskog'];?>
" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 1) {?> 
 </div>      
 <?php } elseif ($_smarty_tpl->tpl_vars['k']->value % 2 === 1) {?> 
  	</div>
 <?php }?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['picerije']->value, 'picerija', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['picerija']->value) {
?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 0) {?>
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Picerije</h4></div>
	</div>
  <?php } elseif ($_smarty_tpl->tpl_vars['k']->value%2 === 0) {?> 
  	<div class="row text-center dmeals-row-top-margin">
 <?php }?>
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['picerija']->value['pocetna_slika'];?>
" alt="">
            <div class="card-body">
              <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['picerija']->value['naziv'];?>
</h4>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['picerija']->value['kratak_opis'];?>
</p>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? $_smarty_tpl->tpl_vars['picerija']->value['ocena']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['picerija']->value['ocena']-1)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = 0, $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	 <span class="fa fa-star star-checked"></span>
              <?php }
}
?>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['picerija']->value['ocena']) : $_smarty_tpl->tpl_vars['picerija']->value['ocena']-(4)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = $_smarty_tpl->tpl_vars['picerija']->value['ocena'], $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	<span class="fa fa-star"></span>
			  <?php }
}
?>
            </div>
            <div class="card-footer">
              <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
objekat.php?tip=picerija&id=<?php echo $_smarty_tpl->tpl_vars['picerija']->value['id_ugostiteljskog'];?>
" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 1) {?> 
 </div>      
 <?php } elseif ($_smarty_tpl->tpl_vars['k']->value % 2 === 1) {?> 
  	</div>
 <?php }?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['poslasticare']->value, 'poslasticara', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['poslasticara']->value) {
?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 0) {?>
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Poslasticare</h4></div>
	</div>
 <?php } elseif ($_smarty_tpl->tpl_vars['k']->value%2 === 0) {?> 
  	<div class="row text-center dmeals-row-top-margin">
 <?php }?>
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['poslasticara']->value['pocetna_slika'];?>
" alt="">
            <div class="card-body">
              <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['poslasticara']->value['naziv'];?>
</h4>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['poslasticara']->value['kratak_opis'];?>
</p>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? $_smarty_tpl->tpl_vars['poslasticara']->value['ocena']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['poslasticara']->value['ocena']-1)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = 0, $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	 <span class="fa fa-star star-checked"></span>
              <?php }
}
?>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['poslasticara']->value['ocena']) : $_smarty_tpl->tpl_vars['poslasticara']->value['ocena']-(4)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = $_smarty_tpl->tpl_vars['poslasticara']->value['ocena'], $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	<span class="fa fa-star"></span>
			  <?php }
}
?>
            </div>
            <div class="card-footer">
              <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
objekat.php?tip=poslasticara&id=<?php echo $_smarty_tpl->tpl_vars['poslasticara']->value['id_ugostiteljskog'];?>
" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 1) {?> 
 </div>      
 <?php } elseif ($_smarty_tpl->tpl_vars['k']->value % 2 === 1) {?> 
  	</div>
 <?php }?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kafici']->value, 'kafic', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['kafic']->value) {
?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 0) {?>
 	<div class="row text-center dmeals-row-top-margin">
	<div class='category-caption'>
		<div class='category-caption-title'><h4>Kafici</h4></div>
	</div>
  <?php } elseif ($_smarty_tpl->tpl_vars['k']->value%2 === 0) {?> 
  	<div class="row text-center dmeals-row-top-margin">
 <?php }?>
        <div class="col-lg-6 col-md-12 mb-8">
          <div class="card">
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['kafic']->value['pocetna_slika'];?>
" alt="">
            <div class="card-body">
              <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['kafic']->value['naziv'];?>
</h4>
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['kafic']->value['kratak_opis'];?>
</p>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? $_smarty_tpl->tpl_vars['kafic']->value['ocena']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['kafic']->value['ocena']-1)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = 0, $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	 <span class="fa fa-star star-checked"></span>
              <?php }
}
?>
              <?php
$_smarty_tpl->tpl_vars['ocena'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ocena']->step = 1;$_smarty_tpl->tpl_vars['ocena']->total = (int) ceil(($_smarty_tpl->tpl_vars['ocena']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['kafic']->value['ocena']) : $_smarty_tpl->tpl_vars['kafic']->value['ocena']-(4)+1)/abs($_smarty_tpl->tpl_vars['ocena']->step));
if ($_smarty_tpl->tpl_vars['ocena']->total > 0) {
for ($_smarty_tpl->tpl_vars['ocena']->value = $_smarty_tpl->tpl_vars['kafic']->value['ocena'], $_smarty_tpl->tpl_vars['ocena']->iteration = 1;$_smarty_tpl->tpl_vars['ocena']->iteration <= $_smarty_tpl->tpl_vars['ocena']->total;$_smarty_tpl->tpl_vars['ocena']->value += $_smarty_tpl->tpl_vars['ocena']->step, $_smarty_tpl->tpl_vars['ocena']->iteration++) {
$_smarty_tpl->tpl_vars['ocena']->first = $_smarty_tpl->tpl_vars['ocena']->iteration === 1;$_smarty_tpl->tpl_vars['ocena']->last = $_smarty_tpl->tpl_vars['ocena']->iteration === $_smarty_tpl->tpl_vars['ocena']->total;?>
              	<span class="fa fa-star"></span>
			  <?php }
}
?>
            </div>
            <div class="card-footer">
              <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
objekat.php?tip=kafic&id=<?php echo $_smarty_tpl->tpl_vars['kafic']->value['id_ugostiteljskog'];?>
" class="btn btn-primary">Saznaj više</a>
            </div>
          </div>
        </div>
 <?php if ($_smarty_tpl->tpl_vars['k']->value === 1) {?> 
 </div>      
 <?php } elseif ($_smarty_tpl->tpl_vars['k']->value % 2 === 1) {?> 
  	</div>
 <?php }?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php echo smarty_function_fetch(array('file'=>((string)$_smarty_tpl->tpl_vars['APS_PATH_TEMPLATES']->value)."modal_login_form.tpl"),$_smarty_tpl);?>
 
<?php echo smarty_function_fetch(array('file'=>((string)$_smarty_tpl->tpl_vars['APS_PATH_TEMPLATES']->value)."modal_registrovanje_form.tpl"),$_smarty_tpl);?>
 
<?php echo smarty_function_fetch(array('file'=>((string)$_smarty_tpl->tpl_vars['APS_PATH_TEMPLATES']->value)."body_include_scripts.tpl"),$_smarty_tpl);?>
 
</body>
</html><?php }
}

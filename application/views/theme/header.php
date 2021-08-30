<!DOCTYPE html>
<html lang="en" style="background: rgb(223,231,241);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>vozama-web</title>
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-with-Search.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Clean.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/fonts/iconapp.ico') ?>">
</head>

<body style="background: rgba(223,231,241,0.95);height: 683px;width: auto;">
<header class="header-dark" style="height: 73px;background: rgb(255,255,255);padding-left: 0px;padding-bottom: 70px; width: auto;">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="#" style="margin-right: 13px;color: var(--secondary);font-size: 20px;">vozama</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav">
			<?php switch ($session->user_type_code) {

				case 2:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('alph')?>">Alphabétisation</a></li> <?php
					break;
				case 3:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('env')?>">Environnement</a></li> <?php
					break;
				case 4:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('dev')?>">Développement</a></li> <?php
					break;
				case 5:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('suiv')?>">Suivi et évaluation</a></li> <?php
					break;
				case 6:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('com')?>">Communication</a></li> <?php
					break;
				case 7:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('tour')?>">Tourisme solidaire</a></li> <?php
					break;
				case 8:
						?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('sec')?>">Securité</a></li> <?php
				break;
				case 9:
					?> <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('en')?>">Entreprise</a></li> <?php
			break;
				default:
				?>
				<li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('alph')?>"> Alphabétisation</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('en')?>"> Entreprise</a></li>
				<li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('env')?>"> Environnement</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('dev')?>"> Développement</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('suiv')?>"> Suivi et évaluation</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('com')?>"> Communication</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('tour')?>"> Tourisme solidaire</a></li>
				<li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('sec')?>"> Securité </a></li>
				 <?php
			}
			
			?>
			</ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"></label></div>
            </form>
			<div class="dropdown show">
				<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-gear" style="font-size: 22px;"></i></a>
    				<div class="dropdown-menu hide">
						<?php switch ($session->user_type_code) {

							  case 2:?>
							  <a class="dropdown-item" href="<?php echo base_url('tbaplh')?>"><i class="fa fa-table"></i> Table de base</a>
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 3:
							  ?>
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 4:
							  ?>
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 5:
							  ?> 
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 6:
							  ?> 
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 7:
							  ?> 
							  <a class="dropdown-item" href="<?php echo base_url('tourchmbr')?>"><i class="fa fa-hotel"></i> Chambre</a>
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 8:
							  ?> 
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  case 9:
							  ?> 
							  <a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
							  <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a>
							  <?php
							  break;
							  default:
								?>
						<a class="dropdown-item" href="<?php echo base_url('usermgr')?>"><i class="fa fa-user"></i> Utilisateur</a>
						<a class="dropdown-item" href="<?php echo base_url('planning');?>" ><i class="fa fa-calendar"></i> Plannings</a>
						<a class="dropdown-item" href="<?php echo base_url('tbaplh')?>"><i class="fa fa-table"></i> Table de base</a>
						<a class="dropdown-item" href="<?php echo base_url('tourchmbr')?>"><i class="fa fa-hotel"></i> Chambre</a>
						<a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i> Deconnexion</a></div>
						<?php
						}
			
						?>
					</div>
			
        </div>
    </div>
</nav>
</header>

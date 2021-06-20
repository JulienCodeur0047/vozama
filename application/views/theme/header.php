<!DOCTYPE html>
<html lang="en" style="background: rgb(223,231,241);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-with-Search.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Clean.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css') ?>">
</head>

<body style="background: rgba(223,231,241,0.95);height: 683px;">
<header class="header-dark" style="height: 73px;background: rgb(255,255,255);padding-left: 0px;padding-bottom: 70px;">
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
				default:
				?> 
				<li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('alph')?>"><i class="fa fa-book" style="font-size: smaller;"></i> Alphabétisation</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('env')?>"><i class="fa fa-tree" style="font-size: smaller;"></i> Environnement</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('dev')?>"><i class="fa fa-dashboard" style="font-size: smaller;"></i> Développement</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('suiv')?>"><i class="fa fa-address-card" style="font-size: smaller;"></i> Suivi et évaluation</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('com')?>"><i class="fa fa-exchange" style="font-size: smaller;"></i> Communication</a></li>
                <li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('tour')?>"><i class="fa fa-subway" style="font-size: smaller;"></i> Tourisme solidaire</a></li>
				<li class="nav-item" style="font-size: 13px;"><a class="nav-link" href="<?php echo base_url('sec')?>"><i class="fa fa-user-secret" style="font-size: smaller;"></i> Securité </a></li>
				 <?php
			}
			
			?>
			</ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"></label></div>
            </form><a class="btn btn-light action-button" role="button" href="<?php echo base_url('logout')?>" style="color: var(--blue);background: var(--red);font-size: 13px;"><i class="fa fa-power-off"></i></a>
        </div>
    </div>
</nav>
</header>

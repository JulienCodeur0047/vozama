<?php $this->load->view('theme/header_env');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newenv" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Gestion d&#39;environnement </h1>
            <div class="table-responsive table-bordered" style="width: auto;font-size: 12px;">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 120px;padding: 4.8px;padding-bottom: 46.8px;">Site</th>
                            <th style="width: 122px;padding-bottom: 44.8px;">Commune</th>
                            <th style="width: 149px;padding-bottom: 44.8px;">Année départ</th>
                            <th style="width: 231px;padding-left: 5.8px;padding-bottom: 12.8px;">Nbr arbres plantées par année  <div class="col" style="width: 77.406px;">
                                    <div class="row" style="width: 195px;">
                                        <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;">2020</label></div>
                                        <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;">2021</label></div>
                                        <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;">2022</label></div>
                                        <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;">2023</label></div>
                                    </div>
                                </div>
                            </th>
                            <th style="width: 137px;padding-bottom: 21.8px;">Total/ estimation arbres sur la zone<br /></th>
                            <th style="width: 99px;padding-bottom: 20.8px;">Date dernière plantation<br /></th>
                            <th style="width: 144px;padding-bottom: 19.8px;">Date dernière visite <br /></th>
                            <th style="width: 123px;padding-bottom: 37.8px;">Taux de survie <br /></th>
                            <th style="padding-bottom: 1.8px;">Observations<br /> générales<br /><br /></th>
                            <th style="padding-bottom: 19.8px;width: 89px;">Bailleur<br /><br /></th>
                            <th style="width: 118px;padding-bottom: 38.8px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php foreach ($env as $env) { ?>
                        <tr>
                            <td><?php echo $env->env_site?></td>
                            <td><?php echo $env->env_commune?></td>
                            <td><?php echo $env->env_annee_depart?></td>
                            <td>
                                <div class="row" style="width: 195px;margin-left: 2px;">
                                    <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;"><?php echo $env->env_nb_arbre_2020?></label></div>
                                    <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;"><?php echo $env->env_nb_arbre_2021?></label></div>
                                    <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;"><?php echo $env->env_nb_arbre_2022?></label></div>
                                    <div class="col" style="width: 48px;"><label class="col-form-label" style="width: 29.6094px;"><?php echo $env->env_nb_arbre_2023?></label></div>
                                </div>
                            </td>
                            <td><?php echo $env->env_total_est_zone?></td>
                            <td><?php echo $env->env_date_dern_plant?></td>
                            <td><?php echo $env->env_date_dern_visit?></td>
                            <td><?php echo $env->env_taux_survie?></td>
                            <td><?php echo $env->env_obs_gal?></td>
                            <td><?php echo $env->env_bailleur?></td>
                            <td style="font-size: 12px;">
							<a class="btn btn-light btn-edit" href="#"
								data-id="<?php echo $env->id;?>"
								data-site_id="<?php echo $env->site_id;?>"
								data-commune_id="<?php echo $env->commune_id;?>"
								data-env_site="<?php echo $env->env_site;?>"
								data-env_commune="<?php echo $env->env_commune;?>"
								data-env_annee_depart="<?php echo $env->env_annee_depart;?>"
								data-env_nb_arbre_2020="<?php echo $env->env_nb_arbre_2020;?>"
								data-env_nb_arbre_2021="<?php echo $env->env_nb_arbre_2021;?>"
								data-env_nb_arbre_2022="<?php echo $env->env_nb_arbre_2022;?>"
								data-env_nb_arbre_2023="<?php echo $env->env_nb_arbre_2023;?>"
								data-env_total_est_zone="<?php echo $env->env_total_est_zone;?>"
								data-env_date_dern_plant="<?php echo $env->env_date_dern_plant;?>"
								data-env_date_dern_visit="<?php echo $env->env_date_dern_visit;?>"
								data-env_taux_survie="<?php echo $env->env_taux_survie;?>"
								data-env_obs_gal="<?php echo $env->env_obs_gal;?>"
								data-env_bailleur="<?php echo $env->env_bailleur;?>"
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 26px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light" 
							
							type="button" style="background: rgb(210,128,136);width: 38px;height: 26px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
						<?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('environnement/modal_create_env');?>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		
		$('#newenv').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const site_id = $(this).data('site_id');
            const commune_id = $(this).data('commune_id');
            const env_site = $(this).data('env_site');
            const env_commune = $(this).data('env_commune');
            const env_annee_depart = $(this).data('env_annee_depart');
            const env_nb_arbre_2020 = $(this).data('env_nb_arbre_2020');
            const env_nb_arbre_2021 = $(this).data('env_nb_arbre_2021');
            const env_nb_arbre_2022 = $(this).data('env_nb_arbre_2022');
            const env_nb_arbre_2023 = $(this).data('env_nb_arbre_2023');
            const env_total_est_zone = $(this).data('env_total_est_zone');
            const env_date_dern_plant = $(this).data('env_date_dern_plant');
            const env_date_dern_visit = $(this).data('env_date_dern_visit');
            const env_taux_survie = $(this).data('env_taux_survie');
            const env_obs_gal = $(this).data('env_obs_gal');
            const env_bailleur = $(this).data('env_bailleur');
            // Set data to Form Edit
            $('.id').val(id);
            $('.site_id').val(site_id).trigger('change');
            $('.commune_id').val(commune_id).trigger('change');
            $('.env_annee_depart').val(env_annee_depart);
            $('.env_nb_arbre_2020').val(env_nb_arbre_2020);
            $('.env_nb_arbre_2021').val(env_nb_arbre_2021);
            $('.env_nb_arbre_2022').val(env_nb_arbre_2022);
            $('.env_nb_arbre_2023').val(env_nb_arbre_2023);
            $('.env_total_est_zone').val(env_total_est_zone);
            $('.env_date_dern_plant').val(env_date_dern_plant);
            $('.env_date_dern_visit').val(env_date_dern_visit);
            $('.env_taux_survie').val(env_taux_survie);
            $('.env_obs_gal').val(env_obs_gal);
            $('.env_bailleur').val(env_bailleur);
            // Call Modal Edit
            $('#newenv').modal('show');
        });
        
    });
</script>

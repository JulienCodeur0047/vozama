<?php $this->load->view('theme/header_com'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 399px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newres" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintres" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste des historiques de publication des articles </h1>
            <a class="btn btn-light action-button" role="button" href="#filterres" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('comres');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            </h1>
			<div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 48px;">Titre de publication</th>
                            <th style="width: 48px;">Plateforme</th>
                            <th style="width: 47px;">Date et heure de publication</th>
                            <th style="width: 50px;">Url</th>
                            <th style="width: 50px;">Photo</th>
                            <th style="width: 50px;">Vidéo</th>
                            <th style="width: 73px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $res) { ?>
                        <tr>
                            <td><?php echo $res->socn_titre; ?></td>
                            <td><?php echo $res->socn_platform; ?></td>
                            <td><?php echo $res->socn_date_pub. " " .$res->socn_hr_pub ; ?></td>
                            <td><?php echo $res->socn_lien_web; ?></td>
                            <td><?php echo $res->socn_vd_pub_nbr; ?></td>
                            <td><?php echo $res->socn_ph_pub_nbr; ?></td>
                            <td style="font-size: 12px;width: 30px;">
							<a class="btn btn-light btn-edit" href="#"
							data-id="<?php echo $res->id; ?>"
							data-socn_titre="<?php echo $res->socn_titre; ?>"
							data-socn_date_pub="<?php echo $res->socn_date_pub; ?>"
							data-socn_hr_pub="<?php echo $res->socn_hr_pub; ?>"
							data-socn_lien_web="<?php echo $res->socn_lien_web; ?>"
							data-socn_vd_pub_nbr="<?php echo $res->socn_vd_pub_nbr; ?>"
							data-socn_ph_pub_nbr="<?php echo $res->socn_ph_pub_nbr; ?>"
							data-socn_vd_ref_pub="<?php echo $res->socn_vd_ref_pub; ?>"
							data-socn_ph_ref_pub="<?php echo $res->socn_ph_ref_pub; ?>"
							data-socn_article="<?php echo $res->socn_article; ?>"
							data-socn_platform="<?php echo $res->socn_platform; ?>"
							 type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer le <?php echo $res->socn_titre.' sur '.$res->socn_platform ?> ?');"
							href="<?php echo base_url('comdeleteres/'.$res->id)?>" 
							 type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a>
							</td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('com/modal_create_res'); ?>
<?php $this->load->view('com/modal_filter_res'); ?>
<?php $this->load->view('com/modal_create_res'); ?>
<?php $this->load->view('com/modal_print_filter_res'); ?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){

		$('#newres').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filterprintres').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const socn_titre = $(this).data('socn_titre');
            const socn_date_pub = $(this).data('socn_date_pub');
            const socn_hr_pub = $(this).data('socn_hr_pub');
            const socn_lien_web = $(this).data('socn_lien_web');
            const socn_vd_pub_nbr = $(this).data('socn_vd_pub_nbr');
            const socn_ph_pub_nbr = $(this).data('socn_ph_pub_nbr');
            const socn_vd_ref_pub = $(this).data('socn_vd_ref_pub');
            const socn_ph_ref_pub = $(this).data('socn_ph_ref_pub');
            const socn_article = $(this).data('socn_article');
            const socn_platform = $(this).data('socn_platform');
            // Set data to Form Edit
            $('.id').val(id);
            $('.socn_titre').val(socn_titre);
            $('.socn_date_pub').val(socn_date_pub);
            $('.socn_hr_pub').val(socn_hr_pub);
            $('.socn_lien_web').val(socn_lien_web);
            $('.socn_vd_pub_nbr').val(socn_vd_pub_nbr);
            $('.socn_vd_ref_pub').val(socn_vd_ref_pub);
            $('.socn_ph_ref_pub').val(socn_ph_ref_pub);
            $('.socn_ph_pub_nbr').val(socn_ph_pub_nbr);
            $('.socn_article').val(socn_article);
            $('.socn_platform').val(socn_platform);
            // Call Modal Edit
            $('#newres').modal('show');
        });
		
        
    });

</script>

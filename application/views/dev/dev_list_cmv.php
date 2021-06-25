<?php $this->load->view('theme/header_dev'); ?>
<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newcmv" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Comité villageois</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">
			<a class="btn btn-light action-button" role="button" href="#filtercmv" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('devcmv');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 160px;">Nom & Prénoms</th>
                            <th style="width: 55px;">Adresse</th>
                            <th style="width: 62px;">Tel</th>
                            <th style="width: 73px;">Site</th>
                            <th style="width: 70px;height: -12px;">Coordonnée GPS</th>
                            <th style="width: 68px;height: -12px;">Nbr Parent Gere</th>
                            <th style="width: 22px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $cmv) { ?>
                        <tr>
                            <td><?php echo $cmv->cmv_name; ?> <?php echo $cmv->cmv_firstname ?> </td>
                            <td><?php echo $cmv->cmv_adresse; ?></td>
                            <td><?php echo $cmv->cmv_tel; ?></td>
                            <td><?php echo $cmv->cmv_site; ?></td>
                            <td><?php echo $cmv->cmv_gps; ?></td>
                            <td><?php echo $cmv->cmv_nbr_par_ger; ?></td>
                            <td style="font-size: 12px;"><button class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></button>
							<a class="btn btn-light btn-edit" href="#" 
							data-id="<?php echo $cmv->id; ?>"
							data-cmv_name="<?php echo $cmv->cmv_name; ?>"
							data-cmv_firstname="<?php echo $cmv->cmv_firstname; ?>"
							data-cmv_adresse="<?php echo $cmv->cmv_adresse; ?>"
							data-cmv_tel="<?php echo $cmv->cmv_tel; ?>"
							data-cmv_site="<?php echo $cmv->cmv_site; ?>"
							data-cmv_gps="<?php echo $cmv->cmv_gps; ?>"
							data-cmv_nbr_par_ger="<?php echo $cmv->cmv_nbr_par_ger; ?>"
							data-cmv_nbr_enfant="<?php echo $cmv->cmv_nbr_enfant; ?>"
							data-cmv_titre="<?php echo $cmv->cmv_titre; ?>"
							data-site_id="<?php echo $cmv->site_id; ?>"
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light" role="button" 
                            onclick="return confirm('Voulez-vous supprimer le Comite <?php echo $cmv->cmv_name.' '.$cmv->cmv_titre; ?> ?');"
							href="<?php echo base_url('deletedevcmv/'.$cmv->id)?>" 
                            style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
                        <?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div>
<?php $this->load->view('dev/modal_create_cmv'); ?>
<?php $this->load->view('dev/modal_filter_cmv'); ?>
<?php $this->load->view('dev/modal_filter_print'); ?>
<?php $this->load->view('dev/modal_up_cmv'); ?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const cmv_name = $(this).data('cmv_name');
            const cmv_firstname = $(this).data('cmv_firstname');
            const cmv_adresse = $(this).data('cmv_adresse');
            const cmv_tel = $(this).data('cmv_tel');
            const cmv_site = $(this).data('cmv_site');
            const cmv_gps = $(this).data('cmv_gps');
            const cmv_nbr_par_ger = $(this).data('cmv_nbr_par_ger');
            const cmv_nbr_enfant = $(this).data('cmv_nbr_enfant');
            const cmv_titre = $(this).data('cmv_titre');
            const site_id = $(this).data('site_id');
            // Set data to Form Edit
            $('.id').val(id);
            $('.cmv_name').val(cmv_name);
            $('.cmv_firstname').val(cmv_firstname);
            $('.cmv_adresse').val(cmv_adresse);
            $('.cmv_tel').val(cmv_tel);
            $('.cmv_site').val(cmv_site).trigger('change');
            $('.cmv_gps').val(cmv_gps);
            $('.cmv_nbr_par_ger').val(cmv_nbr_par_ger);
            $('.cmv_nbr_enfant').val(cmv_nbr_enfant);
            $('.cmv_titre').val(cmv_titre).trigger('change');
            // Call Modal Edit
            $('#upcmv').modal('show');
        });
        
    });
</script>

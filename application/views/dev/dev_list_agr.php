<?php $this->load->view('theme/header_dev'); ?>
<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newagr" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintagr" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">AGR - Activité Génératrice des Revenue</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;height: 44px;">Parent</th>
                            <th style="width: 62px;">Filiere</th>
                            <th style="width: 73px;">Qté D</th>
                            <th style="width: 70px;height: -12px;">Date D</th>
                            <th style="width: 68px;height: -12px;">Date Suivi</th>
                            <th style="width: 68px;height: -12px;">Formation</th>
                            <th style="width: 23px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $agr) { ?>
                        <tr>
                            <td><?php echo $agr->agr_parent; ?></td>
                            <td><?php echo $agr->agr_filiere; ?></td>
                            <td><?php echo $agr->agr_qte; ?></td>
                            <td><?php echo $agr->agr_date_d; ?></td>
                            <td><?php echo $agr->agr_date_suivi; ?></td>
                            <td><?php echo $agr->agr_formation; ?></td>
                            <td style="font-size: 12px;">
							
							<a class="btn btn-light btn-edit" href="#" 
							data-id="<?= $agr->id;?>" 
							data-agr_parent="<?= $agr->agr_parent;?>" 
							data-agr_filiere="<?= $agr->agr_filiere;?>" 
							data-agr_qte="<?= $agr->agr_qte;?>" 
							data-agr_date_d="<?= $agr->agr_date_d;?>" 
							data-agr_date_suivi="<?= $agr->agr_date_suivi;?>" 
							data-agr_formation="<?= $agr->agr_formation;?>" 
							data-parent_id="<?= $agr->parent_id;?>"
							data-agr_unite="<?= $agr->agr_unite;?>"
							
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" 
				
							style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light" role="button" 
                            onclick="return confirm('Voulez-vous supprimer le AGR <?php echo $agr->agr_filiere ?> ?');"
							href="<?php echo base_url('deletedevagr/'.$agr->id)?>" 
                            style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
                    <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div>
<?php $this->load->view('dev/modal_create_agr'); ?>
<?php $this->load->view('dev/modal_filter_print_agr'); ?>
<?php $this->load->view('dev/modal_up_agr'); ?>

</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const agr_parent = $(this).data('agr_parent');
            const agr_filiere = $(this).data('agr_filiere');
            const agr_qte = $(this).data('agr_qte');
            const agr_date_d = $(this).data('agr_date_d');
            const agr_date_suivi = $(this).data('agr_date_suivi');
            const agr_formation = $(this).data('agr_formation');
            const parent_id = $(this).data('parent_id');
            const agr_unite = $(this).data('agr_unite');
            // Set data to Form Edit
            $('.id').val(id);
            $('.agr_parent').val(agr_parent).trigger('change');
            $('.agr_qte').val(agr_qte);
            $('.agr_filiere').val(agr_filiere);
            $('.agr_date_d').val(agr_date_d);
            $('.agr_date_suivi').val(agr_date_suivi);
            $('.agr_formation').val(agr_formation);
            $('.parent_id').val(parent_id);
            $('.agr_unite').val(agr_unite).trigger('change');
            // Call Modal Edit
            $('#editagr').modal('show');
        });
        
    });
</script>

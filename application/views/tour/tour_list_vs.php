<?php $this->load->view('theme/header_tour'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newvs" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filtervsprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste de visite de site</h1>
            <a class="btn btn-light action-button" role="button" href="#filtervs" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('tourvs');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 66px;">Site</th>
                            <th style="width: 60px;">Nbr jour</th>
                            <th style="width: 50px;">Voiture</th>
                            <th style="width: 41px;">Sous Total</th>
                            <th style="width: 44px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $vs) { ?>
                        <tr>
                            <td><?php echo $vs->vs_site;?></td>
                            <td><?php echo $vs->vs_nbr_jr;?></td>
                            <td><?php echo $vs->vs_prix_a_voiture;?></td>
                            <td><?php echo $vs->vs_prix_total;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light btn-edit" href="#"
                            data-id="<?php echo $vs->id;?>"
                            data-vs_site="<?php echo $vs->vs_site;?>"
                            data-vs_nbr_jr="<?php echo $vs->vs_nbr_jr;?>"
                            data-vs_prix_a_voiture="<?php echo $vs->vs_prix_a_voiture;?>"
                            data-vs_prix_total="<?php echo $vs->vs_prix_total;?>"
                            data-vs_prix_jour="<?php echo $vs->vs_prix_jour;?>"
                            data-vs_prix_demi_jr="<?php echo $vs->vs_prix_demi_jr;?>"
                            data-vs_prix_s_voiture="<?php echo $vs->vs_prix_s_voiture;?>"
                            data-site_id="<?php echo $vs->site_id;?>"
                            data-vs_date="<?php echo $vs->vs_date;?>"
                            data-vs_dem_jr="<?php echo $vs->vs_dem_jr;?>"
                            
                             type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light"
                            onclick="return confirm('Voulez-vous supprimer le visite de site <?php echo $vs->id;?> site: <?php echo $vs->vs_site;?>?');"
							href="<?php echo base_url('tourdelvs/'.$vs->id)?>" 
                             type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
                    <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tour/modal_create_vs');?>
<?php $this->load->view('tour/modal_filter_vs');?>
<?php $this->load->view('tour/modal_print_filter_vs');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){

		$('#newvs').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filtervs').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filtervsprint').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const vs_site = $(this).data('vs_site');
            const vs_nbr_jr = $(this).data('vs_nbr_jr');
            const vs_prix_a_voiture = $(this).data('vs_prix_a_voiture');
            const vs_prix_total = $(this).data('vs_prix_total');
            const vs_prix_jour = $(this).data('vs_prix_jour');
            const vs_prix_demi_jr = $(this).data('vs_prix_demi_jr');
            const vs_prix_s_voiture = $(this).data('vs_prix_s_voiture');
            const site_id = $(this).data('site_id');
            const vs_dem_jr = $(this).data('vs_dem_jr');
            const vs_date = $(this).data('vs_date');
            // Set data to Form Edit
            $('.id').val(id);
            $('.vs_site').val(vs_site);
            $('.vs_nbr_jr').val(vs_nbr_jr);
            $('.vs_prix_a_voiture').val(vs_prix_a_voiture);
            $('.vs_prix_total').val(vs_prix_total);
            $('.vs_prix_jour').val(vs_prix_jour);
            $('.vs_prix_demi_jr').val(vs_prix_demi_jr);
            $('.vs_prix_s_voiture').val(vs_prix_s_voiture);
            $('.site_id').val(site_id).trigger('change');
            $('.vs_dem_jr').val(vs_dem_jr);
            $('.vs_date').val(vs_date);
            // Call Modal Edit
            $('#newvs').modal('show');
        });
		
        
    });

</script>
<?php $this->load->view('theme/header_tour'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newtrst" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintTrst" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste touriste </h1>
            <a class="btn btn-light action-button" role="button" href="#filterTrst" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('tourtrst');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 144px;">Nom et Prénoms</th>
                            <th style="width: 25px;">Nationalité</th>
                            <th style="width: 105px;height: 44px;">Tel et email</th>
                            <th style="width: 31px;height: 44px;">News letter</th>
                            <th style="width: 15px;height: 44px;">Gazette mail</th>
                            <th style="width: 44px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $trst) {?>
                        <tr>
                            <td><?php echo $trst->tour_name;?> <?php echo $trst->tour_firstname;?></td>
                            <td><?php echo $trst->tour_nationalite;?></td>
                            <td>(<?php echo $trst->tour_tel;?>) <?php echo $trst->tour_email;?></td>
                            <td><?php echo $trst->tour_newsletter;?></td>
                            <td><?php echo $trst->tour_gazette;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light btn-edit" 
                            data-id="<?php echo $trst->id;?>"
                            data-tour_name="<?php echo $trst->tour_name;?>"
                            data-tour_firstname="<?php echo $trst->tour_firstname;?>"
                            data-tour_nationalite="<?php echo $trst->tour_nationalite;?>"
                            data-tour_tel="<?php echo $trst->tour_tel;?>"
                            data-tour_email="<?php echo $trst->tour_email;?>"
                            data-tour_newsletter="<?php echo $trst->tour_newsletter;?>"
                            data-tour_gazette="<?php echo $trst->tour_gazette;?>"
                            data-tour_address="<?php echo $trst->tour_address;?>"
                            data-tour_lieu_nais="<?php echo $trst->tour_lieu_nais;?>"
                            data-tour_date_birth="<?php echo $trst->tour_date_birth;?>"
                            type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></a>
                            <a class="btn btn-light" 
                            onclick="return confirm('Voulez-vous supprimer le touriste <?php echo $trst->tour_name;?>  <?php echo $trst->tour_firstname;?>?');"
							href="<?php echo base_url('tourdeltrst/'.$trst->id)?>" 
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
<?php $this->load->view('tour/modal_create_trst');?>
<?php $this->load->view('tour/modal_filter_trst');?>
<?php $this->load->view('tour/modal_print_filter_trst');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){

		$('#newtrst').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filterTrst').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filterprintTrst').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const tour_name = $(this).data('tour_name');
            const tour_firstname = $(this).data('tour_firstname');
            const tour_nationalite = $(this).data('tour_nationalite');
            const tour_tel = $(this).data('tour_tel');
            const tour_email = $(this).data('tour_email');
            const tour_newsletter = $(this).data('tour_newsletter');
            const tour_gazette = $(this).data('tour_gazette');
            const tour_address = $(this).data('tour_address');
            const tour_lieu_nais = $(this).data('tour_lieu_nais');
            const tour_date_birth = $(this).data('tour_date_birth');
            // Set data to Form Edit
            $('.id').val(id);
            $('.tour_name').val(tour_name);
            $('.tour_firstname').val(tour_firstname);
            $('.tour_nationalite').val(tour_nationalite);
            $('.tour_tel').val(tour_tel);
            $('.tour_email').val(tour_email);
            $('.tour_newsletter').val(tour_newsletter);
            $('.tour_gazette').val(tour_gazette);
            $('.tour_address').val(tour_address);
            $('.tour_lieu_nais').val(tour_lieu_nais);
            $('.tour_date_birth').val(tour_date_birth);
            // Call Modal Edit
            $('#newtrst').modal('show');
        });
		
        
    });

</script>
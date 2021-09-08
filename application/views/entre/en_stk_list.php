<?php $this->load->view('theme/header_entre')?>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Gestion de stock</h1>
            <div class="row">
                <div class="col">
                    <h6 style="font-size: 14px;color: var(--secondary);margin-top: 7px;">Produits</h6>
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="font-size: 11px;height: 58px;padding-top: 3px;">
                        <div class="container"><button data-toggle="collapse" data-target="#navcol-2" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-2">
                                <ul class="navbar-nav"></ul>
                                <form class="form-inline mr-auto" target="_self">
                                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input type="search" class="form-control search-field" id="search-field-1" name="searchp" style="height: 26px;font-size: 12px;border-bottom-color: #cccccc;width: 182px;" placeholder="Recherche" /></div>
                                </form><a class="btn btn-light action-button" role="button" data-toggle="modal" href="#newstk" style="height: 21px;padding-top: 2px;padding-bottom: 1px;width: 92.0781px;border-top-right-radius: 0;border-bottom-right-radius: 0;"><i class="fa fa-plus"></i> Produit</a>
								<a class="btn btn-light action-button" role="button" data-toggle="modal" href="#printstk" style="height: 21px;padding-top: 3px;padding-bottom: 1px;width: 45.07810000000001px;border-top-left-radius: 0;border-bottom-left-radius: 0;background: var(--secondary);padding-left: 16px;"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </nav><a class="btn btn-light action-button" role="button" data-toggle="modal" href="#filterstk" style="height: 24px;padding-top: 2px;padding-bottom: 1px;width: 35.07810000000001px;border-top-right-radius: 0;border-bottom-right-radius: 0;background: rgb(107,188,164);border-top-left-radius: 0;border-bottom-left-radius: 0;font-size: 12px;color: rgb(33, 37, 41);"><i class="fa fa-filter" style="color: rgb(255,255,255);"></i></a>
					<a class="btn btn-light action-button" role="button" href="<?php echo base_url('enstk') ?>" style="height: 24px;padding-top: 2px;padding-bottom: 1px;width: 35.07810000000001px;border-top-right-radius: 0;border-bottom-right-radius: 0;border-top-left-radius: 0;border-bottom-left-radius: 0;font-size: 12px;background: rgb(205,205,205);color: rgb(255,255,255);"><i class="fa fa-refresh"></i></a>
                    <div class="table-responsive table-bordered" style="font-size: 11px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Désignation</th>
                                    <th>Qté</th>
                                    <th>Unité</th>
                                    <th>Type</th>
                                    <th>Date stock</th>
                                    <th>Fournisseur</th>
                                    <th style="width: 70px;"></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach ($prod as $prod) { ?>
                                <tr>
                                    <td><?php echo $prod->stk_designation;?></td>
                                    <td><?php echo $prod->stk_qte;?></td>
                                    <td><?php echo $prod->stk_unit;?></td>
                                    <td><?php echo $prod->stk_type;?></td>
                                    <td><?php echo $prod->stk_date;?></td>
                                    <td><?php echo $prod->stk_fournisseur;?></td>
                                    <td style="padding: -0.2px;">
									<a class="btn btn-primary btn-edit" href="#"
									data-id="<?php echo $prod->id;?>"
									data-stk_designation="<?php echo $prod->stk_designation;?>"
									data-stk_qte="<?php echo $prod->stk_qte;?>"
									data-stk_type="<?php echo $prod->stk_type;?>"
									data-stk_date="<?php echo $prod->stk_date;?>"
									data-stk_fournisseur="<?php echo $prod->stk_fournisseur;?>"
									type="button" style="font-size: 10px;height: 20px;padding: 0px;padding-top: 0px;padding-right: 2px;padding-bottom: 0px;padding-left: 2px;border-radius: 0px;background: var(--success);"><i class="fa fa-sign-out"></i> sortie</a>
									<a href="#" style="margin-left: 3px;"><i class="fa fa-trash-o" style="font-size: 12px;margin-top: 0px;height: 20px;padding-top: 0px;color: var(--red);"></i></a></td>
                                </tr>
								<?php }?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 style="font-size: 14px;color: var(--secondary);margin-top: 7px;">Mouvement</h6>
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="font-size: 11px;height: 58px;padding-top: 3px;margin-bottom: 2px;">
                        <div class="container"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 14px;">
                                <ul class="navbar-nav"></ul>
                                <form class="form-inline mr-auto" target="_self">
                                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input type="search" class="form-control search-field" id="search-field" name="searchm" style="height: 26px;font-size: 12px;border-bottom-color: #cccccc;width: 182px;" placeholder="Recherche" /></div>
                                </form>
								<a class="btn btn-light action-button" role="button" data-toggle="modal" href="#printmvt" style="height: 21px;padding-top: 3px;padding-bottom: 1px;width: 45.07810000000001px;border-top-left-radius: 0;border-bottom-left-radius: 0;background: var(--secondary);padding-left: 16px;border-top-right-radius: 0;border-bottom-right-radius: 0;"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </nav><a class="btn btn-light action-button" role="button" data-toggle="modal" href="#filtermvt" style="height: 24px;padding-top: 2px;padding-bottom: 1px;width: 35.07810000000001px;border-top-right-radius: 0;border-bottom-right-radius: 0;background: rgb(107,188,164);border-top-left-radius: 0;border-bottom-left-radius: 0;font-size: 12px;color: rgb(33, 37, 41);"><i class="fa fa-filter" style="color: rgb(255,255,255);"></i></a>
					<a class="btn btn-light action-button" role="button" href="<?php echo base_url('enstk') ?>" style="height: 24px;padding-top: 2px;padding-bottom: 1px;width: 35.07810000000001px;border-top-right-radius: 0;border-bottom-right-radius: 0;border-top-left-radius: 0;border-bottom-left-radius: 0;font-size: 12px;background: rgb(205,205,205);color: rgb(255,255,255);"><i class="fa fa-refresh"></i></a>
                    <div class="table-responsive table-bordered" style="font-size: 11px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Date</th>
                                    <th>Fournisseur</th>
                                    <th>Destination</th>
                                    <th>Qté</th>
                                    <th>Unité</th>
                                    <th>Reste</th>
                                    <th>Désignation</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach ($mvt as $mvt) { ?>
                                <tr>
                                    <td><?php echo $mvt->mvt_etat;?></td>
                                    <td><?php echo $mvt->mvt_date;?></td>
                                    <td><?php echo $mvt->mvt_fournisseur;?></td>
                                    <td><?php echo $mvt->mvt_destination;?></td>
                                    <td><?php echo $mvt->mvt_qte;?></td>
                                    <td><?php echo $mvt->mvt_unit;?></td>
                                    <td><?php echo $mvt->mvt_reste;?></td>
                                    <td><?php echo $mvt->mvt_stk_designation;?></td>
                                </tr>
							<?php }?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('entre/modal_creat_stk');?>
<?php $this->load->view('entre/modal_creat_out');?>
<?php $this->load->view('entre/modal_filter_mvt');?>
<?php $this->load->view('entre/modal_filter_stk');?>
<?php $this->load->view('entre/modal_filter_stk_pdf');?>
<?php $this->load->view('entre/modal_filter_mvt_pdf');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#out').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#newstk').on('show.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#filtermvt').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#filterstk').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});$('#printstk').on('show.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});$('#printmvt').on('show.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const stk_designation = $(this).data('stk_designation');
            const stk_qte = $(this).data('stk_qte');
            const stk_type = $(this).data('stk_type');
            const stk_date = $(this).data('stk_date');
            const stk_fournisseur = $(this).data('stk_fournisseur');
            // Set data to Form Edit
            $('.id').val(id);
            $('.stk_designation').val(stk_designation);
            $('.stk_qte').val(stk_qte);
            $('.stk_type').val(stk_type);
            $('.stk_date').val(stk_date);
            $('.stk_fournisseur').val(stk_fournisseur);
            // Call Modal Edit
            $('#out').modal('show');
        });
		
        
    });

</script>

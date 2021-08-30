<section style="background: rgb(241,247,252);">
    <div style="height: 20px;"></div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-top: -8px;margin-bottom: 1px;height: 49px;">
        <div class="container"><a class="navbar-brand" href="#" style="margin-top: 9px;font-size: 14px;color: var(--gray);">Chambre</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 9px;">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#chmbr" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="<?php echo base_url('printlschmbr')?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste de chambre</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;height: auto;">
                <table class="table table-sm">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;padding: 4.8px;height: 30px;">No</th>
                            <th style="width: 178px;height: 30px;">Type</th>
                            <th style="width: 104px;height: 30px;">Prix Journalier</th>
                            <th style="width: 30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php foreach ($data as $chmbre) { ?>
                        <tr>
                            <td><?php echo $chmbre->chr_numero?></td>
                            <td><?php echo $chmbre->chr_type?></td>
                            <td><?php echo $chmbre->chr_prix_nuite?></td>
                            <td style="font-size: 12px;width: 30px;">
							<button class="btn btn-light btn-edit"
							data-id = <?php echo $chmbre->id?>
							data-chr_numero = <?php echo $chmbre->chr_numero?>
							data-chr_type = <?php echo $chmbre->chr_type?>
							data-chr_prix_nuite = <?php echo $chmbre->chr_prix_nuite?>
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 30px;margin-top: 0px;padding-top: 0px;border-radius: 0px;padding-bottom: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></button>
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer la Chambre Numero <?php echo $chmbre->chr_numero.' Type '.$chmbre->chr_type; ?> ?');"
							href="<?php echo base_url('tourdelch/'.$chmbre->id)?>" 
							 
							type="button" style="background: rgb(210,128,136);width: 38px;height: 30px;margin-top: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
						<?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tour/modal_create_chmbr')?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){
		$('#chmbr').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const chr_numero = $(this).data('chr_numero');
            const chr_type = $(this).data('chr_type');
            const chr_prix_nuite = $(this).data('chr_prix_nuite');
            // Set data to Form Edit
            $('.id').val(id);
            $('.chr_numero').val(chr_numero);
            $('.chr_type').val(chr_type).trigger('change');
            $('.chr_prix_nuite').val(chr_prix_nuite);
            // Call Modal Edit
            $('#chmbr').modal('show');
        });
		
        
    });

</script>

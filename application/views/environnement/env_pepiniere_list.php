<?php $this->load->view('theme/header_env');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newpep" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Pépinière et suivi</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
			<table class="table table-sm">
        <thead>
            <tr style="color: var(--gray);">
                <th style="width: 120px;">Date de m-à-j<br /></th>
                <th style="width: 122px;">ESPECES</th>
                <th style="width: 149px;">Fournisseurs</th>
                <th style="width: 114px;">Qté graine acheté</th>
                <th style="width: 137px;">Date de semis </th>
                <th style="width: 99px;">P.u</th>
                <th style="width: 152px;">Montant Total</th>
                <th style="width: 123px;">Stock réel</th>
                <th style="width: 104px;">Action</th>
            </tr>
        </thead>
        <tbody>
		<?php foreach ($data as $pep) { ?>
            <tr>
                <td><?php echo $pep->pep_date_maj;?></td>
                <td><?php echo $pep->pep_espece;?></td>
                <td><?php echo $pep->pep_fournisseur;?></td>
                <td><?php echo $pep->pep_qte_seed_acht;?></td>
                <td><?php echo $pep->pep_date_semis;?></td>
                <td><?php echo $pep->pep_pu;?></td>
                <td><?php echo $pep->pep_mont_total;?></td>
                <td><?php echo $pep->pep_stock_reel;?></td>
                <td style="font-size: 12px;">
				<a class="btn btn-light btn-edit" href="#"
							data-id="<?= $pep->id;?>"
							data-pep_date_maj="<?= $pep->pep_date_maj;?>"
							data-pep_espece="<?= $pep->pep_espece;?>"
							data-pep_fournisseur="<?= $pep->pep_fournisseur;?>"
							data-pep_date_acht_seed	="<?= $pep->pep_date_acht_seed	;?>"
							data-pep_qte_seed_acht="<?= $pep->pep_qte_seed_acht;?>"
							data-pep_date_semis="<?= $pep->pep_date_semis;?>"
							data-pep_date_menpot="<?= $pep->pep_date_menpot;?>"
							data-pep_nbr_menpot="<?= $pep->pep_nbr_menpot;?>"
							data-pep_entre_ext="<?= $pep->pep_entre_ext;?>"
							data-pep_morts="<?= $pep->pep_morts;?>"
							data-pep_vendue="<?= $pep->pep_vendue;?>"
							data-pep_shared="<?= $pep->pep_shared;?>"
							data-pep_pu="<?= $pep->pep_pu;?>"
							data-pep_mont_total="<?= $pep->pep_mont_total;?>"
							data-pep_stock_reel="<?= $pep->pep_stock_reel;?>"
							data-pep_note="<?= $pep->pep_note;?>"
				type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 26px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
				<a class="btn btn-light" 
				onclick="return confirm('Voulez-vous supprimer: du <?php echo $pep->pep_date_maj;?> <?= $pep->pep_espece;?> ?');"
							href="<?php echo base_url('envdelpep/'.$pep->id)?>" 
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
<div>
<?php $this->load->view('environnement/modal_create_peps');?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#newpep').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const pep_date_maj = $(this).data('pep_date_maj');
            const pep_espece = $(this).data('pep_espece');
            const pep_fournisseur = $(this).data('pep_fournisseur');
            const pep_date_acht_seed = $(this).data('pep_date_acht_seed');
            const pep_qte_seed_acht = $(this).data('pep_qte_seed_acht');
            const pep_date_semis = $(this).data('pep_date_semis');
            const pep_date_menpot = $(this).data('pep_date_menpot');
            const pep_nbr_menpot = $(this).data('pep_nbr_menpot');
            const pep_entre_ext = $(this).data('pep_entre_ext');
            const pep_morts = $(this).data('pep_morts');
            const pep_vendue = $(this).data('pep_vendue');
            const pep_shared = $(this).data('pep_shared');
            const pep_pu = $(this).data('pep_pu');
            const pep_mont_total = $(this).data('pep_mont_total');
            const pep_stock_reel = $(this).data('pep_stock_reel');
            const pep_note = $(this).data('pep_note');

            // Set data to Form Edit
            $('.id').val(id);
            $('.pep_date_maj').val(pep_date_maj);
            $('.pep_espece').val(pep_espece);
            $('.pep_fournisseur').val(pep_fournisseur);
            $('.pep_date_acht_seed').val(pep_date_acht_seed);
            $('.pep_qte_seed_acht').val(pep_qte_seed_acht);
            $('.pep_date_semis').val(pep_date_semis);
            $('.pep_date_menpot').val(pep_date_menpot);
            $('.pep_nbr_menpot').val(pep_nbr_menpot);
            $('.pep_entre_ext').val(pep_entre_ext);
            $('.pep_morts').val(pep_morts);
            $('.pep_vendue').val(pep_vendue);
            $('.pep_shared').val(pep_shared);
            $('.pep_pu').val(pep_pu);
            $('.pep_mont_total').val(pep_mont_total);
            $('.pep_stock_reel').val(pep_stock_reel);
            $('.pep_note').val(pep_note);
            // Call Modal Edit
            $('#newpep').modal('show');
        });
        
    });
</script>

<?php $this->load->view('theme/header_tour'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#resrve" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Réservation</a><a class="btn btn-light action-button" role="button" href="<?php echo base_url('printtourrsrv')?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <form method="POST">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste de chambre réservé </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;">N<strong>° Chambre</strong></th>
                            <th style="width: 59px;">Type</strong></th>
                            <th style="width: 105px;height: 44px;">Date</th>
                            <th style="width: 100px;height: 44px;">Client</th>
                            <th style="width: 30px;height: 44px;">Client Nbr</th>
                            <th style="width: 51px;height: 44px;">Repas</th>
                            <th style="width: 51px;height: 44px;">Viste de site</th>
                            <th style="width: 51px;height: 44px;">Note</th>
                            <th style="width: 51px;height: 44px;">Total</th>
                            <th style="width: 50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $res) { ?>
                        <tr>
                            <td><?php echo $res->res_chr_num;?></td>
                            <td><?php echo $res->res_chr_type;?></td>
                            <td><?php echo $res->res_date;?></td>
                            <td><?php echo $res->res_cli_nom;?> (<?php echo $res->res_cli_tel;?>)</td>
                            <td><?php echo $res->res_cli_nbr;?></td>
                            <td><?php echo $res->res_repas;?></td>
                            <td><?php echo $res->res_visitesite;?></td>
                            <td><?php echo $res->res_note;?></td>
                            <td><?php echo $res->res_montant;?> Ar</td>
                            <td style="font-size: 12px;width: 30px;">
                            
                            <a class="btn btn-light btn-detail"
                            data-id="<?php echo $res->id;?>"
                            data-res_chr_num="<?php echo $res->res_chr_num;?>"
                            data-res_chr_type="<?php echo $res->res_chr_type;?>"
                            data-res_date="<?php echo $res->res_date;?>"
                            data-res_cli_nom="<?php echo $res->res_cli_nom;?>"
                            data-res_cli_nbr="<?php echo $res->res_cli_nbr;?>"
                            data-res_cli_tel="<?php echo $res->res_cli_tel;?>"
                            data-res_montant="<?php echo $res->res_montant;?>"
                            data-res_nbr_jr="<?php echo $res->res_nbr_jr;?>"
                            data-res_chr_prix="<?php echo $res->res_chr_prix;?>"
                            data-res_chr_prix_total="<?php echo $res->res_chr_prix_total;?>"

							data-res_repas_prix="<?php echo $res->res_repas_prix;?>"
							data-res_repas_nbr="<?php echo $res->res_repas_nbr;?>"
							data-res_repas_prix_total="<?php echo $res->res_repas_prix_total;?>"

							data-res_lit_sup_prix = "<?php echo $res->res_lit_sup_prix;?>"
							data-res_lit_sup_nbr = "<?php echo $res->res_lit_sup_nbr;?>"
							data-res_lit_sup_prix_total = "<?php echo $res->res_lit_sup_prix_total;?>"

							data-res_visitesite_prix = "<?php echo $res->res_visitesite_prix;?>"

							data-res_ptid_prix = "<?php echo $res->res_ptid_prix;?>"
							data-res_ptid_nbr = "<?php echo $res->res_ptid_nbr;?>"
							data-res_ptid_prix_total = "<?php echo $res->res_ptid_prix_total;?>"

                             type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-eye" style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light" 
                            onclick="return confirm('Voulez-vous supprimer la Réservation du client <?php echo $res->res_cli_nom.' du '.$res->res_date; ?> ?');"
							href="<?php echo base_url('tourdeletereserv/'.$res->id.'/'.$res->chambre_id)?>" 
							 
                            type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                
                </table>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tour/modal_create_reserv')?>
<?php $this->load->view('tour/modal_create_resa')?>
<?php $this->load->view('tour/modal_detail_resa')?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){
        // get Edit Product
		$('#resrve').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('.btn-detail').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const res_chr_num = $(this).data('res_chr_num');
            const res_chr_type = $(this).data('res_chr_type');
            const res_date = $(this).data('res_date');
            const res_cli_nom = $(this).data('res_cli_nom');
            const res_cli_nbr = $(this).data('res_cli_nbr');
            const res_cli_tel = $(this).data('res_cli_tel');
            const res_paye_reste = $(this).data('res_paye_reste');
            const res_montant = $(this).data('res_montant');
            const res_nbr_jr = $(this).data('res_nbr_jr');
            const res_chr_prix = $(this).data('res_chr_prix');
            const res_chr_prix_total = $(this).data('res_chr_prix_total');

            const res_repas_prix = $(this).data('res_repas_prix');
            const res_repas_nbr = $(this).data('res_repas_nbr');
            const res_repas_prix_total = $(this).data('res_repas_prix_total');

            const res_lit_sup_prix = $(this).data('res_lit_sup_prix');
            const res_lit_sup_nbr = $(this).data('res_lit_sup_nbr');
            const res_lit_sup_prix_total = $(this).data('res_lit_sup_prix_total');

            const res_visitesite_prix = $(this).data('res_visitesite_prix');

            const res_ptid_prix = $(this).data('res_ptid_prix');
            const res_ptid_nbr = $(this).data('res_ptid_nbr');
            const res_ptid_prix_total = $(this).data('res_ptid_prix_total');
            // Set data to Form Edit
            $('.id').val(id);
            $('.res_chr_num').val(res_chr_num);
            $('.res_chr_type').val(res_chr_type);
            $('.res_date').val(res_date);
            $('.res_cli_nom').val(res_cli_nom);
            $('.res_cli_nbr').val(res_cli_nbr);
            $('.res_cli_tel').val(res_cli_tel);
            $('.res_montant').val(res_montant);
            $('.res_nbr_jr').val(res_nbr_jr);
            $('.res_chr_prix').val(res_chr_prix);
            $('.res_chr_prix_total').val(res_chr_prix_total);

            $('.res_repas_prix').val(res_repas_prix);
            $('.res_repas_nbr').val(res_repas_nbr);
            $('.res_repas_prix_total').val(res_repas_prix_total);

            $('.res_lit_sup_prix').val(res_lit_sup_prix);
            $('.res_lit_sup_nbr').val(res_lit_sup_nbr);
            $('.res_lit_sup_prix_total').val(res_lit_sup_prix_total);

            $('.res_visitesite_prix').val(res_visitesite_prix);

            $('.res_ptid_prix').val(res_ptid_prix);
            $('.res_ptid_nbr').val(res_ptid_nbr);
            $('.res_ptid_prix_total').val(res_ptid_prix_total);
			
            // Call Modal Edit
            $('#detailresa').modal('show');
        });
    });

</script>

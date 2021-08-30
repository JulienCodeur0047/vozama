<div role="dialog" id="detailresa" tabindex="-1" class="modal fade show" style="font-size: 12px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 12px;height: 44px;padding-top: 9px;">
                <h4 class="modal-title" style="font-size: 13px;">Facture</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
			<?php echo form_open('printtourfc');?>
				<form method="POST" target="_self">
				<input type="hidden" name="id" class="id"/>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-size: 11px;">Client:  
						<input type="text" style="width: 149px;border-width: 0;" readonly name="res_cli_nom" class="res_cli_nom"/>  Tél:  
						<input type="text" style="width: 97px;border-width: 0;" readonly name="res_cli_tel" class="res_cli_tel" />
						<input type="text" style="width: 158px;margin-left: 4px;border-width: 0;" readonly name="res_cli_email" class="res_cli_email" /></label></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive table-borderless" style="font-size: 11px;margin-top: 12px;">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>P.u</th>
                                        <th>Qté</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 188px;"><label style="margin-bottom: 0px;">Chambre 
										<input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_chr_type" class="res_chr_type" />N°
										<input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 39px;border-width: 0;" readonly name="res_chr_num" class="res_chr_num" /></label></td>
                                        <td style="width: 96px;">
										<input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_chr_prix" class="res_chr_prix" /></td>
                                        <td>
										<input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 15px;border-width: 0;" readonly name="res_nbr_jr" class="res_nbr_jr" /> Jours</td>
                                        <td style="width: 100px;margin-left: 15px;">
										<input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_chr_prix_total" class="res_chr_prix_total" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-bottom: 0px;">Visite de site</label></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 39px;border-width: 0;" readonly /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_visitesite_prix" class="res_visitesite_prix" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-bottom: 0px;">Repas</label></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_repas_prix" class="res_repas_prix" /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 39px;border-width: 0;" readonly name="res_repas_nbr" class="res_repas_nbr" /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_repas_prix_total" class="res_repas_prix_total" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-bottom: 0px;">Petit déjeuner</label></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_ptid_prix" class="res_ptid_prix" /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 39px;border-width: 0;" readonly name="res_ptid_nbr"  class="res_ptid_nbr"/></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_ptid_prix_total" class="res_ptid_prix_total" /></td>
                                    </tr>
                                    <tr>
                                        <td><label style="margin-bottom: 0px;">Lit supplémentaire</label></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_lit_sup_prix" class="res_lit_sup_prix" /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 39px;border-width: 0;" readonly name="res_lit_sup_nbr" class="res_lit_sup_nbr" /></td>
                                        <td><input type="text" style="padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;width: 74px;border-width: 0;" readonly name="res_lit_sup_prix_total" class="res_lit_sup_prix_total" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><label style="margin-left: 22px;font-size: 18px;text-align: right;margin-right: 25px;font-style: oblique;">TOTAL : <input type="text" style="border-width: 0px;width: 131px;" readonly name="res_montant" class="res_montant" /> Ar</label>
            <div class="modal-footer" style="height: 51px;padding: 8px;"><button class="btn btn-dark" type="submit" style="font-size: 12px;height: 28px;padding: 1px 12px;">Facture <i class="fa fa-print"></i></button></div>
		</form>
		<?php echo form_close();?>
		</div>
    </div>
</div>

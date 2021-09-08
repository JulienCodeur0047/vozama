<div role="dialog" id="newstk" tabindex="-1" class="modal fade show" style="background: rgba(255,255,255,0);height: 619px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 39px;padding: 6px;font-size: 11px;">
                <h6 class="modal-title" style="font-size: 14px;">Entrée de Stock</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="padding: 6px;height: 165px;">
			<?php echo form_open('eninstk');?>
            <form method="POST">
                    <div class="form-row">
                        <div class="col"><label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Désignation</label>
						<input type="text" class="form-control stk_designation" style="font-size: 12px;border-radius: 0px;padding: 0px 0px;height: 25px;" name="stk_designation" />
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Fournisseur</label>
						<input type="text" class="form-control stk_fournisseur" style="font-size: 12px;border-radius: 0px;padding: 0px 0px;height: 25px;" name="stk_fournisseur" />
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Quantité</label>
						<input type="number" class="form-control stk_qte" style="height: 25px;padding: 0px 0px;font-size: 12px;border-radius: 0px;" name="stk_qte" /></div>
                        <div class="col">
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Type</label>
						<select class="form-control stk_type" style="border-radius: 0;font-size: 12px;padding: 0px 0px;height: 25px;" name="stk_type">
                                <optgroup label="Select. Type">
                                    <option value selected>Select.Type</option>
                                    <option value="Fourniture">Fourniture</option>
									<option value="Fourniture de bureau">Fourniture de bureau</option>
									<option value="Fourniture scolaire">Fourniture scolaire</option>
									<option value="Consommable Info">Consommable Info</option>
									<option value="Pépinière">Pépinière</option>
									<option value="AEP">AEP</option>
									<option value="PPN">PPN</option>
									<option value="Entretien de maison">Entretien de maison</option>
									<option value="Pièces aut">Pièces auto</option>
									<option value="Pièces moto">Pièces moto</option>
									<option value="Ateliers">Ateliers</option>
									<option value="Autre">Autre</option>
                                </optgroup>
                            </select>
							<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date de stock</label><input class="form-control stk_date" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="stk_date" /><label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Unité</label><input type="text" class="form-control stk_unit" style="font-size: 12px;border-radius: 0px;padding: 0px 0px;height: 25px;" name="stk_unit" /></div>
                    </div><input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" />
                
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-primary" type="submit" style="font-size: 12px;height: 30px;margin-top: 3px;padding-top: 5px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

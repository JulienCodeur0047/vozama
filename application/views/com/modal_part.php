<div role="dialog" id="compart" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Entité - Partenaire</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('comsavepart');?>
			<form method="POST">             
				<input type="hidden" name="id" class="id"/>   
				<div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Nom de l&#39;entité</label><input type="text" class="ent_nom" style="font-size: 12px;width: 265px;" name="ent_nom" /><label style="margin-bottom: -4px;font-size: 11px;">Contrat</label><select class="ent_contrat" name="ent_contrat" style="font-size: 12px;width: 265px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec. </option>
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Partenaire</label><select class="ent_partenaire" name="ent_partenaire" style="font-size: 12px;width: 265px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec. Partenariat</option>
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Date début</label><input class="ent_date_debut" type="date" style="width: 265px;font-size: 12px;" name="ent_date_debut" /><label style="margin-bottom: -4px;font-size: 11px;">Date Fin</label><input class="ent_date_fin" type="date" style="width: 265px;font-size: 12px;" name="ent_date_fin" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

<div role="dialog" id="chmbr" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Chambre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
                <div class="row" style="height: auto;width: auto;">
				<?php echo form_open('savechmbr')?>
				<form method="POST">
				<input type="hidden" name="id" class="id"/>
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Type</label><select name="chr_type" class="chr_type" style="font-size: 12px;width: 265px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Type Chambre">
                                <option value selected>Selec.Type</option>
                                <option value="Simple">Simple</option>
                                <option value="Double">Double</option>
                                <option value="Familial">Familial</option>
                                <option value="Dortoir">Dortoir</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Numéro Chambre</label>
						<input type="number" style="font-size: 12px;width: 265px;" name="chr_numero" class="chr_numero" inputmode="numeric" />
						<label style="margin-bottom: -4px;font-size: 11px;">Prix journalier<br /></label>
						<input type="number" style="width: 265px;font-size: 12px;" min="1000" max="99999999999" step="500" name="chr_prix_nuite" class="chr_prix_nuite" inputmode="numeric"/></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
			</form>
			<?php echo form_close()?>
		</div>
    </div>
</div>

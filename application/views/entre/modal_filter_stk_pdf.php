
<div role="dialog" tabindex="-1" class="modal fade show" id="printstk" style="font-size: 12px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 7px;">
                <h6 class="modal-title" style="font-size: 14px;">Filtre</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
			<?php echo form_open('enprintstk')?>
			<form method="POST">
			<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Type</label>
						<select class="form-control" style="border-radius: 0;font-size: 12px;padding: 0px 0px;height: 25px;" name="stk_type">
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
							<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date début</label>
						<input class="form-control" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="dated" />
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date fin</label>
						<input class="form-control" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="datef" />
			</div>
            <div class="modal-footer" style="padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 12px;height: 26px;padding-top: 3px;">OK</button></div>
			</form>
			<?php echo form_close()?>
		</div>
    </div>
</div>


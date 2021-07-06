<div role="dialog" id="newdep" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Département</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('ensavedep');?>
			<form method="POST">
			<input type="hidden" class="id" name="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6 col-xl-12"><label style="font-size: 12px;margin-bottom: 0px;">Nom</label>
					<input type="text" class="dep_name" style="height: 24px;width: 259px;font-size: 12px;" name="dep_name" /><label style="font-size: 12px;margin-bottom: 0px;">Numéro</label>
					<input type="text" class="dep_number" style="height: 24px;width: 259px;font-size: 12px;" name="dep_number" /><label style="font-size: 12px;margin-bottom: 0px;">Type</label>
					<select style="width: 259px;font-size: 12px;height: 25px;" class="dep_type" name="dep_type">
                            <optgroup label="This is a group">
                                <option value selected>Sele.Type</option>
                                <option value="Administration">Administration</option>
                                <option value="Trésorier">Trésorier</option>
                                <option value="Logistique">Logistique</option>
                                <option value="Informatique">Informatique</option>
                                <option value="Technique">Technique</option>
                                <option value="Achat">Achat</option>
                                <option value="Comptable">Comptable</option>
                                <option value="Alphabétisation">Alphabétisation</option>
                                <option value="Securité">Securité</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

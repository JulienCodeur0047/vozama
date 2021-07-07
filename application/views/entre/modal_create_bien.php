<div role="dialog" id="newbien" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Bien</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('ensavebien');?>
			<form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Libellé ou Nom</label>
					<input type="text" class="bien_name" style="font-size: 12px;width: 214px;" name="bien_name" /><label style="font-size: 12px;margin-bottom: 0px;">identification/matricule/Immatriculation</label>
					<input type="text" class="bien_mat" style="font-size: 12px;width: 214px;" name="bien_mat" /><label style="font-size: 12px;margin-bottom: 0px;">Type</label>
					<select style="font-size: 12px;width: 214px;height: 24px;" class="bien_type" name="bien_type">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="Auto-moto">Auto-moto</option>
                                <option value="Materiel Informatique">Materiel Informatique</option>
                                <option value="Materiel Technique">Materiel Technique</option>
                                <option value="Materiel Mecanique">Materiel Mecanique</option>
                                <option value="Ouitil Divers">Ouitil Divers</option>
                                <option value="Fourniture">Fourniture</option>
                                <option value="Bureautique">Bureautique</option>
                                <option value="Meuble">Meuble</option>
                                <option value="Electronique">Electronique</option>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">Date d&#39;acquisition</label>
						<input type="date" style="width: 214px;font-size: 12px;" class="bien_date_arrive" name="bien_date_arrive" /></div>
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Département</label>
					<select style="font-size: 12px;width: 214px;height: 24px;" class="dep_id" name="dep_id">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
								<?php foreach ($dep as $dep) { ?>
									<option value="<?php echo $dep->id;?>"><?php echo $dep->dep_name;?></option>
								<?php }?>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;margin-top: 7px;">Responsable</label>
						<input type="text" class="bien_resp" style="font-size: 12px;width: 214px;" name="bien_resp" /><label style="font-size: 12px;margin-bottom: 0px;">Date de disfonctionnement</label>
						<input type="date" class="bien_date_disf" style="width: 214px;font-size: 12px;" name="bien_date_disf" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

<div role="dialog" tabindex="-1" id="newpep" class="modal fade show" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 46px;font-size: 13px;">
                <h4 class="modal-title" style="font-size: 15px;">Nouveau</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
			<?php echo form_open('savepep');?>
			<form action="POST">
            <div class="modal-body" style="height: auto;">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="width: 303px;height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Type</label><select name="pep_type" style="font-size: 12px;width: 216px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Type">
                                <option value selected>Selec.Type</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Elevage">Elevage</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Libellé </label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_libelle" /><label style="margin-bottom: -4px;font-size: 11px;">Quantité </label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_qte" /><label style="margin-bottom: -4px;font-size: 11px;">Taille</label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_taille" /><label style="margin-bottom: -4px;font-size: 11px;">Surface</label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_surface" /><label style="margin-bottom: -4px;font-size: 11px;">Prix</label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_prix" /><label style="margin-bottom: -4px;font-size: 11px;">Date</label><input type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="pep_date" /></div>
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Poste</label><select name="poste_id" style="font-size: 12px;width: 217px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec.Poste</option>
								<?php foreach($poste as $poste){ ?>
                                <option value="<?php echo $poste->id;?>"><?php echo $poste->poste_name;?></option>
								<?php } ?>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Site</label><select name="site_id" style="font-size: 12px;width: 217px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec.Site</option>
                                <?php foreach($site as $site){ ?>
                                <option value="<?php echo $site->id;?>"><?php echo $site->site_name;?></option>
								<?php } ?>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Durée du projet</label><input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_durre_porjet" /><label style="margin-bottom: -4px;font-size: 11px;">Description</label><input type="text" style="width: 216px;font-size: 13px;height: 101px;" name="pep_description" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 53px;padding: 5px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 14px;">Close</button><button class="btn btn-primary" type="submit" style="font-size: 14px;">Save</button></div>
			</form>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>

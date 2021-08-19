<div role="dialog" id="newconge" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Congé personnel</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('ensavecong');?>
			<form method="POST">
			<input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6 col-xl-10"><label style="font-size: 12px;margin-bottom: 0px;">Agent / Personnel</label>
					<select style="font-size: 12px;width: 258px;height: 24px;" class="pers_id" name="pers_id">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <?php foreach ($pers as $pers) { ?>
                                    <option value="<?php echo $pers->id; ?>"><?php echo $pers->pers_name;?> <?php echo $pers->pers_firstname;?></option>
                                <?php  }?>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">Date début</label>
						<input type="date" class="conge_date_start" style="width: 258px;font-size: 12px;" name="conge_date_start" /><label style="font-size: 12px;margin-bottom: 0px;">Date fin</label>
						<input type="date" class="conge_date_end" style="width: 258px;font-size: 12px;" name="conge_date_end" /><label style="font-size: 12px;margin-bottom: 0px;">Date reprise de travail</label>
						<input type="date" class="conge_date_reprise" style="width: 258px;font-size: 12px;" name="conge_date_reprise" />
						<label style="font-size: 12px;margin-bottom: 0px;"><br /></label>
						<label style="font-size: 12px;margin-bottom: 0px;">Nombre de jour</label>
						<input type="number" step="0.5" class="conge_nbr_day" style="font-size: 12px;width: 258px;" name="conge_nbr_day" />
						<label style="font-size: 12px;margin-bottom: 0px;">Prix-droit d'un congé</label>
						<input type="number" class="conge_droit" step="any" style="font-size: 12px;width: 258px;" name="conge_droit" />
						<label style="font-size: 12px;margin-bottom: 0px;">Raison du congé</label>
						<input type="text" class="conge_motif" style="font-size: 12px;width: 258px;" name="conge_motif" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
		</form>
		<?php echo form_close();?>
		</div>
    </div>
</div>

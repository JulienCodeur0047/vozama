<div role="dialog" id="filtereldn" tabindex="-1" class="modal fade show" style="font-size: 12px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 12px;height: 44px;padding-top: 9px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				<form method="POST" target="_self">
				<label style="margin-bottom: 1px;margin-top: 3px;">Poste</label>
				<select style="width: 261px;height: 27px;" name="poste_id">
                    <optgroup label="Poste">
                        <option value selected>Select.Poste</option>
						<?php foreach ($poste as $poste) {?>
						<option value="<?php echo $poste->id;?>"><?php echo $poste->poste_name;?></option>
						<?php }?>
                    </optgroup>
                </select><label style="margin-bottom: 1px;margin-top: 5px;">Classe</label>
				<select style="width: 261px;height: 27px;" name="note_eleve_classe">
                    <optgroup label="Classe">
                        <option value selected>Select.classe</option>
                        <option value="T0">T0</option>
                        <option value="T1">T1</option>
                    </optgroup>
                </select>
				<label style="margin-bottom: 1px;margin-top: 5px;">Trimestre</label>
				<select style="width: 261px;height: 27px;" name="note_trimestre">
                    <optgroup label="This is a group">
                        <option value selected>Select. Trimestre</option>
                        <option value="1">Trimestre 1</option>
                        <option value="2">Trimestre 2</option>
                        <option value="3">Trimestre 3</option>
                    </optgroup>
                </select></div>
            <div class="modal-footer" style="height: 51px;padding: 8px;"><button class="btn btn-primary" type="submit" style="font-size: 12px;height: 28px;padding: 1px 12px;">ok</button></div>
		</form>
		</div>
    </div>
</div>

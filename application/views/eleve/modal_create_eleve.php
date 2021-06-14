<div role="dialog" tabindex="-1"  id="newstd1" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 47px;padding: 10px;">
                <h6 class="modal-title">Ajout élève </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
            <?php echo form_open('saveEleveNew'); ?>
			<form style="height: auto;" method="POST">
                    <div class="form-row">
                        <div class="col-xl-5"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Poste </label><select class="form-control" style="width: 312px;height: 30px;font-size: 12px;color: var(--gray);" name="poste_id">
                                <optgroup label="Poste">
                                    <option value="" selected>Selec.Poste</option>
									<?php foreach($poste as $poste){?>
                                    <option value="<?php echo $poste->id;?>"><?php echo $poste->poste_name;?></option>
									<?php }?>
                                </optgroup>
                            </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Matricule</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 312px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Matricule" name="eleve_matricule" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nom</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 312px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Nom" name="eleve_name" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Prénoms</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 312px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Prenoms" name="eleve_firstname" />
                            <div class="form-row">
                                <div class="col-xl-4"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Sexe</label><select class="form-control" style="width: 97px;height: 30px;font-size: 12px;color: var(--gray);" name="eleve_sexe">
                                        <optgroup label="Sexe">
                                            <option value="M" selected>M</option>
                                            <option value="F">F</option>
                                        </optgroup>
                                    </select></div>
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">date de naissance</label><input class="form-control" type="date" style="width: 199px;font-size: 12px;" name="eleve_date_birth" /></div>
                            </div><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Lieu de naissance</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 312px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Lieu de naissance" name="eleve_lieu_naissance" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Adresse</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 312px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Adresse" name="eleve_adresse" />
                        </div>
                        <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Parents</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 442px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Mere" name="eleve_mom" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 442px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Pere" name="eleve_dad" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 442px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Profession des parents" name="eleve_prof_parents" />
                            <div class="form-row">
                                <div class="col-xl-6"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Situation</label><select class="form-control" style="width: 210px;height: 30px;font-size: 12px;color: var(--gray);" name="eleve_situation">
                                        <optgroup label="Situation">
                                            <option value="Nouveau">Nouveau</option>
                                            <option value="Passant" selected>Passant</option>
                                            <option value="Redoublant">Redoublant</option>
                                            <option value="Triplant">Triplant</option>
                                            <option value="Qr">Qr</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;width: 114px;">Date d&#39;entrée</label><input class="form-control" type="date" style="width: 210px;font-size: 12px;" name="eleve_date_entre" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;width: 114px;">Date de sortie</label><input class="form-control" type="date" style="width: 210px;font-size: 12px;" name="eleve_date_abandon" /></div>
                                <div class="col" style="width: 100px;"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Classe</label><select class="form-control" style="width: 210px;height: 30px;font-size: 12px;color: var(--gray);" name="eleve_classe">
                                        <optgroup label="Classe">
                                            <option value="T0" selected>T0</option>
                                            <option value>T1</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Classe l&#39;an passé</label><select class="form-control" style="width: 210px;height: 30px;font-size: 12px;color: var(--gray);" name="eleve_classe_passe">
                                        <optgroup label="Classe">
                                            <option value="T0" selected>T0</option>
                                            <option value="T1">T1</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nombre F/S </label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 210px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="eleve_nbr_fs" /></div>
                            </div><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Religion</label><select class="form-control" style="width: 442px;height: 32px;font-size: 12px;color: var(--gray);" name="eleve_religion">
                                <optgroup label="Poste">
                                    <option value="Catholique" selected>Catholique</option>
                                    <option value="Adventiste">Adventiste</option>
                                    <option value="Protestant">Protestant</option>
                                    <option value="Musulman">Musulman</option>
                                    <option value="Autre">Autre</option>
                                </optgroup>
                            </select>
                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" style="font-size: 9px;width: 10px;margin-top: 7.8px;margin-left: -15px;" name="eleve_copie" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;height: 15px;color: var(--gray);">copie d&#39;état civil</label></div>
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Numéro copie</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 100px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="eleve_num_copie" /></div>
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Abr</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 100px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="eleve_abr" /></div>
                            </div>
                        </div>
                    </div><input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" />
			
			
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
			</form>
			<?php echo form_close(); ?>
		</div>
		
    </div>
</div>

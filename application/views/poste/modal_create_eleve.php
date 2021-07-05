<div role="dialog" tabindex="-1" id="newstd" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Ajout élève / Poste / </h6>
                <h6 class="modal-title"><?php echo $poste->poste_num;?> / </h6>
                <h6 class="modal-title"><?php echo $poste->poste_name;?>  </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
			<?php echo form_open('saveEleve'.$poste->id) ?>
                <form method="post"><input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" name="eleve_poste" readonly value="<?php echo $poste->poste_name;?>"/>
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Matricule (obligatoir)" name="eleve_matricule" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Nom (obligatoir)" name="eleve_name" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Prenoms" name="eleve_firstname" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Sexe - M/F" name="eleve_sexe" />
				<input type="date" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Date de naissance dd/mm/yyyy (obligatoir)" name="eleve_date_birth"/>
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Lieu de naissance" name="eleve_lieu_naissance" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Adresse" name="eleve_adresse" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Situation M." name="eleve_situation" />
				<input type="date" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Date Entre (obligatoir)" name="eleve_date_entre" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Classe" name="eleve_classe" />
				<input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" name="poste_id" value="<?php echo $poste->id;?>"/>
            </div>
            <div class="modal-footer" style="height: 61px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
			</form>
			<?php echo form_close()?>
		</div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

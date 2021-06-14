<div role="dialog" tabindex="-1" class="modal fade show" style="background: var(--white);" id="myModal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Détail élève</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" name="eleve_poste" readonly value="<?php echo $eleveInfo->eleve_poste;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" name="eleve_poste" readonly value="<?php echo $eleveInfo->eleve_matricule;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Nom" name="eleve_name" readonly value="<?php echo $eleveInfo->eleve_name;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Prenoms" name="eleve_firstname" readonly value="<?php echo $eleveInfo->eleve_firstname;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Sexe - M/F" name="eleve_sexe" readonly value="<?php echo $eleveInfo->eleve_sexe;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Date de naissance dd/mm/yyyy" name="eleve_date_birth" readonly value="<?php echo $eleveInfo->eleve_date_birth;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Lieu de naissance" name="eleve_lieu_naissance" readonly value="<?php echo $eleveInfo->eleve_lieu_naissance;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Adresse" name="eleve_adresse" readonly value="<?php echo $eleveInfo->eleve_adresse;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Situation M." name="eleve_situation" readonly value="<?php echo $eleveInfo->eleve_situation;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Date Entre" name="eleve_date_entre" readonly value="<?php echo $eleveInfo->eleve_date_entre;?>" />
				<input type="text" class="form-control" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Classe" name="eleve_classe" readonly value="<?php echo $eleveInfo->eleve_classe;?>" />
				<input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" /></form>
            </div>
            <div class="modal-footer" style="height: 61px;"><button class="btn btn-primary" type="button" style="font-size: 12px;">OK</button></div>
        </div>
    </div>
</div>


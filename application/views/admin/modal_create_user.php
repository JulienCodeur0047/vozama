<div role="dialog" id="newuser" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Nouveau Utilisateur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('saveuser');?>
			<form method="POST">
			<input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Type utilisateur</label><select style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;" class="user_type_code" name="user_type_code">
                            <optgroup label="Type Utilisateur">
                                <option value selected>Type</option>
                                <option value="1">Administrateur</option>
                                <option value="2">Alphabétisation</option>
                                <option value="9">Entreprise</option>
                                <option value="3">Environnement</option>
                                <option value="4">Développement </option>
                                <option value="5">Suivi et évaluation</option>
                                <option value="6">Communication</option>
                                <option value="7">Tourisme solidaire</option>
                                <option value="8">Sécurité </option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Login</label><input type="text" style="width: 250px;height: 25px;font-size: 12px;" name="user_name" class="user_name" placeholder="Nom d&#39;utilisateur" />
						<label style="margin-bottom: -4px;font-size: 11px;">Mot de passe</label>
						<input type="text" style="font-size: 12px;width: 250px;" name="user_password" class="user_password" placeholder="nouveau mot de passe " />
						<!--<input type="password" style="font-size: 12px;width: 250px;" name="user_passwordv" placeholder="verification mot de passe" />--> </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

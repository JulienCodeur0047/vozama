<div role="dialog" id="filteruser" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre Utilisateur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<form method="POST" target="_self" >
			<input type="search" style="font-size: 12px;border-width: 0px;border-bottom-width: 1px;border-radius: 2;width: 250px;" placeholder="Recherche" name="search" />
			<div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Type utilisateur ou privilège </label><select name="user_type" style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Type utilisateur">
                                <option value selected>Selec. Type</option>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Alphabétisation">Alphabétisation</option>
                                <option value="Entreprise">Entreprise</option>
                                <option value="Environnement ">Environnement </option>
                                <option value="Développement">Développement</option>
                                <option value="Suivi et évaluation">Suivi et évaluation</option>
                                <option value="Communication">Communication</option>
                                <option value="Tourisme solidaire">Tourisme solidaire</option>
                                <option value="Sécurité">Sécurité</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;">
			<button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button>
			</div>
			</form>
		</div>
    </div>
</div>

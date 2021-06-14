<div role="dialog" tabindex="-1" id="newcmv" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 47px;padding: 10px;">
                <h6 class="modal-title">Ajout Comité villageois</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
                <form style="height: auto;">
                    <div class="form-row">
                        <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Information</label>
                            <div class="form-row">
                                <div class="col"><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Mr Nom" name="parent_pere_name" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Mm Nom" name="parent_mere_name" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Adresse" name="parent_address" /></div>
                                <div class="col"><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Mr Prenoms" name="parent_pere_firstname" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Mm Prenoms" name="parent_mere_firstname" /><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Telephone" name="parent_tel" /></div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Titre</label><select class="form-control" style="width: 210px;height: 30px;font-size: 12px;color: var(--gray);" name="parent_titre">
                                        <optgroup label="Titre">
                                            <option value="President">President</option>
                                            <option value="Vice President">Vice President</option>
                                            <option value="Trésorier">Trésorier</option>
                                            <option value="Secrétaire">Secrétaire</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nombre des parent gere</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 210px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="parent_nbr_prt_gere" /></div>
                                <div class="col" style="width: 100px;"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Site</label><select class="form-control" style="width: 210px;height: 30px;font-size: 12px;color: var(--gray);" name="site_id">
                                        <optgroup label="Site">
                                            <option value selected>Selec.Site</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nombre des fils</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 210px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="parent_nbr_fils" /></div>
                            </div><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Cordonnée GPS</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 482px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Latitude , Longitute" name="parent_coordonnee" />
                        </div>
                    </div><input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" />
                </form>
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
        </div>
    </div>
</div>

<div role="dialog" id="filterpart" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <form method="POST" target="_self">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Partenaire</label><select style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;" name="poste_partenariat">
                            <optgroup label="Poste">
                                <option value selected>Oui ou Non</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Type</label><select name="poste_partenair_type" style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Publique ou Privé</option>
                                <option value="Publique">Publique</option>
                                <option value="Privé">Privé</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Sous contrat</label><select style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;" name="poste_part_contrat">
                            <optgroup label="Poste">
                                <option value selected>Oui ou Non</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
        </div>
    </div>
</div>
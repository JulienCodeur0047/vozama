<div role="dialog" id="compart" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Partenariat</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('comsavepart');?>
            <form method="POST">
            <label class="form-check-label" for="formCheck-1" style="font-size: 14px;">Poste:</label> <input readonly type="text" class="poste_name" id="poste_name" name="poste_name" style="width: 300px; border: 0px; font-size: 14px;" />
            <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;margin-top: 2px;">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" style="font-size: 13px;height: 12px;margin-top: 7.8px;" name="annule_part" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 13px;">Annulation de partenariat</label>
                    </div>
                    </div>
            </div>
                <div class="row">
                    <input type="hidden" class="id" name="id"/>
                    
                    <div class="col"><input type="radio" name="poste_partenair_type" value="Publique" /><label style="font-size: 12px;margin-left: 8px;">Publique</label><select name="libellepublic" style="font-size: 12px;width: 206px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Slec. Public</option>
                                <option value="Region">Region</option>
                                <option value="District">District</option>
                                <option value="Commune">Commune</option>
                                <option value="Fokotany">Fokotany</option>
                                <option value="Quartier">Quartier</option>
                            </optgroup>
                        </select></div>
                    <div class="col"><input type="radio" name="poste_partenair_type" value="Privé" /><label style="font-size: 12px;margin-left: 8px;">Privé<br /></label><input type="text" style="width: 206px;height: 26px;font-size: 13px;color: var(--dark);" placeholder="si privé" name="libelleprive" /></div>
                </div>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;margin-top: 11px;">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" style="font-size: 13px;height: 12px;margin-top: 7.8px;" name="poste_part_contrat" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 13px;">Sous contrat</label></div><input type="text" style="width: 206px;height: 26px;font-size: 13px;" placeholder="durré du contrat" name="poste_part_dur_contrat" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
            </form>
        <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newtrst" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Renseignement Touriste</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('tourtrstsave')?>
            <form method="POST">
            <input type="hidden" id="id" class="id" name="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Nom</label>
                    <input type="text" class="tour_name" style="font-size: 12px;width: 214px;" name="tour_name" /><label style="font-size: 12px;margin-bottom: 0px;">Prénoms</label>
                    <input type="text" class="tour_firstname" style="font-size: 12px;width: 214px;" name="tour_firstname" /><label style="font-size: 12px;margin-bottom: 0px;">Date de naissance</label>
                    <input type="date" class="tour_date_birth" style="width: 214px;font-size: 12px;" name="tour_date_birth" /><label style="font-size: 12px;margin-bottom: 0px;">Lieu de naissance </label>
                    <input type="text" class="tour_lieu_nais" style="font-size: 12px;width: 214px;" name="tour_lieu_nais" /><label style="font-size: 12px;margin-bottom: 0px;">Adresse</label>
                    <input type="text" class="tour_address" style="font-size: 12px;width: 214px;" name="tour_address" /></div>
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Nationalité</label>
                    <select style="font-size: 12px;width: 214px;" class="tour_nationalite" name="tour_nationalite">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="Malagasy">Malagasy</option>
                                <option value="Anglais">Anglais</option>
                                <option value="Francais">Francais</option>
                                <option value="Americain">Americain</option>
                                <option value="Chinois">Chinois</option>
                                <option value="Autre">Autre</option>
                            </optgroup>
                        </select>
                        <div class="form-check" style="margin-top: 14px;font-size: 13px;">
                        <input type="checkbox" class="form-check-input tour_newsletter" id="formCheck-1" name="tour_newsletter" value="oui" /><label class="form-check-label" for="formCheck-1">Newsletter</label></div>
                        <div class="form-check" style="margin-top: 14px;font-size: 13px;">
                        <input type="checkbox" class="form-check-input tour_gazette" id="formCheck-1" name="tour_gazette" value="oui" /><label class="form-check-label" for="formCheck-1">Gazette</label></div><label style="font-size: 12px;margin-bottom: 0px;margin-top: 17px;">Téléphone</label>
                        <input type="text" class="tour_tel" style="font-size: 12px;width: 214px;" name="tour_tel" /><label style="font-size: 12px;margin-bottom: 0px;">E-mail</label>
                        <input type="text" class="tour_email" style="font-size: 12px;width: 214px;" name="tour_email" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
        </form>
        <?php echo form_close();?>
        </div>
    </div>
</div>
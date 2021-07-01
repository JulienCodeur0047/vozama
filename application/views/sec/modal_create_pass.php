<div role="dialog" id="pass" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Passation d&#39;objet</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('secsavepass')?>
            <form method="POST">
            <input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Nom &amp; prénoms dépoteur</label>
                    <input type="text" class="pass_name_firstname" style="height: 24px;width: 214px;font-size: 12px;" name="pass_name_firstname" /><label style="font-size: 12px;margin-bottom: 0px;">Objet</label>
                    <input type="text" class="pass_obejt" style="height: 24px;width: 214px;font-size: 12px;" name="pass_obejt" /></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Heure de dépôt</label><input type="time" class="pass_hr_dep" style="font-size: 12px;" name="pass_hr_dep" /></div>
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Heure de remise</label><input type="time" class="pass_hr_rem" style="font-size: 12px;" name="pass_hr_rem" /></div>
                        </div><label style="font-size: 12px;margin-bottom: 0px;margin-top: 17px;">Date de dépôt</label><input type="date" class="pass_date_dep" style="font-size: 12px;width: 214px;" name="pass_date_dep" /><label style="font-size: 12px;margin-bottom: 0px;margin-top: 17px;">Date de remise</label><input type="date" class="pass_date_rem" style="font-size: 12px;width: 214px;" name="pass_date_rem" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
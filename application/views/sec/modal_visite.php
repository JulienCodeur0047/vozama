<div role="dialog" id="visite" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Visisteur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('secsavevis');?>
            <form method="POST">
            <input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Nom</label>
                    <input type="text" class="vis_name" style="height: 24px;width: 214px;font-size: 12px;" name="vis_name" /><label style="font-size: 12px;margin-bottom: 0px;">Prénoms</label>
                    <input type="text" class="vis_firstname" style="height: 24px;width: 214px;font-size: 12px;" name="vis_firstname" /><label style="font-size: 12px;margin-bottom: 0px;">CIN</label>
                    <input type="text" class="vis_cin" style="height: 24px;width: 214px;font-size: 12px;" name="vis_cin" /><label style="font-size: 12px;margin-bottom: 0px;">Objectif du viste</label>
                    <input type="text" class="vis_objectif" style="height: 24px;width: 214px;font-size: 12px;" name="vis_objectif" /></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Heure de visite</label>
                            <input type="time" class="vis_hr_in" style="font-size: 12px;" name="vis_hr_in" /></div>
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Heure de sortie</label>
                            <input type="time" class="vis_hr_o" style="font-size: 12px;" name="vis_hr_o" /></div>
                        </div><label style="font-size: 12px;margin-bottom: 0px;margin-top: 17px;">Date de visite</label>
                        <input type="date" class="vis_date" style="font-size: 12px;width: 214px;" name="vis_date" /><label style="font-size: 12px;margin-bottom: 0px;margin-top: 17px;">Numéro badge</label>
                        <input type="number" class="vis_num_badge" style="font-size: 12px;width: 138px;" name="vis_num_badge" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
            </form>
        <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="sorti" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Heure de sortir de visiteur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('secsavevis');?>
            <form method="POST">
            <input type="hidden" class="id" name="id" />
            <input type="hidden" class="vis_name"  name="vis_name" />
                <div class="row" style="height: auto;width: auto;">
                    <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Nom &amp; prénoms</label><input type="text" class="vis_name_firstname" style="height: 24px;width: 266px;font-size: 12px;" name="vis_name_firstname" /><label style="font-size: 12px;margin-bottom: 0px;margin-right: 9px;">Heure de sortie</label>
                    <input type="time" class="vis_hr_o" style="font-size: 12px;width: 174.5938px;" name="vis_hr_o" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
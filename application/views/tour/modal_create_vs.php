<div role="dialog" id="newvs" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Visite de site vozama</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savetourvs') ?>
            <form method="POST" >
            <input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Nbr de jour</label><input type="number" class="vs_nbr_jr" style="font-size: 12px;width: 79px;" name="vs_nbr_jr" /></div>
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Demi-journée</label><input type="number" class="vs_dem_jr" style="font-size: 12px;width: 79px;" name="vs_dem_jr" /></div>
                        </div><label style="font-size: 12px;margin-bottom: 0px;">Prix journée</label><input type="number" class="vs_prix_jour" style="font-size: 12px;width: 214px;" name="vs_prix_jour" /><label style="font-size: 12px;margin-bottom: 0px;">Prix demi-journée</label><input type="number" class="vs_prix_demi_jr" style="font-size: 12px;width: 214px;" name="vs_prix_demi_jr" /><label style="font-size: 12px;margin-bottom: 0px;">Date de visite</label><input class="vs_date" type="date" style="width: 214px;font-size: 12px;" name="vs_date" />
                    </div>
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Prix avec voiture</label><input type="number" class="vs_prix_a_voiture" style="font-size: 12px;width: 214px;" name="vs_prix_a_voiture" /><label style="font-size: 12px;margin-bottom: 0px;">Prix sans voiture</label><input type="number" class="vs_prix_s_voiture" style="font-size: 12px;width: 214px;" name="vs_prix_s_voiture" /><label style="font-size: 12px;margin-bottom: 0px;">Site</label>
                    <select class="site_id" style="font-size: 12px;width: 214px;height: 24px;" name="site_id">
                            <optgroup label="This is a group">
                                <option value selected>Select.Site</option>
                                <?php foreach($site as $site){ ?>
                                <option value="<?php echo $site->id; ?>"><?php echo $site->site_name; ?> <input type="hidden" name="vs_site" value="<?php echo $site->site_name; ?>"</option>
                                
                                <?php } ?>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
        </form>
        <?php echo form_close(); ?>
        </div>
    </div>
</div>
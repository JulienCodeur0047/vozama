<div role="dialog" id="newparent" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Renseignement de parent</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('paresave')?>
            <form method="POST">
            <input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Parent</label>
                    <input type="text" class="parent_mere_name" style="font-size: 12px;width: 214px;" name="parent_mere_name" placeholder="Nom &amp; Prenoms (Mme)" />
                    <input type="text" class="parent_pere_name" style="font-size: 12px;width: 214px;" name="parent_pere_name" placeholder="Nom &amp; Prenoms (Mr)" />
                    <input type="text" class="parent_pere_fonction" style="font-size: 12px;width: 214px;" name="parent_pere_fonction" placeholder="Fonction" /><label style="font-size: 12px;margin-bottom: 0px;">Adresse</label>
                    <input type="text" class="parent_address" style="font-size: 12px;width: 214px;" name="parent_address" /><label style="font-size: 12px;margin-bottom: 0px;">Poste</label>
                    <select class="poste_id" style="font-size: 12px;width: 214px;height: 24px;" name="poste_id">
                            <optgroup label="Poste">
                                <option value selected>Select.</option>
                                <?php foreach ($poste as $poste) {?>
                                    <option value="<?php echo $poste->id;?>"><?php echo $poste->poste_name;?></option>
                                <?php }?>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">Site</label>
                        <select class="site_id" style="font-size: 12px;width: 214px;height: 24px;" name="site_id">
                            <optgroup label="Site">
                                <option value selected>Select.</option>
                                <?php foreach ($site as $site) {?>
                                    <option value="<?php echo $site->id;?>"><?php echo $site->site_name;?></option>
                                <?php }?>
                            </optgroup>
                        </select></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Enfant</label>
                            <input type="number" class="parent_nbr_enfant" style="font-size: 12px;width: 86px;" name="parent_nbr_enfant" inputmode="numeric" /></div>
                            <div class="col"><label style="font-size: 12px;margin-bottom: 0px;">Enfant Vozama</label>
                            <input type="number" class="parent_nbr_sco_voz" style="font-size: 12px;width: 86px;" name="parent_nbr_sco_voz" inputmode="numeric" /></div>
                        </div><label style="font-size: 12px;margin-bottom: 0px;">Date d&#39;entrée </label>
                        <input type="date" class="parent_anne_entre_voz" style="width: 214px;font-size: 12px;" name="parent_anne_entre_voz" /><label style="font-size: 12px;margin-bottom: 0px;">Date de sortie</label>
                        <input type="date" class="parent_anne_sorti_voz" style="width: 214px;font-size: 12px;" name="parent_anne_sorti_voz" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
            </form>
        <?php echo form_close();?>
        </div>
    </div>
</div>

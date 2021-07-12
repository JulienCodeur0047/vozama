<div role="dialog" id="neweglise" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('saveeglise')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Eglise</label><input type="text" style="width: 265px;font-size: 12px;" name="eglise_name" placeholder="Nom de l&#39;eglise" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newsecteur" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savesecteur')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Secteur</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="secteur_name" placeholder="Nom de secteur" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newzone" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savezone')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Zone</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="zone_name" placeholder="Nom de Zone" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newregion" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('saveregion')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Region</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="region_name" placeholder="Nom de Region" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newcisco" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savecisco')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">CISCO</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="cisco_name" placeholder="Cisco" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newcommune" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savecomune')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Commune</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="commune_name" placeholder="Commune" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newniveau" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('saveniveau')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Niveau</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="niveau_name" placeholder="Niveau" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newfokotany" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savefkt')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Fokotany</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="fkt_name" placeholder="Nom de Fokotany" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newdistrict" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savedistrict')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">District</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="district_name" placeholder="Nom de District" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newpere" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savepere')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Pere</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="eglise_name" placeholder="Nom et Prenom" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newpref" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savepref')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">prefecture</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="sous_pref_name" placeholder="Sous prefecture" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newmoniteur" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savemoniteur')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Moniteur</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="moniteur_name" placeholder="Nom de Moniteur" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<div role="dialog" id="newinspe" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 33px;font-size: 13px;padding: 7px;padding-top: 3px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('saveinspe')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;">
                    <label style="margin-bottom: -4px;font-size: 11px;">Inspecteur</label>
                    <input type="text" style="width: 265px;font-size: 12px;" name="insp_name" placeholder="Nom de l'inspecteur'" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
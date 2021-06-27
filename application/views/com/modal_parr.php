<div role="dialog" id="parrainage" tabindex="-1" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 47px;padding: 10px;">
                <h6 class="modal-title">Parrainage</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
            <?php echo form_open('comsaveparr');?>
                <form style="height: auto;" method="POST">
                <input type="hidden" id="id" class="id" name="id"/>
                Poste: <input type="text" class="poste_name" style="border: 0px; font-size: 12px;color: var(--gray);height: 10px;margin-bottom: 0px;"/>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                <input type="radio" class="poste_parraine" id="poste_parraineo" name="poste_parraine" value="oui" style="width: 13px; height: 13px;">
                                <label style="font-size: 12px;color: var(--gray);height: 10px;margin-bottom: 0px;" for="parraine">Parrainé</label><br>
                                <input type="radio" class="poste_parraine" id="poste_parrainee" name="poste_parraine" value="en attente" style="width: 13px; height: 13px;">
                                <label style="font-size: 12px;color: var(--gray);height: 10px;margin-bottom: 0px;" for="enattente">&nbsp;&nbsp;&nbsp;En Attente</label><br>

                                    <label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Parrain</label>
                                    <input type="text" class="form-control poste_parrain" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 280px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Nom &amp; Prenoms du Parrain" name="poste_parrain" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">date de parrainage</label><input class="form-control paste_date_parr" type="date" style="width: 280px;font-size: 12px;" name="paste_date_parr" />
                                </div>
                            </div>
                        </div>
                    </div><input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" />
                
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
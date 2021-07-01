<div role="dialog" id="filterprintTrst" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('printtourtrst');?>
            <form method="POST" target="_self">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Nationalité</label><select style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;" name="tour_nationalite">
                            <optgroup label="Nationalite">
                                <option value selected>Selec.</option>
                                <option value="Malagasy">Malagasy</option>
                                <option value="Anglais">Anglais</option>
                                <option value="Francais">Francais</option>
                                <option value="Americain">Americain</option>
                                <option value="Chinois">Chinois</option>
                                <option value="Autre">Autre</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
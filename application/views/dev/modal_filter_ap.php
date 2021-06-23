<div role="dialog" id="apfilter" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <form method="POST" target="_self" >
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Poste</label><select name="postefilter" style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                            <option value selected>Selec.Poste</option>
                            <?php foreach ($poste as $poste) { ?>
                                
                                <option value="<?php echo $poste->poste_name; ?>"><?php echo $poste->poste_name; ?></option>
                            <?php }?>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Année </label><select name="anneefilter" style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec.Annee</option>
                                <option value="2019">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>    
        </form>
        </div>
    </div>
</div>
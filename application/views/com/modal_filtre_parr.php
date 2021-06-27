<div role="dialog" id="filtreparr" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
        <form method="POST" target="_self" >
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Parrainage</label><select name="poste_parraine" style="font-size: 12px;width: 250px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Poste">
                                <option value selected>Selec.Titre</option>
                                <option value="oui">parrainé</option>
                                <option value="non">non parrainé</option>
                                <option value="en attente">en attente</option>
                            </optgroup>
                        </select></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">ok</button></div>
        </form>
        </div>
    </div>
</div>
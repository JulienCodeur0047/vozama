<div role="dialog" tabindex="-1" id="newagr" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 47px;padding: 10px;">
                <h6 class="modal-title">AGR</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
                <form style="height: auto;">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Filière</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Filiere" name="agr_filiere" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">date de donation</label><input class="form-control" type="date" style="width: 238px;font-size: 12px;" name="agr_date_don" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">date de suivie par bimestre</label><input class="form-control" type="date" style="width: 238px;font-size: 12px;" name="agr_date_suivi" /></div>
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Quantité</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="agr_qte_don" inputmode="numeric" /><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Unité</label><select class="form-control" style="width: 238px;height: 30px;font-size: 12px;color: var(--gray);" name="agr_qte_don_unit">
                                        <optgroup label="Unite">
                                            <option value selected>Selec.Unite</option>
                                            <option value="NBR">Nbr</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Sac 50Kg">Sac 50Kg</option>
                                            <option value="Sac 25Kg">Sac 25Kg</option>
                                            <option value="g">g</option>
                                            <option value="mg">mg</option>
                                            <option value="m">m</option>
                                            <option value="cm">cm</option>
                                            <option value="Kapoaka">Kapoaka</option>
                                            <option value="Sobika">Sobika</option>
                                            <option value="Garaba">Garaba</option>
                                        </optgroup>
                                    </select><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Formation</label><input type="text" class="form-control" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Formation" name="agr_formation" /></div>
                            </div>
                        </div>
                    </div><input type="text" class="form-control invisible" style="font-size: 12px;margin-left: 83px;margin-right: 54px;width: 300px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Poste" />
                </form>
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
        </div>
    </div>
</div>

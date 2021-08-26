<div role="dialog" tabindex="-1" class="modal fade show" style="font-size: 12px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 12px;height: 44px;padding-top: 9px;">
                <h4 class="modal-title" style="font-size: 13px;">Réservation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Information du client</label></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col"><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;" placeholder="Nom et Prenoms du client" /><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" /></div>
                                    <div class="col"><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;" placeholder="Telephone" /><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" placeholder="E-mail" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check" style="margin-top: 6px;"><input type="checkbox" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">Visite de site vozama</label></div>
                        <div class="row">
                            <div class="col-xl-5" style="width: 99px;"><input type="text" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant de visite" /></div>
                        </div><textarea style="width: 363px;margin-top: 6px;height: 56px;" placeholder="Notes ou Remarques"></textarea>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Information supplémentaire du réservation </label></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-xl-5"><input type="text" style="width: 140px;padding-right: 1px;padding-left: 1px;" placeholder="Nuité" inputmode="numeric" /><input type="text" style="width: 140px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Horaire" /></div>
                                    <div class="col"><select style="width: 201px;">
                                            <optgroup label="Repas">
                                                <option value selected>Repas oui / non</option>
                                                <option value="OUI">Oui</option>
                                                <option value="NON">Non</option>
                                            </optgroup>
                                        </select><select style="width: 201px;margin-top: 6px;">
                                            <optgroup label="Repas">
                                                <option value selected>Choix de plat si OUI</option>
                                                <option value="Couple">Couple</option>
                                                <option value="Resistant">Resistant</option>
                                                <option value="Autre">Autre</option>
                                            </optgroup>
                                        </select>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="text" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant repas" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="text" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" /></div>
                                        </div><select style="width: 201px;margin-top: 6px;">
                                            <optgroup label="Repas">
                                                <option value selected>Petit dejeuner oui / non</option>
                                                <option value="OUI">Oui</option>
                                                <option value="NON">Non</option>
                                            </optgroup>
                                        </select>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="text" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant petit dejeuner" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="text" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" /></div>
                                        </div>
                                        <div class="form-check" style="margin-top: 6px;"><input type="checkbox" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">+ Lit supplémentaire</label></div>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="text" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="text" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><label style="margin-top: 6px;">Choix de chambre</label>
                <div>
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link active" href="#tab-1">Simple</a></li>
                        <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-2">Double</a></li>
                        <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-3">Familiale</a></li>
                        <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-4">Dortoir</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <div class="table-responsive" style="font-size: 11px;">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>N° Chambre</th>
                                            <th>Prix journalier</th>
                                            <th>Prix Horaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 0px;"><input type="radio" /></td>
                                            <td>Cell 2</td>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-2">
                            <div class="table-responsive" style="font-size: 11px;">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>N° Chambre</th>
                                            <th>Prix journalier</th>
                                            <th>Prix horaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 0px;"><input type="radio" /></td>
                                            <td>Cell 2</td>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-3">
                            <div class="table-responsive" style="font-size: 11px;">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>N° Chambre</th>
                                            <th>Prix journalier</th>
                                            <th>Prix horaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 0px;"><input type="radio" /></td>
                                            <td>Cell 2</td>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-4">
                            <div class="table-responsive" style="font-size: 11px;">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>N° Chambre</th>
                                            <th>Prix journalier</th>
                                            <th>Prix horaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 0px;"><input type="radio" /></td>
                                            <td>Cell 2</td>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-4"></div>
                        <div role="tabpanel" class="tab-pane" id="tab-5">
                            <p>Tab content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 51px;padding: 8px;"><button class="btn btn-dark" type="button" style="font-size: 12px;height: 28px;padding: 1px 12px;">Facture <i class="fa fa-print"></i></button><button class="btn btn-primary" type="button" style="font-size: 12px;height: 28px;padding: 1px 12px;">Enregistrer</button></div>
        </div>
    </div>
</div>

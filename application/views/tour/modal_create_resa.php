<div role="dialog" tabindex="-1" id="resrve" class="modal fade show" style="font-size: 12px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 12px;height: 44px;padding-top: 9px;">
                <h4 class="modal-title" style="font-size: 13px;">Réservation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				<?php echo form_open('toursaveres')?>
				<form method="POST">
					<input type="hidden" name="id" class="id"/>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Information du client</label></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col"><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;" placeholder="Nom et Prenoms du client" name="res_cli_nom" class="res_cli_nom" /><input type="number" style="width: 165px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" name="res_cli_nbr" class="res_cli_nbr" /><input type="number" style="width: 165px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" placeholder="Nombre de jour" inputmode="numeric" name="res_nbr_jr" class="res_nbr_jr" /></div>
                                    <div class="col"><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;" placeholder="Telephone" name="res_cli_tel" class="res_cli_tel" /><input type="text" style="width: 165px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" placeholder="E-mail" name="res_cli_email" class="res_cli_email" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check" style="margin-top: 6px;"><input type="checkbox" class="form-check-input" id="formCheck-1" name="res_visitesite" class="res_visitesite" value="OUI" /><label class="form-check-label" for="formCheck-1">Visite de site vozama</label></div>
                        <div class="row">
                            <div class="col-xl-5" style="width: 99px;"><input type="number" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant de visite" name="res_visitesite_prix" class="res_visitesite_prix" /></div>
                        </div><textarea style="width: 363px;margin-top: 6px;height: 56px;" placeholder="Notes ou Remarques" name="res_note" class="res_note"></textarea>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col"><label class="col-form-label">Information supplémentaire du réservation </label></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-xl-7 offset-xl-2"><select style="width: 201px;" name="res_repas" class="res_repas">
                                            <optgroup label="Repas">
                                                <option value selected>Repas oui / non</option>
                                                <option value="OUI">Oui</option>
                                                <option value="NON">Non</option>
                                            </optgroup>
                                        </select><select style="width: 201px;margin-top: 6px;" name="res_repas_type" class="res_repas_type">
                                            <optgroup label="Repas">
                                                <option value selected>Choix de plat si OUI</option>
                                                <option value="Couple">Couple</option>
                                                <option value="Resistant">Resistant</option>
                                                <option value="Autre">Autre</option>
                                            </optgroup>
                                        </select>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="number" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant repas" name="res_repas_prix" class="res_repas_prix" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="number" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" name="res_repas_nbr" class="res_repas_nbr" /></div>
                                        </div><select style="width: 201px;margin-top: 6px;" name="res_ptid" class="res_ptid">
                                            <optgroup label="Petit dejeuner">
                                                <option value selected>Petit dejeuner oui / non</option>
                                                <option value="OUI">Oui</option>
                                                <option value="NON">Non</option>
                                            </optgroup>
                                        </select>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="number" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant petit dejeuner" name="res_ptid_prix" class="res_ptid_prix" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="number" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" name="res_ptid_nbr" class="res_ptid_nbr" /></div>
                                        </div>
                                        <div class="form-check" style="margin-top: 6px;"><input type="checkbox" class="form-check-input" id="formCheck-1" name="res_lit_sup" class="res_lit_sup" value="OUI" /><label class="form-check-label" for="formCheck-1">+ Lit supplémentaire</label></div>
                                        <div class="row">
                                            <div class="col-xl-8" style="width: 99px;"><input type="number" style="width: 133px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Montant" name="res_lit_sup_prix" class="res_lit_sup_prix" /></div>
                                            <div class="col-xl-4" style="width: 99px;"><input type="number" style="width: 49px;padding-right: 1px;padding-left: 1px;margin-top: 6px;" inputmode="numeric" placeholder="Nombre" name="res_lit_sup_nbr" class="res_lit_sup_nbr" /></div>
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
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($chmbreS as $simple) { ?>
                                        <tr>
										<td style="padding-right: 0px;"><input type="radio" name="chambre_id" value="<?php echo $simple->id;?>" /></td>
                                            <td><?php echo $simple->chr_numero;?></td>
                                            <td><?php echo $simple->chr_prix_nuite;?></td>
                                        </tr>
										<?php }?>
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
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($chmbreD as $double) { ?>
                                        <tr>
										<td style="padding-right: 0px;"><input type="radio" name="chambre_id" value="<?php echo $double->id;?>" /></td>
										<td><?php echo $double->chr_numero;?></td>
                                        <td><?php echo $double->chr_prix_nuite;?></td>
                                        </tr>
										<?php }?>
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
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($chmbreF as $familial) { ?>
                                        <tr>
										<td style="padding-right: 0px;"><input type="radio" name="chambre_id" value="<?php echo $familial->id;?>" /></td>
											<td><?php echo $familial->chr_numero;?></td>
                                            <td><?php echo $familial->chr_prix_nuite;?></td>
                                        </tr>
										<?php }?>
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
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($chmbreDo as $dortoir) { ?>
                                        <tr>
										<td style="padding-right: 0px;"><input type="radio" name="chambre_id" value="<?php echo $dortoir->id;?>" /></td>
										<td><?php echo $dortoir->chr_numero;?></td>
                                            <td><?php echo $dortoir->chr_prix_nuite;?></td>
                                        </tr>
										<?php }?>
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
            <div class="modal-footer" style="height: 51px;padding: 8px;">
			<!--<button class="btn btn-dark" type="button" style="font-size: 12px;height: 28px;padding: 1px 12px;">Facture <i class="fa fa-print"></i></button>-->
			<button class="btn btn-primary" type="submit" style="font-size: 12px;height: 28px;padding: 1px 12px;">Enregistrer</button></div>
			</form>
			<?php echo form_close()?>
		</div>
    </div>
</div>

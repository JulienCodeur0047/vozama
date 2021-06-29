<div role="dialog" id="reserv" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Réservation de chambre </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('toursaveres');?>
        <form method="POST">
        <input name="id" type="hidden"/>
                <div class="row">
                    <div class="col-xl-4"><label style="font-size: 12px;margin: -4px;margin-left: 8px;">Information du client<br /></label>
                    <input type="text" style="width: 237px;height: 26px;font-size: 13px;color: var(--dark);padding: 0px 2px;padding-right: 0px;padding-left: 0px;margin-bottom: 6px;" placeholder="Nom et Prenoms" name="res_cli_nom" />
                    <input type="text" style="width: 237px;height: 26px;font-size: 13px;color: var(--dark);padding: 0px 2px;padding-right: 0px;padding-left: 0px;margin-bottom: 6px;" placeholder="Telephone" name="res_cli_tel" />
                    <input type="text" style="width: 237px;height: 26px;font-size: 13px;color: var(--dark);padding: 0px 2px;padding-right: 0px;padding-left: 0px;margin-bottom: 6px;" placeholder="Nombre" name="res_cli_nbr" inputmode="numeric" /></div>
                    <div class="col-xl-3" style="width: 151px;">
                    <input type="number" style="font-size: 12px;width: 159px;margin: 0px;margin-top: 25px;" placeholder="Nbr Nuitée " name="res_nbr_jr" />
                    <input type="number" style="font-size: 12px;width: 159px;margin-top: 7px;" placeholder="Nbr Horaire" name="res_nbr_hr" />
                    <input type="number" style="font-size: 12px;width: 159px;margin-top: 7px;" placeholder="Prix repas" name="res_repa_complet" /></div>
                    <div class="col">
                    <input type="number" style="font-size: 12px;width: 159px;margin-top: 24px;margin-left: 16px;" placeholder="Payement en avance" name="res_paye_avc" /><label style="font-size: 12px;margin-left: 16px;">Ar (Avance)</label>
                    <input type="number" style="font-size: 12px;width: 159px;margin-top: 7px;margin-left: 16px;" placeholder="Payement Reste" name="res_paye_reste" /><label style="font-size: 12px;margin-left: 16px;">Ar (Reste)</label>
                    <input type="number" style="font-size: 12px;width: 159px;margin-top: 7px;margin-left: 16px;" placeholder="Total" name="res_paye_total" /><label style="font-size: 12px;margin-left: 16px;">Ar - TOTAL</label></div>
                </div>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;margin-top: 11px;"><label style="font-size: 12px;margin: -4px;margin-left: 8px;">Chambre disponible<br /></label>
                        <div class="table-responsive" style="font-size: 10px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 29px;"></th>
                                        <th style="width: 68px;">No</th>
                                        <th>Nuit</th>
                                        <th>Jour</th>
                                        <th>Lit 1p</th>
                                        <th>Lit 2p</th>
                                        <th style="width: 66px;">tv</th>
                                        <th style="width: 80px;">eau chaude</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach ($chmbre as $chmbr) { ?>
                                    <tr>
                                        <td><input type="radio" name="idchmbr" value="<?php echo $chmbr->id;?>" /></td>
                                        <input type="hidden" name="chr_numero" value="<?php echo $chmbr->chr_numero;?>"/>
                                        <input type="hidden" name="chr_prix_nuite" value="<?php echo $chmbr->chr_prix_nuite;?>"/>
                                        <input type="hidden" name="chr_prix_jour" value="<?php echo $chmbr->chr_prix_jour;?>"/>
                                        <input type="hidden" name="chr_nbr_lit_1_plce" value="<?php echo $chmbr->chr_nbr_lit_1_plce;?>"/>
                                        <input type="hidden" name="chr_nbr_lit_2_plce" value="<?php echo $chmbr->chr_nbr_lit_2_plce;?>"/>
                                        <input type="hidden" name="chr_tv" value="<?php echo $chmbr->chr_tv;?>"/>
                                        <input type="hidden" name="chr_eau_chaude" value="<?php echo $chmbr->chr_eau_chaude;?>"/>
                                        <td><?php echo $chmbr->chr_numero;?></td>
                                        <td><?php echo $chmbr->chr_prix_nuite;?></td>
                                        <td><?php echo $chmbr->chr_prix_jour;?></td>
                                        <td><?php echo $chmbr->chr_nbr_lit_1_plce;?></td>
                                        <td><?php echo $chmbr->chr_nbr_lit_2_plce;?></td>
                                        <td><?php echo $chmbr->chr_tv;?></td>
                                        <td><?php echo $chmbr->chr_eau_chaude;?></td>
                                    </tr>
								<?php }?>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
        </form>
        <?php echo form_close();?>
        </div>
    </div>
</div>

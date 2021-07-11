<?php $this->load->view('theme/header_suivi'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#ecol" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Payer</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Historique de payement d&#39;Ecolage</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 178px;">Nom Prénoms</th>
                            <th style="width: 104px;">Mois</th>
                            <th style="width: 105px;height: 44px;">Montant</th>
                            <th style="width: 122px;">Type</th>
                            <th style="width: 122px;">Designation</th>
                            <th style="width: 91px;height: 30px;">Observation</th>
                            <th style="width: 36px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $ecol) { ?>
                        <tr>
                            <td><?php echo $ecol->eco_el_nom;?> <?php echo $ecol->eco_el_prenoms;?></td>
                            <td><?php echo $ecol->eco_mois;?></td>
                            <td><?php echo $ecol->eco_montant;?></td>
                            <td><?php echo $ecol->eco_type;?></td>
                            <td><?php echo $ecol->eco_libelle_type;?></td>
                            <td><?php echo $ecol->eco_observation;?></td>
                            <td style="font-size: 12px;width: 30px;"><button class="btn btn-light" type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></button></td>
                        </tr>
                        <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php $this->load->view('suiv/modal_suiv_ecolage');?>

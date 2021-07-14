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
            <div class="row">
                <div class="col-xl-4"><label style="margin-left: 11px;font-size: 12px;color: var(--gray);">Liste d&#39;élève</label>
                    <div class="table-responsive table-bordered" style="width: auto;font-size: 12px;margin-left: 11px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead style="height: 34px;">
                                <tr style="color: var(--gray);">
                                    <th style="width: 178px;">Nom & Prénoms</th>
                                    <th style="width: 65px;">Classe</th>
                                    <th style="width: 55px;height: 44px;"></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach ($eleve as $el) {?>
                                <tr>
                                    <td><?php echo $el->eleve_name;?> <?php echo $el->eleve_firstname;?></td>
                                    <td><?php echo $el->eleve_classe;?></td>
                                    <td>
										<a class="btn btn-light" href="#" 
										data-id="<?php echo $el->id;?>"
										data-id="<?php echo $el->eleve_name;?>"
										data-id="<?php echo $el->eleve_firstname;?>"
										data-id="<?php echo $el->eleve_classe;?>"
										data-id=""
										data-id=""
										type="button" style="background: #66d7d7;width: 38px;height: 21px;margin-top: 0px;padding: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;font-size: 12px;"><i class="fa fa-money" style="font-size: 12px;width: 12px;padding-bottom: 0px;height: 7px;"></i></a></td>
                                </tr>
								<?php }?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-8" style="padding-left: 0px;"><label style="font-size: 12px;color: var(--gray);">Liste d&#39;écolage payé</label>
                    <div class="table-responsive table-bordered" style="width: auto;font-size: 12px;margin-right: 8px;">
                        <table class="table table-striped table-bordered table-sm">
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
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php $this->load->view('suiv/modal_suiv_ecolage');?>

<?php $this->load->view('theme/header_dev'); ?>
<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newagr" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintagr" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">AGR - Activité Génératrice des Revenue</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;height: 44px;">Parent</th>
                            <th style="width: 62px;">Filiere</th>
                            <th style="width: 73px;">Qté D</th>
                            <th style="width: 70px;height: -12px;">Date D</th>
                            <th style="width: 68px;height: -12px;">Date Suivi</th>
                            <th style="width: 68px;height: -12px;">Formation</th>
                            <th style="width: 23px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $agr) { ?>
                        <tr>
                            <td><?php echo $agr->agr_parent; ?></td>
                            <td><?php echo $agr->agr_filiere; ?></td>
                            <td><?php echo $agr->agr_qte; ?></td>
                            <td><?php echo $agr->agr_date_d; ?></td>
                            <td><?php echo $agr->agr_date_suivi; ?></td>
                            <td><?php echo $agr->agr_formation; ?></td>
                            <td style="font-size: 12px;"><button class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></button><button class="btn btn-light" type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></button>
                            <a class="btn btn-light" role="button" 
                            onclick="return confirm('Voulez-vous supprimer le AGR <?php echo $agr->agr_filiere ?> ?');"
							href="<?php echo base_url('deletedevagr/'.$agr->id)?>" 
                            style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
                    <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div>
<?php $this->load->view('dev/modal_create_agr'); ?>
<?php $this->load->view('dev/modal_filter_print_agr'); ?>
</div>

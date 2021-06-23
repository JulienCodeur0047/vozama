    <?php $this->load->view('theme/header_dev'); ?>
 
	<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label>
                    <input type="search" class="form-control search-field" id="search-field" name="search" style="width: 350px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" />

                    </div>
                </form><a class="btn btn-light action-button" role="button" href="#apfilterprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
	<div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Autonomisation de poste</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">
            <a class="btn btn-light action-button" role="button" href="#apfilter" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('dev');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
                </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 50px;">Nom</th>
                            <th style="width: 105px;height: 44px;">Prénoms</th>
                            <th style="width: 46px;">Age</th>
                            <th style="width: 63px;">Date d&#39;abandon</th>
                            <th style="width: 84px;">Date de retour</th>
                            <th style="width: 97px;">Père</th>
                            <th style="width: 91px;height: -12px;">Mère</th>
                            <th style="width: 91px;height: -12px;">Participation parental</th>
                            <th style="width: 18px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $eleve) { ?>
                        <tr>
                            <td><?php echo $eleve->eleve_name; ?></td>
                            <td><?php echo $eleve->eleve_firstname; ?></td>
                            <td><?php echo $eleve->eleve_age; ?></td>
                            <td><?php echo $eleve->eleve_date_abandon; ?></td>
                            <td><?php echo $eleve->eleve_date_retour; ?></td>
                            <td><?php echo $eleve->eleve_mom; ?></td>
                            <td><?php echo $eleve->eleve_dad; ?></td>
                            <td><?php echo $eleve->eleve_participation; ?></td>
                            <td style="font-size: 12px;">
                            <button class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></button>
                            
                            <button class="btn btn-light" type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></button></td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('dev/modal_filter_ap'); ?>
<?php $this->load->view('dev/modal_filter_print_ap'); ?>
  
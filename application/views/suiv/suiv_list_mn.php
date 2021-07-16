<?php $this->load->view('theme/header_suivi'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form>
				<a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Moniteur</h1>
			<a class="btn btn-light action-button" role="button" href="#filtermn" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
	<a class="btn btn-light action-button" role="button" href="<?php echo base_url('suivmon');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1> 
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;">Matricule</th>
                            <th style="width: 178px;">Nom</th>
                            <th style="width: 178px;">Prénoms</th>
                            <th style="width: 104px;">Poste</th>
                            <th style="width: 105px;height: 44px;">Date entré</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php foreach ($data as $moniteur) {?>
                        <tr>
                            <td><?php echo $moniteur->moniteur_matricule;?></td>
                            <td><?php echo $moniteur->moniteur_name;?></td>
                            <td><?php echo $moniteur->moniteur_firstname;?></td>
                            <td><?php echo $moniteur->moniteur_poste;?></td>
                            <td><?php echo $moniteur->moniteur_date_entre_voz;?></td>
                        </tr>
						<?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('suiv/modal_filter_mn')?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

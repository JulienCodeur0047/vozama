				<?php $this->load->view('theme/header_alph');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="<?php echo base_url('createposte')?>" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;"><i class="fa fa-plus" style="font-size: 14px;"></i>&nbsp;Nouveau</a>
				<a class="btn btn-light action-button" role="button" href="<?php echo base_url('printposte')?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;margin-left: 0px;border-radius: 0px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Liste de postes</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 143px;">Numéro</th>
                            <th style="width: 223px;">Nom</th>
                            <th style="width: 188px;">Moniteur</th>
                            <th style="width: 232px;">Région</th>
                            <th style="width: 205px;">Site</th>
                            <th style="width: 137px;">Ouverture</th>
                            <th style="width: 137px;">Secteur</th>
                            <th style="width: 204px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $poste) { ?> 
                        <tr>
                            <td><?php echo $poste->poste_num; ?></td>
                            <td><?php echo $poste->poste_name; ?></td>
                            <td><?php echo $poste->poste_moniteur_name; ?></td>
                            <td><?php echo $poste->poste_region; ?></td>
                            <td><?php echo $poste->poste_site; ?></td>
                            <td><?php echo $poste->poste_overture; ?></td>
                            <td><?php echo $poste->poste_secteur; ?></td>
                            <td style="font-size: 12px;">
							<a class="btn btn-light action-button" href="<?php echo base_url('showPoste'.$poste->id)?>" role="button" style="background: rgb(234,234,234);margin-right: 0px; margin-left: 0px; height: 34px;padding-top: 3px;margin-top: 0px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-eye" style="font-size: 12px;"></i></a>
							<a class="btn btn-light action-button" href="<?php echo base_url('editPoste'.$poste->id)?>" role="button" style="background: rgb(153,217,168); margin-left: 0px; margin-right: 0px;height: 34px;margin-top: 0px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light action-button" 
							onclick="return confirm('Voulez-vous supprimer le Poste <?php echo $poste->poste_name ?> ?');"
							href="<?php echo base_url('deletePoste/'.$poste->id)?>" 
                            role="button" style="background: rgb(210,128,136); margin-left: 0px; width: 38px;height: 34px;margin-top: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

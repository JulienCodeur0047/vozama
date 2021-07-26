				<?php $this->load->view('theme/header_alph');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newvp" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="<?php echo base_url('printvp');?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Liste de visite de poste</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 143px;">Numéro</th>
                            <th style="width: 223px;">Poste</th>
                            <th style="width: 188px;">Moniteur</th>
                            <th style="width: 232px;">Annimateur</th>
                            <th style="width: 205px;">Date</th>
                            <th style="width: 137px;">Heure</th>
                            <th style="width: 204px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $vp) { ?> 
                        <tr>
                            <td><?php echo $vp->id;?></td>
                            <td><?php echo $vp->vp_poste;?></td>
                            <td><?php echo $vp->vp_moniteur;?></td>
                            <td><?php echo $vp->vp_inspecteur;?></td>
                            <td><?php echo $vp->vp_date;?></td>
                            <td><?php echo $vp->vp_heure;?></td>
                            <td style="font-size: 12px;">
							<a href="<?php echo base_url('showvp'.$vp->id);?>" class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></a>
							<a href="<?php echo base_url('editv'.$vp->id);?>"class="btn btn-light" type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer le Poste <?php echo $vp->id ?> ?');"
							href="<?php echo base_url('deleteVp/'.$vp->id)?>"
							 type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div>
<?php $this->load->view('visite_poste/modal_create_vp');?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

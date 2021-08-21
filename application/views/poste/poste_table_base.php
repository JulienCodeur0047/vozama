<?php $this->load->view('theme/header_alph');?>
             </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Tables de base</h1>
            <div class="row">
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>REGION</th>
                                    <th>
									<a href="#newregion" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;">
										<i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
									</a>
									</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($region as $reg){ ?>
                                <tr>
								
                                    <td><?php echo $reg->region_name;?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer la region de <?php echo $reg->region_name ?> ?');"
									href="<?php echo base_url('delregion/'.$reg->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                
								</tr>
								<?php }?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>SECTEUR</th>
                                    <th>
									<a href="#newsecteur" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
									</a>
								</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($secteur as $sect){ ?>
                                <tr>
								
                                    <td><?php echo $sect->secteur_name;?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer le secteur :<?php echo $sect->secteur_name ?> ?');"
									href="<?php echo base_url('delsecteur/'.$sect->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
								</tr>
								<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>ZONE</th>
                                    <th>
									<a href="#newzone" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
									</a>
								</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($zone as $zone){ ?>
                                <tr>
								
                                    <td><?php echo $zone->zone_name;?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer la zone :<?php echo $zone->zone_name ?> ?');"
									href="<?php echo base_url('delzone/'.$zone->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
								</tr>
								<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>CISCO</th>
                                    <th>
									<a href="#newcisco" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
									</a>
								</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($cisco as $cisco){ ?>
                                <tr>
								
                                    <td><?php echo $cisco->cisco_name;?></td>
									<td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer cisco:<?php echo $cisco->cisco_name ?> ?');"
									href="<?php echo base_url('delcisco/'.$cisco->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
								</tr>
								<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>COMMUNE</th>
                                    <th>
									<a href="#newcommune" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
									</a>
								</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($commune as $comm){ ?>
                                <tr>
								
                                    <td><?php echo $comm->commune_name;?></td>
									<td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer commune:<?php echo $comm->commune_name ?> ?');"
									href="<?php echo base_url('delcommune/'.$comm->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
								</tr>
								<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>NIVEAU</th>
                                    <th>
									<a href="#newniveau" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
								</a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($niveau as $niveau){ ?>
                                <tr>
								
                                    <td><?php echo $niveau->niveau_name;?></td>
									<td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer niveau: <?php echo $niveau->niveau_name ?> ?');"
									href="<?php echo base_url('delniveau/'.$niveau->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
								</tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>FOKOTANY</th>
                                    <th><a href="#newfokotany" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
								</a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($fokotany as $fkt){ ?>
                                <tr>
                                    <td><?php echo $fkt->fkt_name;?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer Fokotany: <?php echo $fkt->fkt_name; ?> ?');"
									href="<?php echo base_url('delfkt/'.$fkt->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                </tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>ZAP</th>
                                    <th>
									<a href="#newzap" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($quartier as $qurt){ ?>
                                <tr>
                                    <td><?php echo $qurt->quartier_name;?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer ZAP: <?php echo $qurt->quartier_name; ?> ?');"
									href="<?php echo base_url('delquartier/'.$qurt->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                </tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>DISTRICT</th>
                                    <th><a href="#newdistrict" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($district as $district){ ?>
                                <tr>
                                    <td><?php echo $district->district_name;?></td>
									<td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer District: <?php echo $district->district_name; ?> ?');"
									href="<?php echo base_url('deldistrict/'.$district->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                </tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>EGLISE</th>
                                    <th><a href="#neweglise" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i>
								</a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($eglise as $eglise){ ?>
                                <tr>
                                    <td><?php echo $eglise->eglise_name; ?></td>
									<td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer Eglise: <?php echo $eglise->eglise_name; ?> ?');"
									href="<?php echo base_url('deleglise/'.$eglise->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                </tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive table-bordered" style="font-size: 10px;">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>PERE</th>
                                    <th><a href="#newpere" data-toggle="modal" class="btn btn-sm" type="button" style="font-size: 9px;height: 24px;padding-top: 4px;"><i class="fa fa-plus" style="font-size: 13px;color: rgb(0,186,19);"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($pere as $pere){ ?>
                                <tr>
                                    <td><?php echo $pere->pere_name; ?></td>
                                    <td style="width: 44px;">
									<a class="btn btn-sm action-button" role="button"
									onclick="return confirm('Voulez-vous supprimer: <?php echo $pere->pere_name; ?> ?');"
									href="<?php echo base_url('delpere/'.$pere->id)?>" 
									style="font-size: 9px;height: 24px;padding-top: 4px;width: 30.2188px;padding-left: 9px;"><i class="fa fa-close" style="font-size: 13px;color: var(--red);"></i>
									</a></td>
                                </tr>
							<?php } ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php $this->load->view('poste/modal_add_detail');?>

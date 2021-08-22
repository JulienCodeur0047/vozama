<?php $this->load->view('theme/header_admin');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newuser" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste des utilisateurs de l&#39;application</h1>
            <div class="row" style="height: auto;">
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col">
                            <h1 style="margin-bottom: 7px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;"> Type de privilège et Accès  <i class="fa fa-question-circle-o"></i></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-left: 40px;">
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Administrateur <i class="fa fa-star" style="color: rgb(255,245,0);"></i></h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;color: rgb(109,109,109);border-style: none;border-color: rgb(116,116,116);">- Accès illimité<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Alphabétisation </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 222.1875px;color: rgb(109,109,109);border-style: none;">- Gestion de l’alphabétisation<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion table de base<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Entreprise</h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion d&#39;entreprise<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Personnel / Bien<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Environnement </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion Pépinière / AEP<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Développement </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 220.1875px;color: rgb(109,109,109);border-style: none;">- Gestion de développement / Poste<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Suivi et évaluation </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Suivi Élève / Poste / …<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion de note<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Communication </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion de communication<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Tourisme solidaire</h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion Hôtel / touriste <br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Visite de site<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                            <h1 style="margin-bottom: 0px;height: 16px;font-size: 14px;color: var(--gray);margin-top: 4px;">Sécurité </h1><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Gestion de garde<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Visiteur / Passation<br /></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 14px;width: 190.1875px;color: rgb(109,109,109);border-style: none;">- Accès aux plannings<br /></label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive" style="width: auto;font-size: 12px;">
					<a class="btn btn-light action-button" role="button" href="#filteruser" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 9px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 11px;"></i>  Filtre</a>
					<a class="btn btn-light action-button" role="button" href="<?php echo base_url('usermgr');?>" style="margin-top: 2px;background: var(--teal);font-size: 9px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 11px;"></i></a></h1>
                        <table class="table table-sm">
                            <thead>
                                <tr style="color: var(--gray);">
                                    <th style="width: 17px;">id</th>
                                    <th style="width: 60px;">Login</th>
                                    <th style="width: 50px;">Mot de passe</th>
                                    <th style="width: 41px;">Type d&#39;acces</th>
                                    <th style="width: 13px;"></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach ($user as $user) { ?>
                                <tr>
                                    <td><?php echo $user->id;?></td>
                                    <td><?php echo $user->user_name;?></td>
                                    <td style="padding: 0;color: rgb(142,142,142);font-size: 9px;"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></td>
                                    <td><?php echo $user->user_type;?></td>
                                    <td style="font-size: 12px;width: 15px;padding: 0px;padding-top: 0;">
									<a class="btn btn-sm" type="button" 
									onclick="return confirm('Voulez-vous supprimer l\'Utilisateur <?php echo $user->user_type.', nom de connexion: '.$user->user_name; ?> ?');"
									href="<?php echo base_url('deluser/'.$user->id)?>" 
									style="background: var(--light);width: 22px;height: 24px;margin-top: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;padding-right: 0;padding-bottom: 0;padding-left: 0;"><i class="fa fa-close" style="font-size: 12px;width: 12px;padding-bottom: 0px;color: var(--red);"></i></a>
									<a class="btn btn-sm btn-edit" href="#"
									data-id="<?php echo $user->id; ?>"
									data-user_name="<?php echo $user->user_name; ?>"
									data-user_password="<?php echo $user->user_password; ?>"
									data-user_type_code="<?php echo $user->user_type_code; ?>"
									type="button" style="background: var(--light);width: 22px;height: 24px;margin-top: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;padding-right: 0;padding-bottom: 0;padding-left: 0;"><i class="fa fa-key" style="font-size: 12px;width: 12px;padding-bottom: 0px;color: var(--success);"></i></a></td>
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
<?php $this->load->view('admin/modal_filter_user')?>
<?php $this->load->view('admin/modal_create_user')?>
<script>
    $(document).ready(function(){

		$('#newuser').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#filteruser').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const user_name = $(this).data('user_name');
            const user_password = $(this).data('user_password');
            const user_type_code = $(this).data('user_type_code');
            // Set data to Form Edit
            $('.id').val(id);
            $('.user_name').val(user_name);
            $('.user_password').val(user_password);
            $('.user_type_code').val(user_type_code).trigger('change');
            // Call Modal Edit
            $('#newuser').modal('show');
        });
        
    });
</script>

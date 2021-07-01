<?php $this->load->view('theme/header_sec'); ?>

                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form>
                <a class="btn btn-light action-button" href="#pass" data-toggle="modal" role="button" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Passation</a>
                <a class="btn btn-light action-button" role="button" href="<?php echo base_url('secprintPass')?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Passassions</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 125px;">Nom et Prénoms</th>
                            <th style="width: 60px;">Objet</th>
                            <th style="width: 60px;">Date de dépôt</th>
                            <th style="width: 50px;">Heur de dépôt</th>
                            <th style="width: 50px;">Date de remise</th>
                            <th style="width: 50px;">Heure de remise</th>
                            <th style="width: 10px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $pass) { ?>
                        <tr>
                            <td><?php echo $pass->pass_name_firstname;?></td>
                            <td><?php echo $pass->pass_obejt;?></td>
                            <td><?php echo $pass->pass_date_dep;?></td>
                            <td><?php echo $pass->pass_hr_dep;?></td>
                            <td><?php echo $pass->pass_date_rem;?></td>
                            <td><?php echo $pass->pass_hr_rem;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light"
                            onclick="return confirm('Voulez-vous supprimer le passation de <?php echo $pass->pass_obejt;?> du <?php echo $pass->pass_date_dep;?>?');"
							href="<?php echo base_url('secdelpass/'.$pass->id)?>" 
                             type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
                        <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('sec/modal_create_pass');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){
        // get Edit Product
        $('.btn-add').on('click',function(){
            $('#pass').modal('show');
        });
		
        
    });

</script>
<?php $this->load->view('theme/header_com'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#filtreparrprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Parrainage - Liste de poste</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">
            <a class="btn btn-light action-button" role="button" href="#filtreparr" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('com');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
                </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;">Numéro</th>
                            <th style="width: 178px;">Poste</th>
                            <th style="width: 104px;">Parrain</th>
                            <th style="width: 104px;">Date de Parrainage</th>
                            <th style="width: 105px;height: 44px;">Parrainé</th>
                            <th style="width: 98px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $poste) { ?>
                        <tr>
                            <td><?php echo $poste->poste_num;?></td>
                            <td><?php echo $poste->poste_name;?></td>
                            <td><?php echo $poste->poste_parrain;?></td>
                            <td><?php echo $poste->paste_date_parr;?></td>
                            <td><?php echo $poste->poste_parraine;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light btn-edit"  href="#"
                            data-id="<?php echo $poste->id?>"
                            data-poste_num="<?php echo $poste->poste_num?>"
                            data-poste_name="<?php echo $poste->poste_name?>"
                            data-poste_parrain="<?php echo $poste->poste_parrain?>"
                            data-paste_date_parr="<?php echo $poste->paste_date_parr?>"
                            data-poste_parraine="<?php echo $poste->poste_parraine?>"
                            
                            type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 4px;font-size: 12px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i> parrainer</a></td>
                        </tr>
                        <?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('com/modal_filtre_parr'); ?>
<?php $this->load->view('com/modal_parr'); ?>
<?php $this->load->view('com/modal_print_filter_parr'); ?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const poste_num = $(this).data('poste_num');
            const poste_name = $(this).data('poste_name');
            const poste_parrain = $(this).data('poste_parrain');
            const paste_date_parr = $(this).data('paste_date_parr');
            const poste_parraine = $(this).data('poste_parraine');
            // Set data to Form Edit
            $('.id').val(id);
            $('.poste_num').val(poste_num);
            $('.poste_name').val(poste_name);
            $('.poste_parrain').val(poste_parrain);
            $('.paste_date_parr').val(paste_date_parr);
            $('.poste_parraine').prop('checked',false);
            // Call Modal Edit
            $('#parrainage').modal('show');
        });
        
    });
    $('#parrainage').on('hidden.bs.modal', function(event) {
     $('#parrainage').empty();
    });
</script>
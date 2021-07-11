<?php $this->load->view('theme/header_suivi'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
    <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
    <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Detail note Eleve</h1>
    <div class="table-responsive table-bordered" style="font-size: 11px;">
        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th style="width: 244px;">Nom &amp; Prénoms</th>
                    <th style="width: 75px;">Classe</th>
                    <th style="width: 75px;">Trimestre</th>
                    <th style="width: 75px;">Annee</th>
                    <th style="width: 75px;">Vakiteny</th>
                    <th style="width: 75px;">Sorakaliana</th>
                    <th style="width: 75px;">Kajy</th>
                    <th style="width: 75px;">Note 4</th>
                    <th style="width: 75px;">Note 5</th>
                    <th style="width: 75px;">Note 6</th>
                    <th style="width: 75px;">Note 7</th>
                    <th style="width: 75px;">Note 8</th>
                    <th style="width: 75px;">Moyenne</th>
                    <th style="width: 48px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $dn) { ?>
                <tr>
                    <td><?php echo $dn->note_eleve;?></td>
                    <td style="width: 75px;"><?php echo $dn->note_eleve_classe;?></td>
                    <td style="width: 75px;"><?php echo $dn->note_trimestre;?></td>
                    <td style="width: 75px;"><?php echo $dn->note_trimestre_annee;?></td>
                    <td style="width: 75px;"><?php echo $dn->note_mat1;?></td>
                    <td style="width: 75px;"><?php echo $dn->note_mat2;?></td>
                    <td><?php echo $dn->note_mat3;?></td>
                    <td><?php echo $dn->note_mat4;?></td>
                    <td><?php echo $dn->note_mat5;?></td>
                    <td><?php echo $dn->note_mat6;?></td>
                    <td><?php echo $dn->note_mat7;?></td>
                    <td><?php echo $dn->note_mat8;?></td>
                    <td><?php echo $dn->note_moyenne;?></td>
                    <td style="padding-top: 1.8px;padding-bottom: 2.8px;">
                    <a class="btn btn-dark btn-sm btn-edit" 
                    href="#" data-toggle="modal"
                    type="button" style="font-size: 12px;height: 23px;padding-top: 0px;padding-right: 2px;padding-bottom: 4px;padding-left: 2px;">supprimer</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
    </div>
</section>
<!--<?php $this->load->view('suiv/modal_note')?>-->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--<script>
    $(document).ready(function(){

		$('#note').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const eleve_name = $(this).data('eleve_name');
            const eleve_firstname = $(this).data('eleve_firstname');
            const eleve_classe = $(this).data('eleve_classe');
            const note = $(this).data('note');

            // Set data to Form Edit
            $('.id').val(id);
            $('.note_eleve').val(eleve_name+" " +eleve_firstname);
            $('.eleve_classe').val(eleve_classe);
            $('.note').val(note);
            // Call Modal Edit
            $('#note').modal('show');
        });
		
        
    });

</script> -->

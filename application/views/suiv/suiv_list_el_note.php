<?php $this->load->view('theme/header_suivi'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
    <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
    <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Élève / Note</h1>
    <div class="table-responsive table-bordered" style="font-size: 11px;">
        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th style="width: 244px;">Nom &amp; Prénoms</th>
                    <th style="width: 75px;">Classe</th>
                    <th style="width: 75px;">Myn Trim I</th>
                    <th style="width: 75px;">Myn Trim II</th>
                    <th style="width: 75px;">Myn Trim II</th>
                    <th style="width: 75px;">Myn General</th>
                    <th style="width: 120px;">Situation</th>
                    <th style="width: 48px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eleve as $el) {?>
                <tr>
                    <td><?php echo $el->eleve_name?> <?php echo $el->eleve_firstname;?></td>
                    <td style="width: 75px;"><?php echo $el->eleve_classe?></td>
                    <td style="width: 75px;"><?php echo $el->eleve_m1?></td>
                    <td style="width: 75px;"><?php echo $el->eleve_m2?></td>
                    <td style="width: 75px;"><?php echo $el->eleve_m3?></td>
                    <td style="width: 75px;"><?php echo $el->eleve_mg?></td>
                    <td><?php echo $el->eleve_situation?></td>
                    <td style="padding-top: 1.8px;padding-bottom: 2.8px;">
                    <a class="btn btn-dark btn-sm btn-edit" 
                    href="#" data-toggle="modal"
                    data-id="<?php echo $el->id?>"
                    <?php $note = base_url('getnote/'.$el->id); ?>
                    data-note=" <?php echo $note?> "
                    data-eleve_name="<?php echo $el->eleve_name?>"
                    data-eleve_firstname="<?php echo $el->eleve_firstname?>"
                    data-eleve_classe="<?php echo $el->eleve_classe?>"
                    data-eleve_m1="<?php echo $el->eleve_m1?>"
                    data-eleve_m2="<?php echo $el->eleve_m2?>"
                    data-eleve_m3="<?php echo $el->eleve_m3?>"
                    data-eleve_mg="<?php echo $el->eleve_mg?>"
                    type="button" style="font-size: 12px;height: 23px;padding-top: 0px;padding-right: 2px;padding-bottom: 4px;padding-left: 2px;">note</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
    </div>
</section>
<?php $this->load->view('suiv/modal_note')?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
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
            const eleve_m1 = $(this).data('eleve_m1');
            const eleve_m2 = $(this).data('eleve_m2');
            const eleve_m3 = $(this).data('eleve_m3');
            const eleve_mg = $(this).data('eleve_mg');
            const note = $(this).data('note');

            // Set data to Form Edit
            $('.id').val(id);
            $('.eleve_name').val(eleve_name);
            $('.eleve_firstname').val(eleve_firstname).trigger('change');
            $('.eleve_classe').val(eleve_classe).trigger('change');
            $('.eleve_m1').val(eleve_m1);
            $('.eleve_m2').val(eleve_m2);
            $('.eleve_m3').val(eleve_m3);
            $('.eleve_mg').val(eleve_mg);
            $('.note').val(note);
            // Call Modal Edit
            $('#note').modal('show');
        });
		
        
    });

</script>

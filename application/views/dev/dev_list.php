    <?php $this->load->view('theme/header_dev'); ?>
 
	<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label>
                    <input type="search" class="form-control search-field" id="search-field" name="search" style="width: 200px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" />
                    <input type="text" class="form-control search-field" id="autocomplete" name="searchposte" style="width: 150px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Poste" />

                    </div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
	<div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Autonomisation de poste</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">Liste d&#39;élève par        année <select name="annee" style="font-size: 12px;width: 145px;color: var(--gray);height: 25px;border-radius: 2px;">
                    <optgroup label="Annee">
                        <option value selected>Selec.Annee</option>
                        <option value="2014" >2014</option>
                        <option value="2015" >2015</option>
                        <option value="2016" >2016</option>
                        <option value="2017" >2017</option>
                        <option value="2018" >2018</option>
                        <option value="2019" >2019</option>
                        <option value="2020" >2020</option>
                        <option value="2021" >2021</option>
                        <option value="2022" >2022</option>
                    </optgroup>
                </select>
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

 <script>
 $(document).ready(function(){

// Initialize 
$( "#autocomplete" ).autocomplete({
   source: function( request, response ) {
     // Fetch datajQuery
     $.ajax({
       url: "<?php echo base_url('devac'); ?>",
       type: 'post',
       dataType: "json",
       data: {
         search: request.term
       },
       success: function( data ) {
         response( data );
       }
     });
   },
   select: function (event, ui) {
     // Set selection
     $('#search-field-poste').val(ui.item.label); // display the selected text
     //$('#userid').val(ui.item.value); // save selected id to input
     return false;
   }
 });

});
    </script>
  
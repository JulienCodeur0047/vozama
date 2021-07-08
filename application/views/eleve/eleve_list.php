<?php $this->load->view('theme/header_alph');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newstd1" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="<?php echo base_url('printeleve') ?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 21px;font-size: 15px;color: var(--gray);">Liste d&#39;élève<select style="margin-left: 26px;color: var(--gray);width: 130px;font-size: 13px;">
                    <optgroup label="Filtre par Poste">
                        <option value selected>Poste</option>
                    </optgroup>
                </select><select style="margin-left: 26px;color: var(--gray);width: 130px;font-size: 13px;">
                    <optgroup label="Filtre par secteur">
                        <option value selected>Secteur</option>
                    </optgroup>
                </select><label style="margin-left: 17px;font-size: 13px;">Nombre: </label><label style="margin-left: 3px;font-size: 13px;"><?php echo $this->db->count_all_results('eleve'); ?></label></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 143px;">Matricule</th>
                            <th style="width: 223px;">Secteur</th>
                            <th style="width: 223px;">Poste</th>
                            <th style="width: 188px;">Nom</th>
                            <th style="width: 232px;">Prénoms</th>
                            <th style="width: 205px;">Age</th>
                            <th style="width: 137px;">Classe</th>
                            <th style="width: 137px;">Sexe</th>
                            <th style="width: 204px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $eleve) { ?>
                        <tr>
                            <td><?php echo $eleve->eleve_matricule; ?></td>
                            <td><?php echo $eleve->eleve_secteur; ?></td>
                            <td><?php echo $eleve->eleve_poste; ?></td>
                            <td><?php echo $eleve->eleve_name; ?></td>
                            <td><?php echo $eleve->eleve_firstname; ?></td>
                            <td><?php echo $eleve->eleve_age; ?></td>
                            <td><?php echo $eleve->eleve_classe; ?></td>
                            <td><?php echo $eleve->eleve_sexe; ?></td>
                            <td style="font-size: 12px;">
                            
                            <a class="btn btn-light btn-edit" 
                            data-id="<?php echo $eleve->id; ?>"
                            data-eleve_secteur="<?php echo $eleve->eleve_secteur; ?>"
                            data-eleve_matricule="<?php echo $eleve->eleve_matricule; ?>"
                            data-eleve_secteur="<?php echo $eleve->eleve_secteur; ?>"
                            data-eleve_poste="<?php echo $eleve->eleve_poste; ?>"
                            data-eleve_name="<?php echo $eleve->eleve_name; ?>"
                            data-eleve_firstname="<?php echo $eleve->eleve_firstname; ?>"
                            data-eleve_age="<?php echo $eleve->eleve_age; ?>"
                            data-eleve_classe="<?php echo $eleve->eleve_classe; ?>"
                            data-eleve_date_entre="<?php echo $eleve->eleve_date_entre; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            data-id="<?php echo $eleve->eleve_matricule; ?>"
                            type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light" type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
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
<?php $this->load->view('eleve/modal_create_eleve');?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>


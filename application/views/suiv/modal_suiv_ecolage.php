<div role="dialog" id="ecol" tabindex="-1" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 40px;padding: 10px;">
                <h6 class="modal-title" style="font-size: 14px;">Ecolage</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
            <form class="form-inline mr-auto" target="_self">
            <input type="search" style="border-width: 0px;border-bottom-width: 1px;border-bottom-color: #8f8f8f;font-size: 12px;width: 236px;margin-left: 8px;margin-bottom: 8px;" name="search" placeholder="Recherche" />
            </form>
            
            <?php echo form_open('saveecolage')?>    
            <form style="height: auto;" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col" style="font-size: 10px;">
                                    <div class="table-responsive table-bordered">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th style="width: 25px;"></th>
                                                    <th>Nom et prénoms</th>
                                                    <th>Classe</th>
                                                    <th>poste</th>
                                                    <th>Secteur</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($eleve as $el) { ?>
                                                <tr>
                                                    <td><input type="radio" name="eleve_id" value="<?php echo $el->id;?>" /></td>
                                                    <td><?php echo $el->eleve_name;?> <?php echo $el->eleve_firstname;?></td>
                                                    <td><?php echo $el->eleve_classe;?></td>
                                                    <td><?php echo $el->eleve_poste;?></td>
                                                    <td><?php echo $el->eleve_secteur;?></td>
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
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col">
                                    <select class="form-control eco_type" name="eco_type" style="font-size: 12px;">
                                        <optgroup label="This is a group">
                                            <option value selected>Selec. Type</option>
                                            <option value="Espèces">Espèces</option>
                                            <option value="Autre">Autre</option>
                                        </optgroup>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col">
                        <input type="text" class="form-control eco_libelle_type" name="eco_libelle_type" style="font-size: 12px;margin-bottom: 5px;" placeholder="Designation" />
                        <input type="number" class="form-control eco_montant" name="eco_montant" style="font-size: 12px;" placeholder="Montant si en espèces" min="1000" max="2000000" step="500" />
                    </div>
                        <div class="col">
                            <select class="form-control eco_mois" style="font-size: 12px;" name="eco_mois">
                                <optgroup label="This is a group">
                                    <option value selected>Selec. mois</option>
                                    <option value="Janvier">Janvier</option>
                                    <option value="Fevrier">Fevrier</option>
                                    <option value="Mars">Mars</option>
                                    <option value="Avril">Avril</option>
                                    <option value="Mai">Mai</option>
                                    <option value="Juin">Juin</option>
                                    <option value="Juillet">Juillet</option>
                                    <option value="Aout">Aout</option>
                                    <option value="Septembre">Septembre</option>
                                    <option value="Octobre">Octobre</option>
                                    <option value="Novembre">Novembre</option>
                                    <option value>Decembre</option>
                                </optgroup>
                            </select></div>
                        <div class="col">
                            <textarea class="form-control eco_observation" name="eco_observation" placeholder="Observation" style="font-size: 12px;padding-top: 0px;padding-right: 0px;padding-left: 4px;padding-bottom: 0px;height: 68px;"></textarea></div>
                    </div>
                
            </div>
            <div class="modal-footer" style="height: 56px;padding: 8px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
            </form>
            <?php echo form_close();?>
        </div>
    </div>
</div>
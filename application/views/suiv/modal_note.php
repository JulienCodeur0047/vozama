<div role="dialog" id="note" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Note Élève</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('savenote')?>
            <form method="POST">
                <div class="row" style="height: auto;width: auto;">
                    <div class="col">
                        <input type="hidden" name="eleve_id" class="eleve_id"/>
						<input type="hidden" name="poste_id" class="poste_id"/>
						<input type="hidden" name="note_poste" class="eleve_poste"/>
                        <input type="text" class="note_eleve" name="note_eleve" style="font-size: 12px;width: 193px;border-width: 0px;" readonly /><label style="font-size: 12px;margin-left: 20px;">Classe: </label>
                        <input type="text" class="note_eleve_classe" name="note_eleve_classe" style="font-size: 12px;width: 57px;border-width: 0px;" readonly />
                        </div>
                </div>
                <div class="row">
                    <div class="col" style="padding-right: 0px;padding-left: 0px;">
                        <div class="table-responsive table-bordered" style="font-size: 11px;">
                            <table class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 85px;">Note</th>
                                        <th>Vakiteny</th>
                                        <th>Sorakaliana</th>
                                        <th>Kajy</th>
                                        <th>M4</th>
                                        <th>M5</th>
                                        <th>M6</th>
                                        <th>M7</th>
                                        <th>M8</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-style: normal;font-weight: bold;padding-right: 2.8px;">Trimestre I</td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat1" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat2" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat3" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat4" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat5" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat6" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0.5" name="note_mat7" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="00.5" name="note_mat8" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row" style="font-size: 10px;">
                    <div class="col">
                        <div class="table-responsive table-borderless">
                        <label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Annee : *</label><input type="number" style="width: 50px;font-size: 12px;" min="2000" max="2100" name="note_trimestre_annee" step="1" placeholder="2021"/>
                        <div class="form-check" style="font-size: 13px;">
                        
                        <input type="radio" class="form-check-input" id="formCheck-2" style="width: 12px;height: 12px;" value="1" name="note_trimestre" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Trimestre I</label> <br/>
                        <input type="radio" class="form-check-input" id="formCheck-2" style="width: 12px;height: 12px;" value="2" name="note_trimestre" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Trimestre II</label> <br/>
                        <input type="radio" class="form-check-input" id="formCheck-2" style="width: 12px;height: 12px;" value="3" name="note_trimestre" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Trimestre III</label> |  &nbsp;&nbsp; &nbsp;   =>
                        <label style="font-size: 12px;">Moyenne de passage</label> <input type="number" style="width: 50px;font-size: 12px;" min="5" max="15" name="note_mp" step="0.5" placeholder=""/>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
        </form>
    <?php echo form_close();?>    
    </div>
    </div>
</div>

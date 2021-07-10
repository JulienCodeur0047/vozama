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
                    <div class="col"><input type="text" style="font-size: 12px;width: 193px;border-width: 0px;" readonly /><label style="font-size: 12px;margin-left: 20px;">Classe: </label><input type="text" style="font-size: 12px;width: 57px;border-width: 0px;" readonly /><label style="font-size: 12px;margin-left: 20px;">Année scolaire: </label><input type="text" style="font-size: 12px;width: 57px;border-width: 0px;" readonly /></div>
                </div>
                <div class="row">
                    <div class="col" style="padding-right: 0px;padding-left: 0px;">
                        <div class="table-responsive table-bordered" style="font-size: 11px;">
                            <table class="table table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 85px;"></th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                        <th>M1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-style: normal;font-weight: bold;padding-right: 2.8px;">Trimestre I</td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M1" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M2" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M3" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M4" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M5" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M6" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M7" /></td>
                                        <td style="padding: 0px;text-align: center;width: 100px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="1M8" /></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">Trimestre II</td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M1" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M2" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M3" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M4" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M5" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M6" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M7" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #ffffff;border-width: 0px;height: 24px;" max="20" step="0,5" name="2M8" /></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">Trimestre III</td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M1" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M2" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M3" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M4" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M5" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M6" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M7" /></td>
                                        <td class="text-center" style="padding: 0px;"><input type="number" style="width: 76px;background: #dddddd;border-width: 0px;height: 24px;" max="20" step="0,5" name="3M8" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row" style="font-size: 10px;">
                    <div class="col">
                        <div class="table-responsive table-borderless">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0px;width: 10px;"><strong>Moyenne Trimestre I</strong><br /></td>
                                        <td style="padding: 0px;width: 126px;"><input type="number" style="width: 59px;border-width: 0px;" max="20" step="0,5" readonly placeholder="0,0" name="1MO" /><br /></td>
                                        <td style="padding: 0px;width: 126px;">Moyenne de passage: <input type="number" style="width: 59px;border-width: 0px;" max="20" step="0,5" placeholder="0,0" /><br /></td>
                                        <td style="padding: 0px;width: 126px;text-align: right;"><button class="btn btn-dark" type="button" style="border-width: 0px;font-size: 11px;padding-top: 0px;padding-right: 10px;padding-bottom: 0px;width: 93.625px;">Calculer</button><br /></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px;"><strong>Moyenne Trimestre II</strong><br /></td>
                                        <td style="padding: 0px;"><input type="number" style="width: 59px;border-width: 0px;" max="20" step="0,5" readonly placeholder="0,0" name="2MO" /><br /></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px;"><strong>Moyenne Trimestre III</strong><br /></td>
                                        <td style="padding: 0px;"><input type="number" style="width: 59px;border-width: 0px;" max="20" step="0,5" readonly placeholder="0,0" name="3MO" /><br /></td>
                                        <td style="padding: 0px;"><input type="text" style="border-width: 0px;font-style: italic;" placeholder="Resultat" /><br /></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px;"><strong>Moyenne général</strong><br /></td>
                                        <td style="padding: 0px;"><input type="number" style="width: 59px;border-width: 0px;" max="20" step="0,5" readonly placeholder="0,0" name="MG" /><br /></td>
                                        <td style="padding: 0px;"><br /></td>
                                    </tr>
                                    <input type="text" class="note"/>
                                </tbody>
                            </table>
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
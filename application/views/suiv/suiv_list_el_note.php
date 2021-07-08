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
            <div style="font-size: 12px;">
                <ul role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-1">1er trimestre</a></li>
                    <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-2">2eme trimestre</a></li>
                    <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link active" href="#tab-3">3eme trimestre</a></li>
                    <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-4">moyenne generale</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="tab-1">
                        <p>Content for tab 1.</p>
                        <div class="table-responsive" style="width: auto;font-size: 12px;">
                            <table class="table">
                                <thead style="width: 1144px;height: 20px;">
                                    <tr style="color: var(--gray);">
                                        <th style="width: 265px;height: 38px;">Nom-Prénoms</th>
                                        <th style="width: 30px;height: 44px;text-align: center;"><input type="checkbox" />   M-1</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><br /><input type="checkbox" />   M-2</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-3</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-4</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-5</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-6</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-7</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-8</th>
                                        <th style="width: 26px;height: 44px;text-align: center;">Moyenne</th>
                                        <th style="width: 13px;height: 44px;text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 37px;">Cell 2</td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--teal);border-width: 0px;border-radius: 7px;">ok</button></td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-2">
                        <div class="table-responsive" style="width: auto;font-size: 12px;">
                            <table class="table">
                                <thead style="width: 1144px;height: 20px;">
                                    <tr style="color: var(--gray);">
                                        <th style="width: 265px;height: 38px;">Nom-Prénoms</th>
                                        <th style="width: 30px;height: 44px;text-align: center;"><input type="checkbox" />   M-1</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><br /><input type="checkbox" />   M-2</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-3</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-4</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-5</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-6</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-7</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-8</th>
                                        <th style="width: 26px;height: 44px;text-align: center;">Moyenne</th>
                                        <th style="width: 13px;height: 44px;text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 37px;">Cell 2</td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--teal);border-width: 0px;border-radius: 7px;">ok</button></td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="tab-3">
                        <p>Content for tab 3.</p>
                        <div class="table-responsive" style="width: auto;font-size: 12px;">
                            <table class="table">
                                <thead style="width: 1144px;height: 20px;">
                                    <tr style="color: var(--gray);">
                                        <th style="width: 265px;height: 38px;">Nom-Prénoms</th>
                                        <th style="width: 30px;height: 44px;text-align: center;"><input type="checkbox" />   M-1</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><br /><input type="checkbox" />   M-2</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-3</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-4</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-5</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-6</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-7</th>
                                        <th style="width: 50px;height: 44px;text-align: center;"><input type="checkbox" />   M-8</th>
                                        <th style="width: 26px;height: 44px;text-align: center;">Moyenne</th>
                                        <th style="width: 13px;height: 44px;text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 37px;">Cell 2</td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><input type="text" style="width: 47px;border-width: 0px;" placeholder="0" inputmode="numeric" /></td>
                                        <td style="width: 50px;padding: 0px;text-align: center;"><button class="btn btn-primary" type="button" style="font-size: 10px;background: var(--teal);border-width: 0px;border-radius: 7px;">ok</button></td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-4">
                        <p>Tab content.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>


<?php $this->load->view('theme/header_suivi'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Parent</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">Liste de parent</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 10px;"><input type="checkbox" /></th>
                            <th style="width: 153px;">Mr / Mme</th>
                            <th style="width: 105px;height: 44px;">Profession</th>
                            <th style="width: 46px;">Réunion</th>
                            <th style="width: 46px;">Site</th>
                            <th style="width: 46px;">Poste</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div role="tablist" id="accordion-1">
                <div class="card">
                    <div role="tab" class="card-header">
                        <h6 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Enfant</a></h6>
                    </div>
                    <div role="tabpanel" data-parent="#accordion-1" class="collapse show item-1" style="font-size: 12px;">
    <div class="card-body">
        <div class="table-responsive" style="width: auto;font-size: 12px;">
            <table class="table">
                <thead>
                    <tr style="color: var(--gray);">
                        <th style="width: 10px;"><input type="checkbox" /></th>
                        <th style="width: 12px;">Matricule</th>
                        <th style="width: 153px;">Nom</th>
                        <th style="width: 105px;height: 44px;">Prenoms</th>
                        <th style="width: 105px;height: 44px;">Moyen General</th>
                        <th style="width: 46px;">Réussite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Cell 2</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td style="width: 50px;">Cell 2</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

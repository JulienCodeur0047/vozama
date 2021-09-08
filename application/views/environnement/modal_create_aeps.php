<div role="dialog" tabindex="-1" id="newaep" class="modal fade show">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 45px;font-size: 13px;padding: 11px;">
                <h4 class="modal-title" style="font-size: 15px;">Adduction d&#39;eau potable</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('saveaep')?> 
			<form method="POST">
			<input type="hidden" name="id" class="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="width: 303px;height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Type</label>
					<input type="text" class="aep_type" style="width: 217px;font-size: 13px;height: 25px;margin-top: 0px;" name="aep_type" />
					<label style="margin-bottom: -4px;font-size: 11px;">Bailleur</label>
					<input type="text" class="aep_bailleur" style="width: 217px;font-size: 13px;height: 25px;margin-top: 0px;" name="aep_bailleur" />
					<label style="margin-bottom: -4px;font-size: 11px;">Commune</label>
					<select class="commune_id" name="commune_id" style="font-size: 12px;width: 217px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Commune">
                                <option value selected>Selec.Commune</option>
								<?php foreach ($com as $com) {?>
									<option value="<?php echo $com->id;?>"><?php echo $com->commune_name;?></option>
								<?php };?>
                            </optgroup>
                        </select>
                        <div class="row">
                            <div class="col-xl-5">
								<label style="margin-bottom: -4px;font-size: 11px;width: 95.5469px;">Année de service</label>
								<input type="number" class="aep_annee_srv" style="width: 82px;font-size: 13px;height: 25px;" name="aep_annee_srv"/>
                                </div>
                            <div class="col">
								<label style="margin-bottom: -4px;font-size: 11px;width: 95.5469px;">Village principale</label>
								<input type="text" class="aep_village_pal" style="width: 119px;font-size: 13px;height: 25px;margin-top: 0px;" name="aep_village_pal" /></div>
                        </div>
                    </div>
                    <div class="col-xl-2" style="height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr foyer</label>
					<input type="number" class="aep_nbr_foyer" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_foyer" />
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr personnes</label>
					<input type="number" class="aep_nbr_pers" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_pers" />
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr borne fontaine</label>
					<input type="number" class="aep_nbr_born_fontaine" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_born_fontaine" /></div>
                    <div class="col-xl-2" style="height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr BP</label>
					<input type="number" class="aep_nbr_bp" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_bp" />
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr Lavoir-Douche</label>
					<input type="number" class="aep_nbr_lavoir_douche" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_lavoir_douche" />
					<label style="margin-bottom: -4px;font-size: 11px;">Nbr Latrine</label>
					<input type="number" class="aep_nbr_latrine" style="width: 103px;height: 25px;font-size: 15px;" name="aep_nbr_latrine" /></div>
                    <div class="col" style="height: auto;">
                        <div class="row">
                            <div class="col-xl-6" style="padding-right: 3px;padding-left: 3px;">
							<label style="margin-bottom: -4px;font-size: 11px;">Cotisation mensuel/foyer</label>
							<input type="number" class="aep_cot_mens_fyr" style="width: 114px;height: 25px;font-size: 15px;padding-left: 0px;margin-left: 5px;margin-top: 5px;" name="aep_cot_mens_fyr" /></div>
                            <div class="col-xl-6" style="padding-right: 3px;padding-left: 4px;">
							<label style="margin-bottom: -4px;font-size: 11px;">Date de dernier suivi </label>
							<input class="aep_date_last_suiv" type="date" style="width: 114px;height: 25px;font-size: 12px;padding-left: 0px;margin-left: 5px;margin-top: 5px;" name="aep_date_last_suiv" /></div>
                        </div>
						<label style="margin-bottom: -4px;font-size: 11px;">Responsable de suivi</label>
						<input type="text" class="aep_responsable_suiv" style="width: 217px;font-size: 13px;height: 25px;margin-top: 0px;" name="aep_responsable_suiv" />
                        <div class="row">
                            <div class="col-xl-6" style="padding-right: 3px;padding-left: 3px;">
							<label style="margin-bottom: -4px;font-size: 11px;">Etat de fonctionnement</label>
							<input type="text" class="aep_etat_fonct" style="width: 114px;font-size: 13px;height: 25px;margin-top: 5px;padding-left: 0px;margin-left: 5px;" name="aep_etat_fonct" />
							<label style="margin-bottom: -4px;font-size: 11px;">Cons. moyenne (L/Hab/jr)</label>
							<input type="number" class="aep_cons_my_lhjr" style="width: 114px;font-size: 13px;height: 25px;margin-top: 5px;padding-left: 0px;margin-left: 5px;" name="aep_cons_my_lhjr" /></div>
                            <div class="col-xl-6" style="padding-right: 3px;padding-left: 4px;">
							<label style="margin-bottom: -4px;font-size: 11px;">Etat entretient</label>
							<input type="text" class="aep_etat_entrt" style="width: 114px;font-size: 13px;height: 25px;margin-top: 5px;padding-left: 0px;margin-left: 5px;" name="aep_etat_entrt" />
							<label style="margin-bottom: -4px;font-size: 11px;">Etat cotisation</label>
							<input type="text" class="aep_etat_cot" style="width: 114px;font-size: 13px;height: 25px;margin-top: 5px;padding-left: 0px;margin-left: 5px;" name="aep_etat_cot" /></div>
                        </div>
						<label style="margin-bottom: -4px;font-size: 11px;">Remarque</label>
						<input type="text" class="aep_note" style="width: 216px;font-size: 13px;height: 68px;" name="aep_note" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 53px;padding: 5px;">
			<button class="btn btn-primary" type="submit" style="font-size: 14px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

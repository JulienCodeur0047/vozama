<div role="dialog" id="newres" tabindex="-1" class="modal fade show" style="background: rgba(255,255,255,0);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 41px;padding: 10px;width: 497px;">
                <h6 class="modal-title" style="font-size: 14px;">Communication</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;padding: 6px;">
			<?php echo form_open('comsaveres');?>
                <form style="height: auto;" method="POST">
				<input type="hidden" id="id" class="id" name="id"/>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Titre</label>
								<input type="text" class="form-control socn_titre" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="Titre" name="socn_titre" />
								<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Plateforme</label>
								<select class="form-control socn_platform" style="width: 238px;height: 30px;font-size: 12px;color: var(--gray);" name="socn_platform">
                                        <optgroup label="Unite">
                                            <option value selected>Selec.Plateforme</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Youtube">Youtube</option>
                                            <option value="Google+">Google+</option>
                                            <option value="Site Vozama">Site Vozama</option>
                                            <option value="Flicker">Flicker</option>
                                            <option value="Tripadvisor">Tripadvisor</option>
                                            <option value="Twitter">Twitter</option>
                                            <option value="LinkedIn">LinkedIn</option>
                                        </optgroup>
                                    </select>
									<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Date de publication</label>
									<input class="form-control socn_date_pub" type="date" style="width: 238px;font-size: 12px;" name="socn_date_pub" />
									<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Heure de publication</label>
									<input class="form-control socn_hr_pub" type="time" style="width: 238px;font-size: 12px;" name="socn_hr_pub" />
									<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Ref vidéo</label>
									<input type="text" class="form-control socn_vd_ref_pub" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="abc.mp4 ; video ; ..." name="socn_vd_ref_pub" inputmode="numeric" />
									<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Ref photo</label>
									<input type="text" class="form-control socn_ph_ref_pub" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="abc.png ; photo ; ..." name="socn_ph_ref_pub" inputmode="numeric" /></div>
                                <div class="col"><label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nbr de vidéo</label>
								<input type="text" class="form-control socn_vd_pub_nbr" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="socn_vd_pub_nbr" inputmode="numeric" />
								<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Nbr de photo</label>
								<input type="text" class="form-control socn_ph_pub_nbr" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="123" name="socn_ph_pub_nbr" inputmode="numeric" />
								<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Url</label>
								<input type="text" class="form-control socn_lien_web" style="font-size: 12px;margin-left: -1px;margin-right: 0px;width: 239px;height: 30px;padding-top: 4px;margin-bottom: 3px;" placeholder="url de publication" name="socn_lien_web" inputmode="numeric" />
								<label style="font-size: 10px;color: var(--gray);height: 10px;margin-bottom: 0px;">Description / Article / Texte</label>
								<textarea class="form-control form-control-lg socn_article" style="font-size: 11px;height: 140px;padding: 3px 16px;padding-left: 7px;padding-right: 7px;" name="socn_article"></textarea></div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer" style="height: 51px;padding: 5px;">
			<button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulé</button>
			<button class="btn btn-primary" type="submit" style="font-size: 12px;">Enregistré</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

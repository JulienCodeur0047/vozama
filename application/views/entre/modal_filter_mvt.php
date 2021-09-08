<div role="dialog" tabindex="-1" class="modal fade show" id="filtermvt" style="font-size: 12px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 7px;">
                <h6 class="modal-title" style="font-size: 14px;">Filtre</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
			<form method="POST" target="_self">
			<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Etat</label>
						<select class="form-control" style="border-radius: 0;font-size: 12px;padding: 0px 0px;height: 25px;" name="mvt_etat">
                                <optgroup label="Select. Etat">
                                    <option value selected>Select.Etat</option>
                                    <option value="Entrée">Entrée</option>
									<option value="Sortie">Sortie</option>
                                </optgroup>
                        </select>
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date début</label>
						<input class="form-control" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="dated" />
						<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date fin</label>
						<input class="form-control" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="datef" />
			</div>
            <div class="modal-footer" style="padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 12px;height: 26px;padding-top: 3px;">OK</button></div>
		</form>
		</div>
    </div>
</div>

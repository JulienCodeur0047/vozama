<?php echo form_open('enoutstk')?>
			<form method="POST"> 
<div role="dialog" tabindex="-1" class="modal fade show" id="out" style="background: rgba(255,255,255,0);height: 674px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 39px;padding: 6px;font-size: 11px;">
                <h6 class="modal-title" style="font-size: 14px;">Sortie de Stock</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="padding: 6px;height: 295px;">
			
			<input type="hidden" name="id" class="id">
                <div class="row" style="width: 287px;margin-right: 0px;margin-left: 0;">
                    <div class="col">
                        <h6 style="font-size: 13px;"></h6>
                        <h6 style="font-size: 12px;width: auto;">Désignation:<input type="text" class="stk_designation" style="padding-left: 10px;margin-left: 15px;border-style: none;border-bottom-style: none;width: 161px;" readonly /></h6>
                        <h6 style="font-size: 12px;width: auto;">Quantité reste:<input type="text" class="stk_qte" style="padding-left: 10px;margin-left: 4px;border-style: none;border-bottom-style: none;width: 161px;" readonly /></h6>
                        <h6 style="font-size: 12px;width: auto;">Fournisseur:<input type="text" class="stk_fournisseur" style="padding-left: 10px;margin-left: 18px;border-style: none;border-bottom-style: none;width: 161px;" readonly /></h6>
                        <h6 style="font-size: 12px;width: auto;">Type:<input type="text" class="stk_type" style="padding-left: 10px;margin-left: 56px;border-style: none;border-bottom-style: none;width: 161px;" readonly /></h6>
                        <h6 style="font-size: 12px;width: auto;">Date de stock:<input type="text" class="stk_date" style="width: 161px;padding-left: 10px;margin-left: 7px;border-style: none;border-bottom-style: none;" readonly /></h6>
                    </div>
                </div>
                
                    <div class="form-row">
                        <div class="col">
							<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Date de sortie</label>
							<input class="form-control" type="date" style="height: 25px;padding: 0px 0px;font-size: 12px;padding-left: 2px;padding-right: 1px;border-radius: 0;" name="mvt_date" />
							<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Quantité à sortir</label>
							<input type="number" class="form-control" style="height: 25px;padding: 0px 0px;font-size: 12px;border-radius: 0px;" name="mvt_qte" />
							<label style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">Déstination</label>
							<input type="text" class="form-control" style="font-size: 12px;border-radius: 0px;padding: 0px 0px;height: 25px;" name="mvt_destination" /></div>
                    </div>
                
            </div>
            <div class="modal-footer" style="height: 45px;padding: 8px;">
			<button class="btn btn-primary" type="submit" style="font-size: 12px;height: 25px;margin-top: 3px;padding-top: 2px;">Sortie</button></div>
		
		</div>
    </div>
</div>
</form>
<?php echo form_close()?>

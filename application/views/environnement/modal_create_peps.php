<div role="dialog" tabindex="-1" id="newpep" class="modal fade show" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 46px;font-size: 13px;">
                <h4 class="modal-title" style="font-size: 15px;">Pépinière</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('savepep');?>
			<form action="POST">
			<input type="hidden" class="id" name="id" />
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="width: 303px;height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Date de mise à jour<br /></label>
					<input type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="pep_date_maj" class="pep_date_maj" />
					<label style="margin-bottom: -4px;font-size: 11px;">Espèce</label>
					<input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_espece" class="pep_espece"/>
					<label style="margin-bottom: -4px;font-size: 11px;">Fournisseur</label>
					<input type="text" class="pep_fournisseur" style="width: 216px;font-size: 13px;height: 25px;" name="pep_fournisseur" />
					<label style="margin-bottom: -4px;font-size: 11px;">Date d&#39;achat de grain</label>
					<input type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="pep_date_acht_seed" class="pep_date_acht_seed" />
					<label style="margin-bottom: -4px;font-size: 11px;">Quantité  des graines acheté </label>
					<input type="number" style="width: 216px;font-size: 13px;height: 25px;" name="pep_qte_seed_acht" class="pep_qte_seed_acht"  />
					<label style="margin-bottom: -4px;font-size: 11px;">Date de semis</label>
					<input class="pep_date_semis" type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="pep_date_semis"/>
					<label style="margin-bottom: -4px;font-size: 11px;">Date de mise en pot</label>
					<input class="pep_date_menpot" type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="pep_date_menpot" /></div>
                    <div class="col" style="height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Nombre de mise en pot</label>
					<input type="number" style="width: 216px;font-size: 13px;height: 25px;" name="pep_nbr_menpot" class="pep_nbr_menpot"   />
					<label style="margin-bottom: -4px;font-size: 11px;">Entrée Ext</label>
					<input type="text" style="width: 216px;font-size: 13px;height: 25px;" name="pep_entre_ext" class="pep_entre_ext" />
                        <div class="row">
                            <div class="col">
								<label style="margin-bottom: -4px;font-size: 11px;">Morts</label>
								<input type="number" style="width: 83px;font-size: 13px;height: 25px;" name="pep_morts" class="pep_morts"   />
								<label style="margin-bottom: -4px;font-size: 11px;">Livrés ou distribués</label>
								<input type="number" style="width: 83px;font-size: 13px;height: 25px;" name="pep_shared" class="pep_shared"   /></div>
                            <div class="col">
								<label style="margin-bottom: -4px;font-size: 11px;">Vendus</label>
								<input type="number" class="pep_vendue" style="width: 83px;font-size: 13px;height: 25px;" name="pep_vendue" class="pep_vendue"   />
								<label style="margin-bottom: -4px;font-size: 11px;">Prix unitaire</label>
								<input type="number" style="width: 83px;font-size: 13px;height: 25px;" name="pep_pu" class="pep_pu"   /></div>
                        </div>
						<label style="margin-bottom: -4px;font-size: 11px;">Montant total</label>
						<input type="number" style="width: 216px;font-size: 13px;height: 25px;" name="pep_mont_total" class="pep_mont_total"   />
						<label style="margin-bottom: -4px;font-size: 11px;">Stock réel</label>
						<input type="number" class="pep_stock_reel" style="width: 216px;font-size: 13px;height: 25px;" name="pep_stock_reel" class="pep_stock_reel"   /><label style="margin-bottom: -4px;font-size: 11px;">Remarque / notes</label><input type="text" class="pep_note" style="width: 216px;font-size: 13px;height: 29px;" name="pep_note" />
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 53px;padding: 5px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>

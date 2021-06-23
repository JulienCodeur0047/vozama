<div role="dialog" id="filterprintagr" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Filtre avant impression</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
            <?php echo form_open('printagr'); ?>
            <form method="POST">
            <input type="search" name="search" style="font-size: 12px;border-width: 0px;border-bottom-width: 1px;border-radius: 2;width: 250px;" placeholder="Recherche" />
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Imprimer</button></div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
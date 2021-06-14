
<div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Liste de postes</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th >Numéro</th>
                            <th >Nom</th>
                            <th >Moniteur</th>
                            <th >Région</th>
                            <th >Site</th>
                            <th >Ouverture</th>
                            <th >Secteur</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $poste) { ?> 
                        <tr>
                            <td><?php echo $poste->poste_num; ?></td>
                            <td><?php echo $poste->poste_name; ?></td>
                            <td><?php echo $poste->poste_moniteur_name; ?></td>
                            <td><?php echo $poste->poste_region; ?></td>
                            <td><?php echo $poste->poste_site; ?></td>
                            <td><?php echo $poste->poste_overture; ?></td>
                            <td><?php echo $poste->poste_secteur; ?></td>
                            </tr>
					
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

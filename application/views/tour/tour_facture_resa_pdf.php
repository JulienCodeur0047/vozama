<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:70.85pt 70.85pt 70.85pt 70.85pt;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=FR style='word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%;
color:#404040'>FACTURE        N°&nbsp;: FPF0<?php echo $numfac."-".date('ymd');?>                             </span></b></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:10.0pt;
color:#404040'>VOZAMA</span></b></p>

<p class=MsoNormal style='line-height:normal'><i><span style='font-size:10.0pt;
color:#404040'>Adresse</span></i><span style='font-size:10.0pt;color:#404040'> xxxxxxxxx</span></p>

<p class=MsoNormal style='line-height:normal'><i><span style='font-size:10.0pt;
color:#404040'>Téléphone</span></i><span style='font-size:10.0pt;color:#404040'>
xxxxxxxxxx</span></p>

<p class=MsoNormal style='line-height:normal'><i><span style='font-size:10.0pt;
color:#404040'>e-mail</span></i><span style='font-size:10.0pt;color:#404040'>
xxxxxxxxxx</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:10.0pt;
color:#404040'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=302 valign=top style='width:226.55pt;border:dashed windowtext 1.0pt;
  border-right:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Facture à&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Client&nbsp;: <?php echo $resa->res_cli_nom;?> </span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Tél&nbsp;: <?php echo $resa->res_cli_tel;?></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Email&nbsp;: <?php echo $resa->res_cli_email;?></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Nombre&nbsp;: <?php echo $resa->res_cli_nbr;?> </span></p>
  </td>
  <td width=302 valign=top style='width:226.55pt;border:dashed windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Date de réservation: <?php echo $resa->res_date;?> </span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Réservation n°<?php echo $resa->id;?></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Fait le <?php echo date('Y-m-d'); ?></span></p>
  
  </td>
 </tr>
</table>
<br>
<p class=MsoNormal style='line-height:normal'><span style='font-size:8.0pt;
color:#404040'>(devis: Ariary)</span></p>

<table class=MsoTable15Grid1Light border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-bottom:solid #666666 1.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='color:#404040'>Qté</span></b></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:solid #999999 1.0pt;
  border-left:none;border-bottom:solid #666666 1.5pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='color:#404040'>Désignation</span></b></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:solid #999999 1.0pt;
  border-left:none;border-bottom:solid #666666 1.5pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='color:#404040'>P.U</span></b></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:solid #999999 1.0pt;
  border-left:none;border-bottom:solid #666666 1.5pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='color:#404040'>Montant</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='font-size:10.0pt;color:#404040'><?php echo $resa->res_nbr_jr;?> jr</span></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Chambre n°<?php echo $resa->res_chr_num." (".$resa->res_chr_type.")"; ?></span></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_chr_prix;?></span></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_chr_prix_total;?></span></p>
  </td>
 </tr>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='font-size:10.0pt;color:#404040'>n/a</span></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Visite de site</span></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_visitesite_prix;?></span></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_visitesite_prix;?></span></p>
  </td>
 </tr>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='font-size:10.0pt;color:#404040'><?php echo $resa->res_repas_nbr;?></span></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Repas</span></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_repas_prix;?></span></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_repas_prix_total;?></span></p>
  </td>
 </tr>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='font-size:10.0pt;color:#404040'><?php echo $resa->res_ptid_nbr;?></span></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Petit déjeuner</span></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_ptid_prix;?></span></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_ptid_prix_total;?></span></p>
  </td>
 </tr>
 <tr>
  <td width=66 valign=top style='width:49.4pt;border:solid #999999 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='font-size:10.0pt;color:#404040'><?php echo $resa->res_lit_sup_nbr;?></span></p>
  </td>
  <td width=236 valign=top style='width:177.1pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:10.0pt;color:#404040'>Lit supplémentaire</span></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_lit_sup_prix;?></span></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border-top:none;border-left:
  none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;text-align:right;'><span
  style='font-size:10.0pt;color:#404040'><?php echo $resa->res_lit_sup_prix_total;?></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:normal'><span style='font-size:10.0pt;
color:#404040'>&nbsp;</span></p>

<p class=MsoNormal align=right style='text-align:right;line-height:normal;margin-right: 43px;'><b><span
style='color:#404040'>TOTAL&nbsp;:&nbsp;Ar &nbsp;<?php echo $resa->res_montant;?></span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='color:#404040'>Signature</span></p>

</div>

</body>

</html>

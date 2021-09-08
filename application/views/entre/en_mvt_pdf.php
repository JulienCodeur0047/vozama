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
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
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

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%'>Liste de mouvement
(entrée/sortie)</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=96 valign=top style='width:71.65pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'>Etat</span></b></p>
  </td>
  <td width=74 valign=top style='width:55.5pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'>Date</span></b></p>
  </td>
  <td width=75 valign=top style='width:56.4pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'>Fournisseur</span></b></p>
  </td>
  <td width=70 valign=top style='width:52.65pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'>Destination</span></b></p>
  </td>
  <td width=76 valign=top style='width:56.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'>Qté</span></b></p>
  </td>
  <td width=94 valign=top style='width:70.65pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'>Unité</span></b></p>
  </td>
  <td width=60 valign=top style='width:44.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'>Reste</span></b></p>
  </td>
  <td width=60 valign=top style='width:44.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'>Désignation</span></b></p>
  </td>
 </tr>
 <?php foreach ($mvt as $mvt) {?>
 <tr>
  <td width=96 valign=top style='width:71.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'><?php echo $mvt->mvt_etat?></span></p>
  </td>
  <td width=74 valign=top style='width:55.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'><?php echo $mvt->mvt_date?></span></p>
  </td>
  <td width=75 valign=top style='width:56.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'><?php echo $mvt->mvt_fournisseur?></span></p>
  </td>
  <td width=70 valign=top style='width:52.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529;
  background:white'><?php echo $mvt->mvt_destination?></span></p>
  </td>
  <td width=76 valign=top style='width:56.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'><?php echo $mvt->mvt_qte?></span></p>
  </td>
  <td width=94 valign=top style='width:70.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'><?php echo $mvt->mvt_unit?></span></p>
  </td>
  <td width=60 valign=top style='width:44.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'><?php echo $mvt->mvt_reste?></span></p>
  </td>
  <td width=60 valign=top style='width:44.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-size:9.0pt;font-family:"Segoe UI",sans-serif;color:#212529'><?php echo $mvt->mvt_stk_designation?></span></p>
  </td>
 </tr>
 <?php }?>
</table>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>

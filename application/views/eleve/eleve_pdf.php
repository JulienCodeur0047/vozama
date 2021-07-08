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
	font-family:"Calibri","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
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

<body lang=FR>

<div class=WordSection1>

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%'>Liste d'élève </span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=86 valign=top style='width:64.7pt;border:solid windowtext 1.0pt;
  background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Matricule</b></p>
  </td>
  <td width=86 valign=top style='width:64.7pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Poste</b></p>
  </td>
  <td width=86 valign=top style='width:64.7pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Nom</b></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Prénoms</b></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Age</b></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Classe</b></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border:solid windowtext 1.0pt;
  border-left:none;background:#F2F2F2;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Sexe</b></p>
  </td>
 </tr>
 <?php foreach ($data as $eleve) { ?>
<tr>
  <td width=86 valign=top style='width:64.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_matricule; ?></p>
  </td>
  <td width=86 valign=top style='width:64.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_poste; ?></p>
  </td>
  <td width=86 valign=top style='width:64.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_name; ?></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_firstname; ?></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_age; ?></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_classe; ?></p>
  </td>
  <td width=86 valign=top style='width:64.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $eleve->eleve_sexe; ?></p>
  </td>
 </tr>
 <?php } ?>
</table>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>

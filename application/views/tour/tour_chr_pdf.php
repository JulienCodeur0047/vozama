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

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%'>Liste de
chambre au VOZAMA <br>
<br>
</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=605
 style='width:453.65pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=75 valign=top style='width:56.45pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'>Id</span></b></p>
  </td>
  <td width=208 valign=top style='width:155.95pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'>Numéro</span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'>Type</span></b></p>
  </td>
  <td width=133 valign=top style='width:99.5pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'>Prix journalier</span></b></p>
  </td>
 </tr>
 <?php foreach ($data as $chmbre) {?>
 <tr>
  <td width=75 valign=top style='width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'><?php echo $chmbre->id;?></span></b></p>
  </td>
  <td width=208 valign=top style='width:155.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'><?php echo $chmbre->chr_numero;?></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'><?php echo $chmbre->chr_type;?></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'><?php echo $chmbre->chr_prix_nuite;?></span></b></p>
  </td>
 </tr>
 <?php }?>
</table>

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%'>&nbsp;</span></b></p>

</div>

</body>

</html>

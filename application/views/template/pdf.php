<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"   "http://www.w3.org/TR/REC-html40/strict.dtd">
<html lang=en>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body {
	margin: 20pt 22pt 24pt 22pt;
	padding-top: 0px;
	font-family: 'Helvetica';
	font-size: 9px;
}

table {
	width: 100%;
	margin-bottom: 5px;
}

thead {
	background-color: #cccccc;
}

tbody {
	background-color: #ffffff;
}

th,td {
	padding: 3pt;
}

h3 {
	margin-bottom: 0px;
	padding-bottom: 5px;
}

table.collapse {
	border-collapse: collapse;
	border: 0.5pt solid #cccccc;
}

table.collapse td {
	border: 0.5pt solid #cccccc;
}

.fees {
	float: left;
	display: block;
	position: relative;
	width: 345px;
	padding: 0px;
	margin-right: 10px;
	border: 0px solid;
}

#noright {
	margin-right: 0px;
}

.invoicetable {
	font-size: 0.8em;
	 border-spacing:0;
  border-collapse:collapse;
}

.invoicetable th {
	border: 1px solid #333;
	background: #333;
	color: #fff;
	padding: 0px;
	width: 25%;
	 border-spacing:0;
  border-collapse:collapse;
}

.invoicetable li {
	margin: 0px;
}

.invoicetable table,.invoicetable td {
	border: 1px solid #333;
	padding: 0px;
	 border-spacing:0;
  border-collapse:collapse;
}
</style>
</head>
<body>
<?=$name?>
	<?=$phone?>
		<?=$email?>
		<?=$businessname?>
		<?=$turnover?>
		<?=$website?>
		<?=$nature?>
		<?=$banker?>
		
		<?=$assetlendingYesNo?>
		<?=$assetlendingLender?>
		<?=$assetlendingAmount?>
		
		<?=$monthlyIn?>
		<?=$monthlyOut?>
		
		<?=$CreditorPetition?>
		<?=$WindingUp?>
		<?=$creditorNames?>
		<?=$petitioningSolicitor?>
		<?=$PetitionReferece?>
		<?=$AmountOfDebt?>

	<?=$liabilityentry2?>






	<script type="text/php">
        if ( isset($pdf) ) {
        $font = Font_Metrics::get_font("verdana");;
        $size = 6;
        $color = array(0,0,0);
        $text_height = Font_Metrics::get_font_height($font, $size);

        $foot = $pdf->open_object();

        $w = $pdf->get_width();
        $h = $pdf->get_height();

        // Draw a line along the bottom
        $y = $h - 2 * $text_height - 24;
        $pdf->line(16, $y, $w - 16, $y, $color, 1);

        $y += $text_height;

        $text = "ID: quote ref";
        $pdf->text(16, $y, $text, $font, $size, $color);

        $pdf->close_object();
        $pdf->add_object($foot, "all");
        // global $initials;
        // $initials = $pdf->open_object();

        // Add an initals box
        //$text = "Initials:";
        //$width = Font_Metrics::get_text_width($text, $font, $size);
        //$pdf->text($w - 16 - $width - 38, $y, $text, $font, $size, $color);
        //$pdf->rectangle($w - 16 - 36, $y - 2, 36, $text_height + 4, array(0.5,0.5,0.5), 0.5);


        //$pdf->close_object();
        // $pdf->add_object($initials);

        // Mark the document as a duplicate
        //df->text(110, $h - 240, "DUPLICATE", Font_Metrics::get_font("verdana", "bold"),
        //       110, array(0.85, 0.85, 0.85), 0, -52);

        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";  

        // Center the text
        $width = Font_Metrics::get_text_width("Page 1 of 2", $font, $size);
        $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);

        }

    </script>

</body>
</html>

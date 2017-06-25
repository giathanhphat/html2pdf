<?php 
//9 trang mat 1p30s
	require_once('html2pdf440/html2pdf.class.php');
	ob_start();
	include_once('test.php');
	$content = ob_get_clean();
	$html2pdf = new HTML2PDF('A4');
	$html2pdf->setDefaultFont('Arial');
	// $content = ob_get_contents('test.php');
	// $content = file_get_contents(filename)
	
    $html2pdf->writeHTML($content);
    $html2pdf->output();
 ?>
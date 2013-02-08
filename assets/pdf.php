<!--Converting php document to pdf -->
<?php
	$dir = dirname(__FILE__);  //getting the current directory name

	require_once($dir.'/dompdf/dompdf_config.inc.php');  // Load the dompdf files  

	ob_start();

	require_once($dir.'/form.php');//the file which is to convert into pdf  

	$dompdf = new DOMPDF(); // Create new instance of dompdf  
	$dompdf->load_html(ob_get_clean()); // Load the html  
	$dompdf->render(); // Parse the html, convert to PDF  
	$pdf_content = $dompdf->output();

	file_put_contents("saved_pdf.pdf", $pdf_content);//now write $pdf to disk.

	header('Content-type: application/pdf');
	header('Content-Disposition: attachment; filename="saved_pdf.pdf"');
	readfile('saved_pdf.pdf');

	unlink("saved_pdf.pdf");
	echo "pdf is successfully saved in the disk";

?>

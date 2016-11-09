<?php
include('pdfReadTextv1.php');
$a = new PDF2Text();
$a->setFilename('12312010.pdf'); //grab the test file at http://www.newyorklivearts.org/Videographer_RFP.pdf
$a->decodePDF();
echo $a->output();

?>
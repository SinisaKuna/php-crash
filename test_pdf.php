<?php

//namespace Dompdf;

require_once 'includes/dompdf/autoload.inc.php';

use Dompdf\Dompdf;


$dompdf = new Dompdf();

$dompdf->loadHtml('<h1>hello world</h1>');


$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
//$dompdf->stream("", array("Attachment" => false));
$dompdf->stream('prva');

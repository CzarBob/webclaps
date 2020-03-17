<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetMargins(2, 8, 2);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('times', '', 12);
$pdf->SetTitle('Vehicle History');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// add a page
$pdf->AddPage();

error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ob_end_clean();


try
{
$content .='    <h1 style="text-align: center;">Vehicle History</h1>
                <h3 style="float: right;">Plate No. &nbsp;<u>'.$plate_header[0]->plateNumber.'</u></h3>
                 <h3 style="float: right;">Model &nbsp;  &nbsp; &nbsp;<u>'.$plate_header[0]->vehicleModel.'</u></h3>

                <table border="1" cellpadding="1.5">';
$content .='        <thead>
                        <tr>
                            <th><b>Date Created</b></th>
                            <th><b>Item</b></th>
                            <th width="50px"><b>Unit</b></th>
                            <th width="55px"><b>Quantity</b></th>
                            <th width="200px"><b>Remarks</b></th>
                        </tr>
                    </thead>';    
 $content .='       <tbody>';
               
                     foreach ($log as $data) {
 $content .='               <tr>
                                <td>'.$data->log_date.'</td>
                                <td>'.$data->log_item_type.'</td>
                                <td width="50px">'.$data->log_unit.'</td>
                                <td width="55px">'.$data->log_quantity.'</td>   
                                <td width="200px" height="55px">'.$data->log_desc.'</td>
                            </tr>
 ';
                    }
                            
$content .='           </tbody>
        </table>
    
';


$pdf->writeHTML($content, true, false, true, false, '');

$pdf->Output($plate_header[0]->plateNumber.'-log.pdf', 'I');

}
catch(HTML2PDF_exception $err)
{
    echo $err;
    exit;
}
?>
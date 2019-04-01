<?php
ob_start();
if(session_status() == PHP_SESSION_NONE)
{
session_start();
}
require __DIR__.'/PDF/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$total=0;
?>
<link href="pdf-style.css" type="text/css" rel="stylesheet">
<page footer="date; page" backtop="20mm" backbottom="20mm" backleft="10mm" backright="10mm">
    <page_header>
    <table class="table-header">
        <tr>
            <td class="logo">
                <img src="../images/Logo.png" style="height: 80px; width: 100px;" />
            </td>
            <td class="company-head"><h3>GSM-Guide</h3></td>
        </tr>
    </table>
    </page_header>
    <page_footer>
    <table style="border-top: 1px solid #666666; width: 100%; background: #cccccc;">
        <tr>
            <td style="width: 100%; text-align: center;">
                <p>3 ème Etage Centre X . Pres du centre Makni
                Tunis</p>
                <p>Tel 55 115 602, FAX 454545457578 </p>
            </td>
        </tr>
    </table>
    </page_footer>



    <h1>Facture</h1>
    <table class="doc-infos">
        <tr>
            <td class="invoice">
                <h3>Commande</h3>
                <p><?php echo date('Y-m-d H:i');  ?></p>
            </td>
            <td class="client">
                <h3><?php echo $_SESSION['auth']['user_prenom'] . " " . $_SESSION['auth']['user_nom']  ; ?></h3>
                <p>Tel 51 564 785</p>
            </td>
        </tr>
    </table>
    <hr>

    <table class="doc-details" cellspacing="0">
        <tr>
            <th class="ref">Ref</th>
            <th class="desig">Designation</th>
            <th class="qte">QTE</th>
            <th class="price">Price</th>
            <th class="amount">Amount</th>
        </tr>

        <?php
            $ids=array_keys($_SESSION['shopping_cart']);
            for($i=0;$i<count($ids);$i++)
            {
                $prixTel=$_SESSION['shopping_cart'][$ids[$i]]['quantity']*$_SESSION['shopping_cart'][$ids[$i]]['prix'];
                $total+=$prixTel;

                ?>
            <tr>
                <td><?= $_SESSION['shopping_cart'][$ids[$i]]['nom'] ?></td>
                <td>Description</td>
                <td><?= $_SESSION['shopping_cart'][$ids[$i]]['quantity']?></td>
                <td><?= number_format($_SESSION['shopping_cart'][$ids[$i]]['prix'], 2)?></td>
                <td><?= number_format($prixTel, 2)?></td>
            </tr>
            <?php }?>

            <?php
if(isset($_SESSION['discount']))
    {
        $reduction = ($total * $_SESSION['discount']) / 100;
                                $total -= $reduction;
    }
            ?>

    </table>

    <br>
    <br>

    <table class="total" cellspacing="0">
        <tr>
            <td style="width: 70%">Montant de remise </td>
            <td style="width: 25%"><?php if(isset($_SESSION['discount'])) 
                                number_format($reduction, 2)?></td>
        </tr>
        <tr>
            <td style="width: 70%">Total HT</td>
            <td style="width: 25%"><?=number_format($total, 2)?></td>
        </tr>
        <tr>
            <td>Total TVA</td>
            <td></td>
        </tr>
        <tr>
            <td>Total TTC</td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">Net A payer : <?=number_format($total, 2)?></td>
        </tr>
    </table>
    <br><br>

    <p>
    Vous devez presenter cette facture lors de livraison pour recevoir votre commande
    </p>

    <br>
    <table class="signature-table" cellspacing="0">
        <tr>
            <td class="sinature"></td>
            <td class="amount-chars">
                <p>signature client</p>
            </td>
        </tr>
    </table>

 </page>
<?php
    $content = ob_get_clean();
    $lg = Array();
    $lg['a_meta_charset'] = 'UTF-8';
    $lg['a_meta_dir'] = 'rtl';
    $lg['a_meta_language'] = 'fa';
    $lg['w_page'] = 'page';

    // set some language-dependent strings (optional)

    $html2pdf = new HTML2PDF('P', 'A4', 'en');
    //$html2pdf->pdf->setLanguageArray($lg);

    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('fichierpdf.pdf','D');

     $file = 'C:/Users/Dell/Downloads/fichierpdf.pdf';
     $newfile = '../factures/fichierpdf.pdf';
     if(copy($file,$newfile))
     {
        sendFacture($_SESSION['auth']['user_email'],"../factures/fichierpdf.pdf");
        unset($_SESSION['shopping_cart']);
        unset($_SESSION['discount']);


     }
 ?>
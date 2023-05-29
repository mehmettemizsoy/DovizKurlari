<?php
$kur = simplexml_load_file("http://www.tcmb.gov.tr/kurlar/today.xml");
foreach($kur->Currency AS $Cur){
    if($Cur["Kod"] == "USD"){
        $usdAlis = $Cur->ForexBuying;
        $usdSatis = $Cur->ForexSelling;
    }
    if($Cur["Kod"] == "NOK"){
        $nokAlis = $Cur->ForexBuying;
        $nokSatis = $Cur->ForexSelling;
    }
   
}

?>

<b>USD ALIŞ:</b> <?php echo $usdAlis ?> <br>
<b>USD SATIŞ:</b> <?php echo $usdSatis ?> <br>
<hr>
<hr>
<hr>

<b>NOK ALIŞ</b> <?php echo $nokAlis ?> <br>
<b>NOK SATIŞ</b> <?php echo $nokSatis ?> <br>
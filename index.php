<meta charset="utf-8">
<?php
////    require_once 'app/include/database.php';
////    require_once 'app/include/functions.php';
////
////?>
<!--<!---->-->
<?php
//////
////    /*
////    Data tips in php
////
////    string/
////    int/
////    float/
////    boolean/
////    object/
////    array/
////    null/
////    resource/
////
////    */
////
//////
//////    $sting = "this string";
//////    $int = 23;
//////    $float = 2.5;
//////    $boolean = false;
//////    $array = array("this array", "frst array", 55 , 2.5, $boolean );
//////    $null = null;
//////
//////    echo $array[];
////
////
////
//////
//////    $a = 5;
//////    echo $a."<br>";
//////    echo $a++."<br>";
//////    echo $a."<br>";
//////    echo --$a."<br>";
//////    echo $a."<br>";
//////
//////    if ($a < '6') {
//////        echo 'true';
//////    } else {
//////        echo 'falce';
//////    }
////
////
//////    include 'app/header.php';
////    require 'app/header.php';
////    require 'app/footer.php';
////        echo "sencela linum"
////
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//?>

<?php

//$curl = curl_init("http://www.books.am");
//
//curl_setopt($curl, CURLOPT_USERAGENT, "its useragent");
//curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 120);
//curl_setopt($curl, CURLOPT_TIMEOUT, 120);
//curl_setopt($curl, CURLOPT_MAXREDIRS, 5);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//
//
//$response = curl_exec($curl); //veradardznuma urli exac chexac@
//echo $response;
//print_r(curl_getinfo($curl));
////        cubrid_close($curl); // pakuma kap@
//
//



?>



<?php
function download_page($path){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$path);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    $retValue = curl_exec($ch);
    curl_close($ch);
    return $retValue;
}

$sXML = download_page('http://www.books.am/am/news');
$xml = new SimpleXMLElement($sXML);
echo $sXML;

while(list( , $node) = each($result)) {
    echo '/body/div/script: ',$node,"\n";
}

//n/* Relative paths also work... */
//$result = $xml->xpath('div/script');
//
//while(list( , $node) = each($result)) {
//    echo 'div/script: ',$node,"\n";
//}



?>

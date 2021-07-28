<?php 
$xmlDoc = new DOMDocument();
$xmlDoc->load("BOOK_catalog.xml");
$pa="/^".$_GET["q"]."/i";

$x=$xmlDoc->getElementsByTagName('AUTHORS');
$yz=null;
for ($i=1; $i<$x->length; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    $ar=$x->item($i)->childNodes->item(0)->nodeValue;
    if (preg_match($pa,$ar))
      $yz[]=($x->item($i)->parentNode);
    }
}
if($yz!=null){
  foreach ($yz as $y){ 
    $cd=($y->childNodes);
    for ($i=0;$i<$cd->length;$i++) {
      //Process only element nodes
      if ($cd->item($i)->nodeType==1) {
        echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
        echo($cd->item($i)->childNodes->item(0)->nodeValue);
        echo("<br>");
      }
    } print "<hr>";
  }
}
else{
  echo "no data found";
}
?> 

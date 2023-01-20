<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 $MApoint = CRpoint = BLpoint = CApoint = 0

 $MAfirstMT = $_POST["Ma1"];
 $MAsecondMT = $_POST["Ma2"];
 $MAthirdMT = $_POST["Ma3"];

 $CRfirstMT = $_POST["Cr1"];
 $CRsecondMT = $_POST["Cr2"];
 $CRthirdMT = $_POST["Cr3"];

 $BLfirstMT = $_POST["Bl1"];
 $BLsecondMT = $_POST["Bl2"];
 $BLthirdMT = $_POST["Bl3"];

 $CAfirstMT = $_POST["Ca1"];
 $CAsecondMT = $_POST["Ca2"];
 $CAthirdMT = $_POST["Ca3"];

 $marocflag = "./image/morocco.png";
 $CRflag = "./image/Croatia.png";
 $BLflag = "./image/belgium.png";
 $canadaflag = "./image/canada.jpg";

 if($MAfirstMT > $CRfirstMT){
    $MAfirstMT += 3; 
 }elseif($MAfirstMT < $CRfirstMT){
    $CRfirstMT += 3;
 }else{
    $MAfirstMT += 1;
    $CRfirstMT += 1;
 }

 if($BLfirstMT > $CAfirstMT){
    $BLfirstMT += 3;
 }elseif($BLfirstMT < $CAfirstMT){
    $CAfirstMT += 3;
 }else{
    $BLfirstMT += 1;
    $CAfirstMT += 1;
 }

 if($BLsecondMT < $MAsecondMT){
    $MAsecondMT += 3;
 }elseif($BLsecondMT > $MAsecondMT){
    $BLsecondMT += 3;
 }else{
    $MAsecondMT += 1;
    $BLsecondMT += 1;
 }

 if($CRsecondMT > $CAsecondMT){
    $CRsecondMT += 3;
 }elseif($CRsecondMT < $CAsecondMT){
    $CAsecondMT += 3;
 }else{
    $CRsecondMT += 1;
    $CAsecondMT += 1;
 }

 if ($MAthirdMT < $CAthirdMT){
    $CAthirdMT += 3;
 }elseif($MAthirdMT > $CAthirdMT){
    $MAthirdMT += 3;
 }else{
    $MAthirdMT += 1;
    $CAthirdMT += 1;
 }

function sortByValue($a ,$b){
    return $b['points'] - $a['points'];
}

$teams = array(
    array("country"=>"Morocco", "flag"=>$marocFlag,   "points"=>$MApoint),
    array("country"=>"Canada",  "flag"=>$canadaFlag,   "points"=>$CApoint),
    array("country"=>"Croatia", "flag"=>$croatiaFlag, "points"=>$CRpoint),
    array("country"=>"belgium", "flag"=>$belgiumFlag, "points"=>$BLpoint),

)

usort($teams,'sorByVlue');

for (x = 0; x < 4; x++){

    echo "<tr>"
    echo "
            <td>$teams[0]['points']</td>
            <td>hi</td>
            <td>hi</td>
            <td>hi</td>
            <td>hi</td>
            <td>hi</td>
            <td>hi</td>
            <td>hi</td>

    ";
    echo "<tr>";
}


echo $teams[0]["points"];
echo "br";
echo $teams[1]["points"];
echo "br";
echo $teams[2]["points"];
echo "br";
echo $teams[3]["points"];
echo "br";
echo $teams[4]["points"];
echo "br";

?>













    
</body>
</html>
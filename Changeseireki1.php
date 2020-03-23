<?php
//$seireki=[];
//$coremonth=[];
//$coreday=[];


    if($_POST["number"] === ''){
        echo '西暦が入力されていません。';
    }

    if($_POST["month"]=== ''){
      echo '誕生月が入力されていません。';
    }
       if($_POST["day"] === ''){
        echo  '誕生日が入力されていません。';
    }

else{



if(isset($_POST["number"]) || isset($_POST["month"]) || isset($_POST["day"]) ){
    
    $reiwa = $_POST["number"]-2018;
    $heisei = $_POST["number"]-1988;
    $syouwa =$_POST["number"]-1925;
    $taisyo =$_POST["number"]-1911;
    $meiji =$_POST["number"]-1867;

if($_POST["month"]>=1 && $_POST["month"]<=12){
        $coremonth=$_POST["month"]."月生まれ <br>\n";}
					else{ $coremonth="月が正しくない数値です。1から12の間の数値を入力してください。<br>\n";}

if($_POST["day"]>=1 && $_POST["day"]<=31){
            $coreday=$_POST["day"]."日です。<br>\n";}
			else{ $coreday="日が正しくない数値です。1から31の間の数値を入力してください。<br>\n";}

if($_POST["number"]>=2020){
   $seireki="まだ暦が始まっていません。<br>\n";}
	
elseif($_POST["number"]<=2019 && $_POST["number"]>1989){
    if($_POST["number"]==2019 && $_POST["month"] >=5 && $_POST["day"]>=1){
        $seireki="あなたの生まれた年は和暦で令和".$reiwa."年です。<br>\n";}
        else{ $seireki="あなたの生まれた年は和暦で平成".$heisei."年です。<br>\n";}
}

elseif($_POST["number"]<=1989 && $_POST["number"]>1926 ){

    if ($_POST["number"]==1989 && $_POST["month"] ==1 && $_POST["day"]>=8 ){
        $seireki="あなたの生まれた年は和暦で平成".$heisei."年です。<br>\n";}
        //($_POST["number"]==1989 && $_POST["month"] ==1 && $_POST["day"]<8 ){
        //$seireki="あなたの生まれた年は和暦で昭和".$syouwa."年です。<br>\n";}
else{$seireki="あなたの生まれた年は和暦で昭和".$syouwa."年です。<br>\n";}
}

elseif($_POST["number"]<=1926 && $_POST["number"]>1912 ){
    if ($_POST["number"]==1926 && $_POST["month"] ==12 && $_POST["day"]>=25){
        $seireki="あなたの生まれた年は和暦で昭和".$syouwa."年です。<br>\n";}
        elseif ($_POST["number"]==1926 && $_POST["month"] ==12 && $_POST["day"]<25){
            $seireki="あなたの生まれた年は和暦で大正".$taisyo."年です。<br>\n";}
else{$seireki="あなたの生まれた年は和暦で大正".$taisyo."年です。<br>\n";}
}

elseif($_POST["number"]<=1912 && $_POST["number"]>1868){
    if ($_POST["number"]==1912 && $_POST["month"] ==7 && $_POST["day"]>=30){
        $seireki="あなたの生まれた年は和暦で大正".$taisyo."年です。<br>\n";}
        elseif($_POST["number"]>=1912 && $_POST["month"] >=7 && $_POST["day"]<30){
        $seireki="あなたの生まれた年は和暦で明治".$meiji."年です。<br>\n";}
else{$seireki="あなたの生まれた年は和暦で明治".$meiji."年です。<br>\n";}

}
elseif($_POST["number"]<=1868 && $_POST["number"]>=1000){
    if ($_POST["number"]==1868 && $_POST["month"] ==9 && $_POST["day"]>=8){

        $seireki="あなたの生まれた年は和暦で明治".$meiji."年です。<br>\n";}
  elseif($_POST["number"]>=1868 && $_POST["month"] ==9 && $_POST["day"]<8){
      $seireki="あなたの生まれた年は和暦で明治以前です。<br>\n";}
else{$seireki="あなたの生まれた年は和暦で明治以前です。<br>\n";}
  }
}
}
//else{$seireki="西暦が正しくない数値です。<br>\n";}

 

//}else {echo "初めての入力ですね。<br>\n";}

?>
    <html>
 	<head>
 <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
 	</head>
 	<body>
 <!--	<form action="Changeseireki1.php" method="post">
 	西暦を4桁で入力してください。<br>
 		<input type="text" name="number" value=""> <br>
 	誕生月を入力してください。<br>
 		<input type="text" name="month" value=""> <br>
 	日にちを入力してください。<br>
 	<input type="text" name="day" value=""> <br>
 		<input type="submit" value="入力">
 		</form>
-->
<a href="Changeseireki.php">戻る<br></a>
 	<?php 
/*if (isset($seireki)){
　}
else{echo　"西暦を4桁で入力してください。<br>";}
if (isset($coremonth)){
echo $coremonth;}
else {echo "誕生月を入力してください。<br>";}
if(isset($day)){
echo $coreday;
}else{
echo "誕生日を入力してください。<br>"}
*/
echo $seireki,$coremonth,$coreday;
?>
 	</body>
 	</html>

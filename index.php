<?php

$obj = new main();
  
  $obj->php();
  
  
  

  class main {

    public function __construct() {

      echo '<h2><center><u>Week4</u></center></h2> </br> </br>';

    }

    public function php() {


$date =  date('Y-m-d', time());                                 //1.display result
echo "<h3>The value of \$date: </h3>".$date."<br>";

$tar = "2017/05/24";
echo "<h3>The value of \$tar:</h3> ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "<h3>The value of \$year:</h3> ";
print_r($year);

echo "</br></br>";

                      
$date =  date('Y/m/d', time());                                 //2.Replace - with /
echo "<h3>The value of \$date:</h3> ".$date."<br>";

$tar = "2017/05/24";
echo "<h3>The value of \$tar:</h3> ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "<h3>The value of \$year:</h3> ";
print_r($year);

echo "</br></br>";

echo "<h3>Comparing two dates and the output is greater than 0</h3> ";

$compare=strcmp($date,$tar);                                    //3.Compare $date and $tar

if($compare>0){

	echo "The Future";
}
elseif ($compare<0){

	echo "The Past";
}
 elseif ($compare==0) {
 	echo "Oops";
 }

 echo "</br></br>";

$positionf = strpos($date, "/");                                   //4.Position of / in $date
$positionl = strrpos($date, "/");

echo "<h3>Position of / in date is</h3> $positionf ";
echo "and $positionl";
$replace = str_replace('/', ' ',$date);                            //4. / is relaced with space
echo "<h3>Replaced with space</h3> $replace";
echo "</br>";

echo "<h3>Number of words in $date is :</h3>";                     //5.Words in $date
echo str_word_count($date);
echo "</br>";

echo "<h3>Length of $date is :</h3>";                              //6.Length of string  
echo strlen("$date");
echo "</br>";

echo "<h3>ACII value of first character of date is :</h3>";        //7. ACII value 
echo ord($date);
echo "</br>";

echo "<h3>Last two characters of string is:</h3>";                 //8.Last 2 characters
$last = substr("$date", -2);
echo "	$last";


echo "<h3>Array of string $date is:</h3>" ;                        //9.Array of string
print_r (explode("/",$date));
echo "<br/>";
echo"<h3>Delimit elements with space </h3>" ;                      //9.Delimit elements with space 
$array = (explode("/",$date));
foreach ($array as $key=>$value) {
echo  $value . " ";
}
echo "</br>";

echo "<h3>To identify whether each year is leap year or not:</h3>" ;    //10.Identify if the year is leap
 foreach ($year as $y) {

 	$result = "not a leap year";
 	
 	while((0 == $y % 4) and (0 != $y % 100) or (0 == $y % 400) ){

 		$result = "leap";
 		break;

 	}

 		switch($result){

 		case "leap":
 		echo "True<br>";
 		break;

 		default:
 		echo "False <br>";
 		break;
}
 }

}
public function __destruct() {

      echo '<h2><center><u>Done</u></center></h2> </br> </br>';

    }

}

?>
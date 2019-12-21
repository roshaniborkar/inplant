<html>
<body>
	<?php
	$vinayak="hello world";
	echo "<br>";
	var_dump($vinayak);
	echo "<br>";
	echo $vinayak;
	$names=array("vinayak","vinay","vijay","what ever");
	var_dump($names);
	echo "<br>";
	echo $names[2];
	echo "<br>";
	$vinay="hello friends i am vinayak";
	echo strlen($vinay);
	echo "<br>";
	echo str_word_count($vinay);
	echo "<br>";
	echo strrev($vinay);
	echo "<br>";
	//echo strpos(,)
	var_dump(is_int($vinay));
	echo "<br>";
	var_dump(is_float($vinay));
	echo "<br>";
	var_dump(is_string($vinay));
	echo "<br>";
	var_dump(is_numeric($vinay));
	echo "<br>";

	$a=50;
	$b=2;
	$c=$a+$b;
	echo $c;
	echo "<br>";

	$c=$a-$b;
	echo $c;
	echo "<br>";

	$c=$a/$b;
	echo $c;
	echo "<br>";

	$c=$a*$b;
	echo $c;
	echo "<br>";

	$c=$a**$b;
	echo $c;
	echo "<br>";

	$d=100;
	echo $d;
	echo "<br>";

	$d+=10;
	echo $d;
	echo "<br>";

	$d-=5;
	echo $d;
	echo "<br>";

	$d*=10;
	echo $d;
	echo "<br>";

	$d/=10;
	echo $d;
	echo "<br>";

	$d%=10;
	echo $d;
	echo "<br>";

	$f =100;
	$g ="100";
	var_dump($f == $g);
	echo "<br>";

	$f =100;
	$g ="120";
	var_dump($f == $g);
	echo "<br>";

	$f =100;
	$g ="100";
	var_dump($f != $g);
	echo "<br>";

	$f =100;
	$g ="100";
	var_dump($f === $g);
	echo "<br>";

	$f =100;
	$g ="120";
	var_dump($f != $g);
	echo "<br>";


	$f =100;
	$g ="120";
	var_dump($f <=> $g);
	echo "<br>";

	$f =100;
	$g ="100";
	var_dump($f <=> $g);
	echo "<br>";

	$f =100;
	$g ="120";
	var_dump($f >= $g);
	echo "<br>";

	$f =100;
	$g ="120";
	var_dump($f <= $g);
	echo "<br>";

	$f =100;
	$g ="120";
	var_dump($f <> $g);
	echo "<br>";
	



	$h=10;
	echo $h++;
	echo "<br>";
	echo $h;
	echo "<br>";

	echo $h--;
	echo "<br>";

	echo ++$h;
	echo "<br>";

	echo --$h;
	echo "<br>";

	$i="vinayak";
	$j="bhovi";
	echo $i.$j;
	echo "<br>";

	echo $i.=$j;
	echo "<br>";

	echo "date 21-12-2019";
	echo "<br>";

	$k= date("H");
	if ($k<"20") {
		echo "have a nice day";
		echo "<br>";

	if ($k<"12") {
		echo "have a nice day";
		}else{
			echo "good night";
		}
		echo "<br>";

	if ($k>"8"&& $k<"12") {
		echo "good morning";
		}elseif($k>"12"&& $k<"15"){
			echo " good afternoon";
		}elseif($k>"15"&& $k<"19"){
			echo "have a good evening";
		}else{
			echo " good night";
		}
		echo "<br>";

	$favcolor="green";

	switch($favcolor)
	{
	case"green":
	echo"your favorite color is green";
	break;
	case"red":
	echo "your favorite color is red";	
	break;
	default:
	echo "your favorite color is nither red nor green";
	break;
	}
	echo "<br>";

	$x=0;

	while ($x <= 10) {
		echo "the number is $x";
		$x++;
		echo "<br>";

	}
echo "<br>";

	$x=0;
	do{
		echo "the number is :$x ";
		$x++;
		echo "<br>";
	}while ($x <= 10);
	echo "<br>";

	for ($x=0; $x <=10; $x++) { 
		echo"the number is : $x";
		echo "<br>"; 
		
	}

	function wrtmsg(){
		echo "hello word";
	}

    wrtmsg();

    function familyname($fname){
    	echo "$fname Refsnes.<br>";
    }
    familyname("jani");
    familyname("vinayak");
    familyname("roshani");
    familyname("dilshad");

    function family($fname,$year){
    	echo "$fname was Born in year the $year <br> ";
    }
    family("vinayak","1999");
    family("vinayak","1999");
    family("vinayak","1999");
    family("vinayak","1999"); 
	family("vinayak","1999");

	//declare(strict_types=1);
	function setHeight(int $minheight = 50){
		echo "The height is : $minheight<br>";
	}
	setHeight(45);
	setHeight(145);
	setHeight(415);
	setHeight(451);
	setHeight();






	}
		


	

	?>

</body>
</html>
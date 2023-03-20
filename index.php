<!--
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

<script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = x;
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
-->

<?php

//lobal $a;

//if (isset($_GET['s']))
//    $a=$_GET['s'];
   
   //echo"<input id='numb'>";

  // echo"<button type='button' onclick='myFunction()'>Submit</button>";

  //  echo"<p id='demo'></p>";
    echo "<form method='GET' action=".$_SERVER['PHP_SELF'].">";
    echo "<p>Введите расстояние: <input style='position:absolute;left:17%' type='text' name='s' required></p>";
   // echo "<p>Пароль: <input style='position:absolute;left:7%' type='text' name='password'></p>";
	echo "<input type='submit' value='Рассчит' />";
   // echo "<button type='button' onclick='myFunction()'>Submit</button>";
	echo "</form>"; 



class SimpleClass
{
    // объявление свойства
    
	//$a=12;
    //echo $a."<br/><br/>";
	
	//public $var = 13;

    // объявление метода
    public function displayVar($a) {
       // if (isset($_GET['s']))
       // $a=$_GET['s'];
        
        if ($a<=100)
         { 
	       $b=$a*100;
           echo $b;
         }
        elseif (($a>100) and ($a<300))
         {
	       $bb=$a-100;
	       $bbb=10000+$bb*80;
           echo $bbb;	
         }
        else
         {
		   $f=$a-300;
           $ff=10000+16000+$f*70;
           echo $ff;
         }        
		
	//	echo $a;
	//	echo $this->var;
    }
}


$instance = new SimpleClass();

$instance->displayVar($_GET['s']);

exit;
?>





<?php
/*
$a=$_GET['s'];


if (isset($_GET['s']))
echo $a."<br/><br/>";

if ($a<=100)
{$b=$a*100;
echo $b;
//exit;
}
elseif (($a>100) and ($a<300))
{
	$bb=$a-100;
	$bbb=10000+$bb*80;
    echo $bbb;	
}
else
{$f=$a-300;
$ff=10000+16000+$f*70;
echo $ff;
}

exit;*/
?>


<?php

$sh=30;
$st=30;

for($i=0;$i<$sh;$i++)
{
$a=rand(0,1);
$aa[]=$a;
for($j=0;$j<$st;$j++)
{
$a=rand(0,1);
//if ($j==14) echo "<br/>";
$aaa[$i][]=$a;	
}


}

for ($gg=0;$gg<$sh;$gg++)
{
for ($g=0;$g<$st;$g++)
{
	if ( ($aaa[$gg][$g+2]==0) and ($aaa[$gg][$g-2]==0) and ($aaa[$gg][$g]==1) and ($aaa[$gg][$g-1]==1) and ($aaa[$gg][$g+1]==1) and ($aaa[$gg+1][$g]==1) and ($aaa[$gg-1][$g]==1) and ($aaa[$gg+2][$g]==0) and ($aaa[$gg-2][$g]==0) and ($aaa[$gg+1][$g-1]==0) and ($aaa[$gg+1][$g+1]==0) and ($aaa[$gg-1][$g-1]==0) and ($aaa[$gg-1][$g+1]==0) )		
	{echo "<b><strong><a href=''>".$aaa[$gg][$g]."</a></strong></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";}
    else echo $aaa[$gg][$g]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; //;."<br/>";	
}
echo "<br/><br/>";
}

print_r($aaa);
exit;


?>







<?php
class SimpleClass
{
    // объявление свойства
    public $var = 'значение по умолчанию';

    // объявление метода
    public function displayVar() {
        echo $this->var;
    }
}


$instance = new SimpleClass();

$instance->displayVar();


?>
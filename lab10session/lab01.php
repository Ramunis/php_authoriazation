<?
echo "Lab1.1:Имеется ли в числе 2?";
$n=1032;
echo "<br>";
echo "B = ",$n;
while(0<$n) 
{
	$b=$n%10;
	if ((($b/2)==1) && (($b%2)==0))
	{
		echo "<br>";
		echo "True";
	}
    $n = $n/10;	
}
?>
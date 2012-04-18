<?$f= fopen('php://stdin','r');
while(!feof($f))
$i= $i+(array_sum(str_split(str_replace(range(a,z),range(1,26),$o.fgets($f)))));
if ($i>50)
echo'higher than fifty';
else
echo'lower than fifty' ;
?>




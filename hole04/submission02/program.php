<?while($n=ord($c=fgetc(STDIN)))echo$n<11?$c:ceil((($n-96)/3)+(strstr('svyz',$c)?0:1));
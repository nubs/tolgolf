<?while($n=ord($c=fgetc(STDIN)))echo$n<11?$c:ceil((($n-96)/3)+($c=='s'?0:($c=='v'?0:($n>120?0:1))));
<?while($n=ord(fgetc(STDIN)))echo($n-=90)<0?"
":floor(($n-9e-12*pow($n-5,8))/3.1);
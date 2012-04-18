<?while($n=ord(fgetc(STDIN)))echo$n<11?"
":(int)min(9,$n%96/3.2+2);
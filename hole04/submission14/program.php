<?while($n=ord(fgetc(STDIN)))echo$n<11?"
":min(9,floor($n%96/3.2)+2);
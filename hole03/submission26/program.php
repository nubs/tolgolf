<?foreach(file("input.txt")as$d){$s=0;foreach(str_split(trim($d))as$o)$s+=ord($o)-96;echo($s>50?"high":"low")."er than fifty\n";}
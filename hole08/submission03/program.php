<?while($g=fgets(STDIN)){$g=split(' ',$g);$n=$g[$v=$w=0];$t=$a=null;for($u=1;$r=$g[$u];$u++)for($x=0;$b=$r[$x++];$p[$n]+=($a[$w-1]+$t[$w-2]+$t[$w-1])*$c+$v=$c+!++$w)if($b==X&&$c=10)$t[$w]=($u<10);elseif($b=='/'&&$c=10-$v)$a[$w]=($u<10);else$c=($b!='-')*$b;}asort($p);foreach($p as$n=>$s)echo "$n: $s
";
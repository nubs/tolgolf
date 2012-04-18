<?for(;$k[]=fgets(STDIN);$x++)$c[]=20;foreach($c as$p=>&$t)if(strstr($k[$p],i)||!$t+=5){foreach($c as$w=>&$e)$w^$p?$b?$t+=$m=min(5,$e)and$e-=$m:$e+=$t/($x-1)%28:0;$b?:$t=0;$b=!$b;}echo join('
',$c);
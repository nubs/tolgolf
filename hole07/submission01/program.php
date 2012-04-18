<?define(S,$argv[2]);function F($k,$n){for(;$n*--$k;)$p+=F(++$i)*F($k,$n-1);return$n?$p:($k<S)/S;}for($i=$n=$argv[1]-1;$f=F(++$i,$n);)echo"$i = $f
";
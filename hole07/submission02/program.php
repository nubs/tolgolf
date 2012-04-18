<?function F($s,$n,$k){if($n==1)return$k>0&&$k<=$s?1/$s:0;for($i=1;$i<$k;$i++)$x+=F($s,1,$i)*F($s,$n-1,$k-$i);return$x;};for($i=$n=$argv[1];$i<=$n*$s=$argv[2];$i++)echo"$i = ".F($s,$n,$i)."
";
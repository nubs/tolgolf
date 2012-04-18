<?
$message = fgets(STDIN);
$method = $argv[1];
$key = $argv[2];
$origlen = strlen($key);

for ( $i = $origlen; $i < strlen($message); $i++ )
{
	$key{$i} = $key{$i%$origlen};
}

for ( $i = 0; $i < strlen($message); $i++ )
{
	$m = $message{$i};
	$m = ord($m) - ord('a');

	$k = $key{$i};
	$k = ord($k) - ord('a');

	if ( $method == 'encrypt' )
	{
		if ( $m + $k > 26 )
			$c = $m + $k - 26;
		else
			$c = $m + $k;
	}
	else
	{
		if ( $m - $k < 0 )
			$c = $m - $k + 26;
		else
			$c = $m - $k;
	}

	echo chr($c + ord('a'));
}

<?
function prob($sides, $number, $value)
{
	if ( $number == 1 )
	{
		if ( $value > 0 && $value <= $sides )
			return 1.0/$sides;
		else
			return 0.0;
	}

	$sum = 0;
	for ( $i=1; $i<=$value-1; $i++ )
		$sum += prob($sides, 1, $i) * prob($sides, $number-1, $value-$i);

	return $sum;
}

$number = $argv[1];
$sides = $argv[2];

for ( $i=$number; $i<=$number*$sides; $i++ )
	echo $i . " = " . prob($sides, $number, $i) . "\n";

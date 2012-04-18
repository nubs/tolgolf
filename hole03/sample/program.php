<?php
$file = fopen("php://stdin", "r");

while ( $line = trim(fgets($file)) )
{
	$score = 0;
	for ( $i = 0; $i < strlen($line); $i++ )
	{
		$score = $score + ord($line{$i}) - ord('a') + 1;
	}

	if ( $score > 50 )
	{
		print("higher than fifty\n");
	}
	else
	{
		print("lower than fifty\n");
	}
}

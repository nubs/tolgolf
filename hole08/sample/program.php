<?
$players = array();
while ( $game = fgets(STDIN) )
{
	$game = explode(' ', $game);
	$name = array_shift($game);
	$players[$name] = 0;
	$strikes = array();
	$spares = array();
	$round_number = 1;
	$bowl_number = 0;
	$previous = 0;
	foreach ( $game as $round )
	{
		foreach ( str_split($round) as $bowl )
		{
			if ( $bowl == 'X' )
			{
				$inc = 10;
				if ( $round_number < 10 )
				{
					$strikes[$bowl_number] = true;
				}
			}
			elseif ( $bowl == '/' )
			{
				$inc = 10 - $previous;
				if ( $round_number < 10 )
				{
					$spares[$bowl_number] = true;
				}
			}
			elseif ( $bowl == '-' )
			{
				$inc = 0;
			}
			else
			{
				$inc = $bowl;
			}

			$previous = $inc;
			$players[$name] += $inc;
			if ( $spares[$bowl_number-1] )
				$players[$name] += $inc;
			if ( $strikes[$bowl_number-2] )
				$players[$name] += $inc;
			if ( $strikes[$bowl_number-1] )
				$players[$name] += $inc;

			$bowl_number++;
		}

		$round_number++;
	}
}

asort($players);
foreach ( $players as $name => $score )
{
	echo "$name: $score\n";
}

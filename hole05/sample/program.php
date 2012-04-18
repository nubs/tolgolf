<?php
$arRequests = file('php://stdin');
$arChildren = array_fill(0, count($arRequests), 20);
$bTrick = true;

foreach ( $arRequests as $i => $request )
{
	if ( trim($request) == 'trick' )
	{
		if ( $bTrick )
		{
			$iNum = floor($arChildren[$i]/(count($arChildren)-1));
			$arChildren[$i] = 0;
			foreach ( $arChildren as $j => $child )
			{
				if ( $i != $j )
				{
					$arChildren[$j] += $iNum;
				}
			}

			$bTrick = false;
		}
		else
		{
			foreach ( $arChildren as $j => $child )
			{
				if ( $i != $j )
				{
					$tmp = min(5, $child);
					$arChildren[$j] -= $tmp;
					$arChildren[$i] += $tmp;
				}

			}

			$bTrick = true;
		}
	}
	else
	{
		$arChildren[$i] += 5;
	}
}

foreach ( $arChildren as $child )
{
	echo "$child\n";
}

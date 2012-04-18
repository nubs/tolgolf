<?=join("
",array_map(function($v){while(96<$k=ord($v[$i++]))$s+=$k-96;return($s>50?high:low)."er than fifty";},file('php://stdin')));
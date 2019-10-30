<?php
	$array = array(
		"foo" => "bar",
		42 => 24,
		"multi" => array(
			"dimensional" => array(
				"array" => "foo"
			)
		)
	);
	foreach($array as $pos=>$val)
	{
		echo "The key is " . $pos . " and its value is " . $val;
		echo "<br>";
	}
?>
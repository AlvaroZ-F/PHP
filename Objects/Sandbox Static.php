<?php

	class Weather {
		
		public static $tempConditions = ['cold', 'mild', 'warm'];

		public static function celsiusToFarenheit(c) {
			return $c * 9 / 5 + 32;
		}

		public static function determineTempCondition($f) {
			if($f < 40){
				return self::$tempConditions[0]; //cold;
			} else if ($f < 70) {
				return self::$tempConditions[1]; //mild;
			} else {
				return self::$tempConditions[2]; //warm;
			}
		}
	}

	print_r(Weather::$tempConditions);

	echo Weather::celsiusToFarenheit(32);

	echo Weather::determineTempCondition(50);
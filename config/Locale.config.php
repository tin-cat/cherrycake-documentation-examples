<?php

namespace Cherrycake;

$LocaleConfig = [
	"availableLocales" => [
		"global" => [
			"language" => LANGUAGE_ENGLISH,
			"dateFormat" => DATE_FORMAT_MIDDLE_ENDIAN,
			"temperatureUnits" => TEMPERATURE_UNITS_FAHRENHEIT,
			"currency" => CURRENCY_USD,
			"decimalMark" => DECIMAL_MARK_POINT,
			"measurementSystem" => MEASUREMENT_SYSTEM_IMPERIAL,
			"timeZone" => TIMEZONE_ID_ETC_UTC
		],
		"spain" => [
			"language" => LANGUAGE_SPANISH,
			"dateFormat" => DATE_FORMAT_LITTLE_ENDIAN,
			"temperatureUnits" => TEMPERATURE_UNITS_CELSIUS,
			"currency" => CURRENCY_EURO,
			"decimalMark" => DECIMAL_MARK_COMMA,
			"measurementSystem" => MEASUREMENT_SYSTEM_METRIC,
			"timeZone" => TIMEZONE_ID_EUROPE_MADRID
		]
	],
	"defaultLocale" => "global",
	"canonicalLocale" => "global",
	"availableLanguages" => [LANGUAGE_ENGLISH, LANGUAGE_SPANISH]
];
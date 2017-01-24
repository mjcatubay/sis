<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Input object
*
* @returns paragraph string with all the values of the object
*/
function pr($obj){
	echo "<pre style='border:1px solid #e82121;padding:20px;margin:20px;background-color:#fdb4b4;color:#333'>";
	print_r($obj);
	echo "</pre>";
}

function _duration($day1, $day2) {
	$dif = strtotime($day1) - strtotime($day2);
	return floor($dif/(60*60*24));
}

function randomstring($len) {
    $length = $len;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = "";    

    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
}

function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
}

function _COUNTRIES_() {
	$countries = array(
		"AU" => "Australia",
		"AF" => "Afghanistan",
		"AL" => "Albania",
		"DZ" => "Algeria",
		"AS" => "American Samoa",
		"AD" => "Andorra",
		"AO" => "Angola",
		"AI" => "Anguilla",
		"AQ" => "Antarctica",
		"AG" => "Antigua & Barbuda",
		"AR" => "Argentina",
		"AM" => "Armenia",
		"AW" => "Aruba",
		"AT" => "Austria",
		"AZ" => "Azerbaijan",
		"BS" => "Bahamas",
		"BH" => "Bahrain",
		"BD" => "Bangladesh",
		"BB" => "Barbados",
		"BY" => "Belarus",
		"BE" => "Belgium",
		"BZ" => "Belize",
		"BJ" => "Benin",
		"BM" => "Bermuda",
		"BT" => "Bhutan",
		"BO" => "Bolivia",
		"BA" => "Bosnia/Hercegovina",
		"BW" => "Botswana",
		"BV" => "Bouvet Island",
		"BR" => "Brazil",
		"IO" => "British Indian Ocean Territory",
		"BN" => "Brunei Darussalam",
		"BG" => "Bulgaria",
		"BF" => "Burkina Faso",
		"BI" => "Burundi",
		"KH" => "Cambodia",
		"CM" => "Cameroon",
		"CA" => "Canada",
		"CV" => "Cape Verde",
		"KY" => "Cayman Is",
		"CF" => "Central African Republic",
		"TD" => "Chad",
		"CL" => "Chile",
		"CN" => "China, People's Republic of",
		"CX" => "Christmas Island",
		"CC" => "Cocos Islands",
		"CO" => "Colombia",
		"KM" => "Comoros",
		"CG" => "Congo",
		"CD" => "Congo, Democratic Republic",
		"CK" => "Cook Islands",
		"CR" => "Costa Rica",
		"CI" => "Cote d'Ivoire",
		"HR" => "Croatia",
		"CU" => "Cuba",
		"CY" => "Cyprus",
		"CZ" => "Czech Republic",
		"DK" => "Denmark",
		"DJ" => "Djibouti",
		"DM" => "Dominica",
		"DO" => "Dominican Republic",
		"TP" => "East Timor",
		"EC" => "Ecuador",
		"EG" => "Egypt",
		"SV" => "El Salvador",
		"GQ" => "Equatorial Guinea",
		"ER" => "Eritrea",
		"EE" => "Estonia",
		"ET" => "Ethiopia",
		"FK" => "Falkland Islands",
		"FO" => "Faroe Islands",
		"FJ" => "Fiji",
		"FI" => "Finland",
		"FR" => "France",
		"FX" => "France, Metropolitan",
		"GF" => "French Guiana",
		"PF" => "French Polynesia",
		"TF" => "French South Territories",
		"GA" => "Gabon",
		"GM" => "Gambia",
		"GE" => "Georgia",
		"DE" => "Germany",
		"GH" => "Ghana",
		"GI" => "Gibraltar",
		"GR" => "Greece",
		"GL" => "Greenland",
		"GD" => "Grenada",
		"GP" => "Guadeloupe",
		"GU" => "Guam",
		"GT" => "Guatemala",
		"GN" => "Guinea",
		"GW" => "Guinea-Bissau",
		"GY" => "Guyana",
		"HT" => "Haiti",
		"HM" => "Heard Island And Mcdonald Island",
		"HN" => "Honduras",
		"HK" => "Hong Kong",
		"HU" => "Hungary",
		"IS" => "Iceland",
		"IN" => "India",
		"ID" => "Indonesia",
		"IR" => "Iran",
		"IQ" => "Iraq",
		"IE" => "Ireland",
		"IL" => "Israel",
		"IT" => "Italy",
		"JM" => "Jamaica",
		"JP" => "Japan",
		"JT" => "Johnston Island",
		"JO" => "Jordan",
		"KZ" => "Kazakhstan",
		"KE" => "Kenya",
		"KI" => "Kiribati",
		"KP" => "Korea, Democratic Peoples Republic",
		"KR" => "Korea, Republic of",
		"KW" => "Kuwait",
		"KG" => "Kyrgyzstan",
		"LA" => "Lao People's Democratic Republic",
		"LV" => "Latvia",
		"LB" => "Lebanon",
		"LS" => "Lesotho",
		"LR" => "Liberia",
		"LY" => "Libyan Arab Jamahiriya",
		"LI" => "Liechtenstein",
		"LT" => "Lithuania",
		"LU" => "Luxembourg",
		"MO" => "Macau",
		"MK" => "Macedonia",
		"MG" => "Madagascar",
		"MW" => "Malawi",
		"MY" => "Malaysia",
		"MV" => "Maldives",
		"ML" => "Mali",
		"MT" => "Malta",
		"MH" => "Marshall Islands",
		"MQ" => "Martinique",
		"MR" => "Mauritania",
		"MU" => "Mauritius",
		"YT" => "Mayotte",
		"MX" => "Mexico",
		"FM" => "Micronesia",
		"MD" => "Moldavia",
		"MC" => "Monaco",
		"MN" => "Mongolia",
		"MS" => "Montserrat",
		"MA" => "Morocco",
		"MZ" => "Mozambique",
		"MM" => "Union Of Myanmar",
		"NA" => "Namibia",
		"NR" => "Nauru Island",
		"NP" => "Nepal",
		"NL" => "Netherlands",
		"AN" => "Netherlands Antilles",
		"NC" => "New Caledonia",
		"NZ" => "New Zealand",
		"NI" => "Nicaragua",
		"NE" => "Niger",
		"NG" => "Nigeria",
		"NU" => "Niue",
		"NF" => "Norfolk Island",
		"MP" => "Mariana Islands, Northern",
		"NO" => "Norway",
		"OM" => "Oman",
		"PK" => "Pakistan",
		"PW" => "Palau Islands",
		"PS" => "Palestine",
		"PA" => "Panama",
		"PG" => "Papua New Guinea",
		"PY" => "Paraguay",
		"PE" => "Peru",
		"PH" => "Philippines",
		"PN" => "Pitcairn",
		"PL" => "Poland",
		"PT" => "Portugal",
		"PR" => "Puerto Rico",
		"QA" => "Qatar",
		"RE" => "Reunion Island",
		"RO" => "Romania",
		"RU" => "Russian Federation",
		"RW" => "Rwanda",
		"WS" => "Samoa",
		"SH" => "St Helena",
		"KN" => "St Kitts & Nevis",
		"LC" => "St Lucia",
		"PM" => "St Pierre & Miquelon",
		"VC" => "St Vincent",
		"SM" => "San Marino",
		"ST" => "Sao Tome & Principe",
		"SA" => "Saudi Arabia",
		"SN" => "Senegal",
		"SC" => "Seychelles",
		"SL" => "Sierra Leone",
		"SG" => "Singapore",
		"SK" => "Slovakia",
		"SI" => "Slovenia",
		"SB" => "Solomon Islands",
		"SO" => "Somalia",
		"ZA" => "South Africa",
		"GS" => "South Georgia and South Sandwich",
		"ES" => "Spain",
		"LK" => "Sri Lanka",
		"XX" => "Stateless Persons",
		"SD" => "Sudan",
		"SR" => "Suriname",
		"SJ" => "Svalbard and Jan Mayen",
		"SZ" => "Swaziland",
		"SE" => "Sweden",
		"CH" => "Switzerland",
		"SY" => "Syrian Arab Republic",
		"TW" => "Taiwan, Republic of China",
		"TJ" => "Tajikistan",
		"TZ" => "Tanzania",
		"TH" => "Thailand",
		"TL" => "Timor Leste",
		"TG" => "Togo",
		"TK" => "Tokelau",
		"TO" => "Tonga",
		"TT" => "Trinidad & Tobago",
		"TN" => "Tunisia",
		"TR" => "Turkey",
		"TM" => "Turkmenistan",
		"TC" => "Turks And Caicos Islands",
		"TV" => "Tuvalu",
		"UG" => "Uganda",
		"UA" => "Ukraine",
		"AE" => "United Arab Emirates",
		"GB" => "United Kingdom",
		"UM" => "US Minor Outlying Islands",
		"US" => "USA",
		"HV" => "Upper Volta",
		"UY" => "Uruguay",
		"UZ" => "Uzbekistan",
		"VU" => "Vanuatu",
		"VA" => "Vatican City State",
		"VE" => "Venezuela",
		"VN" => "Vietnam",
		"VG" => "Virgin Islands (British)",
		"VI" => "Virgin Islands (US)",
		"WF" => "Wallis And Futuna Islands",
		"EH" => "Western Sahara",
		"YE" => "Yemen Arab Rep.",
		"YD" => "Yemen Democratic",
		"YU" => "Yugoslavia",
		"ZR" => "Zaire",
		"ZM" => "Zambia",
		"ZW" => "Zimbabwe"
		);
	return $countries;
}

function _COUNTRY_CODE_($country){
	$countries = _COUNTRIES_();
	$countries = array_map("strtoupper", $countries);
	$key = array_search(strtoupper($country), $countries);

	 return $key ? $key : "N/A";
}

function normalize_str($str)
{
	$invalid = array('Š'=>'S', 'š'=>'s', 'Ð'=>'D', 'd'=>'d', 'Ž'=>'Z', 'ž'=>'z',
	'C'=>'C', 'c'=>'c', 'C'=>'C', 'c'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A',
	'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
	'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
	'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y',
	'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a',
	'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e',  'ë'=>'e', 'ì'=>'i', 'í'=>'i',
	'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
	'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y',  'ý'=>'y', 'þ'=>'b',
	'ÿ'=>'y', 'R'=>'R', 'r'=>'r', "`" => "'", "´" => "'", "„" => ",", "`" => "'",
	"´" => "'", "“" => "\"", "”" => "\"", "´" => "'", "&acirc;€™" => "'", "{" => "",
	"~" => "", "–" => "-", "’" => "'");
	 
	$str = str_replace(array_keys($invalid), array_values($invalid), $str);
	
	return htmlentities($str,ENT_QUOTES| ENT_IGNORE, "UTF-8");
}

function _disallowed_url_chars() {
	return array( '(', ')',' ','-',"'",",","&",'"','!');
}
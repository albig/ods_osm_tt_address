<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ods_osm']['tables']['tt_address'] = array(
	'FORMAT' => '%01.6f',
	'lon' => 'tx_odsosm_lon',
	'lat' => 'tx_odsosm_lat',
	'address' => 'address',
	'zip' => 'zip',
	'city' => 'city',
	'state' => 'region',
	'country' => 'country',
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ods_osm']['tables']['tt_address_group']['MM']['tt_address'] = array(
	'local' => 'tt_address',
	'mm' => 'tt_address_group_mm',
	'foreign' => 'tt_address_group'
);
?>
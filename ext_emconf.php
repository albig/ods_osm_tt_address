<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'OpenStreetMap for tt_address',
	'description' => 'This extends ods_osm to use tt_address records.',
	'author' => 'Robert Heel',
	'author_email' => 'typo3@bobosch.de',
	'constraints' => array(
		'depends' => array(
			'ods_osm' => '2.0.0-',
			'tt_address' => '3.0.0-',
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'state' => 'stable',
	'version' => '3.0.1',
);
?>
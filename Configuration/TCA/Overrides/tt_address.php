<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_address']['columns']['longitude']['config']['fieldControl'] = [
    'coordinatepickerControl' => [
        'renderType' => 'coordinatepickerControl'
    ]
];




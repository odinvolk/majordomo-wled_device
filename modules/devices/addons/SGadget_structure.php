<?php
$this->device_types['Mobile'] = array(
    'TITLE'=>'Gadget',
    'PARENT_CLASS'=>'SDevices',
    'CLASS'=>'SGadget',
    'DESCRIPTION'=>'Gadget devices',
    'PROPERTIES'=>array(
        'NameGadget'=>array('DESCRIPTION'=>'Имя владельца гаджета','_CONFIG_TYPE'=>'text'),		
    		'BattLevel'=>array('DESCRIPTION'=>'процент батареи'),
	    	'Charging'=>array('DESCRIPTION'=>'Статус заряда'),
    ),
    'METHODS'=>array(
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1),         
		    'voiceOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'voiceOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1),		
    ),
);

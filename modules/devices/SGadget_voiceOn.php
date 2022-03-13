<?php


$BattLevel=$this->getProperty('BattLevel');
if ($BattLevel >= 100)
{
	
    callAPI('/api/module/yadevices','GET',array('station'=>14,'say'=>'заряд телефона 100 процентов'));  
}
if ($BattLevel == 15)
{
    callAPI('/api/module/yadevices','GET',array('station'=>14,'say'=>'Заряд телефона 15 процентов'));  
}
if ($BattLevel == 10)
{
    callAPI('/api/module/yadevices','GET',array('station'=>14,'say'=>'Заряд телефона критический,10 процентов'));  
}
if ($BattLevel <= 5)
{
    callAPI('/api/module/yadevices','GET',array('station'=>14,'say'=>'Заряд телефона, меньше 5 процентов...  мой совет,поставте его на зарядку!'));  
}
if ($this->getProperty('BattLevel')) {
    if (isset($params['NEW_VALUE'])) {
        if (($params['NEW_VALUE'] && $ncno == 'no') || (!$params['NEW_VALUE'] && $ncno == 'nc')){
            $msg = $this->getProperty('notify_msg_opening');
            if (!$msg) $msg = $description . ' ' . LANG_DEVICES_STATUS_OPEN;
            saySafe($msg, 2);
        } else {
            $msg = $this->getProperty('BattLevel');
            if (!$msg) $msg = $description . ' ' . LANG_DEVICES_STATUS_CLOSED;
            saySafe($msg, 2);
        }
    }
}

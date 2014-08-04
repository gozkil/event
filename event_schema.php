<?php

$schema['event_settings'] = array(
  'userid' => array('type' => 'int(11)'),
  'smtpserver' => array('type' => 'varchar(60)'),
  'smtpuser' => array('type' => 'varchar(60)'),
  'smtppassword' => array('type' => 'varchar(128)'),
  'smtpport' => array('type' => 'varchar(3)'),
  'consumerkey' => array('type' => 'varchar(60)'),
  'consumersecret' => array('type' => 'varchar(60)'),
  'usertoken' => array('type' => 'varchar(60)'),
  'usersecret' => array('type' => 'varchar(60)'),
  'prowlkey' => array('type' => 'varchar(60)'),
<<<<<<< HEAD
  'nmakey' => array('type' => 'varchar(60)'),
  'sid' => array('type' => 'varchar(60)'),
  'token' => array('type' => 'varchar(60)'),
=======
  'nmakey' => array('type' => 'varchar(60)')
>>>>>>> 186539af82a78e6cff844365618443bc1d95bec9
);

$schema['event'] = array(
  'id' => array('type' => 'int(11)', 'Null'=>'NO', 'Key'=>'PRI', 'Extra'=>'auto_increment'),
  'userid' => array('type' => 'int(11)'),
  'eventfeed' => array('type' => 'int(11)'),
  'eventtype' => array('type' => 'int(11)'),
  'eventvalue' => array('type' => 'float'),
  'action' => array('type' => 'int(11)'),
  'setfeed' => array('type' => 'int(11)'),
  'setemail' => array('type' => 'text'),
  'setvalue' => array('type' => 'float'),
  'callcurl' => array('type' => 'text'),
  'lasttime' => array('type' => 'int(11)'),
  'mutetime' => array('type' => 'int(11)'),
  'priority' => array('type' => 'int(3)', 'default'=>0),
  'message' => array('type' => 'text'),
<<<<<<< HEAD
  'disabled' => array('type' => 'int(1)'),
  'fromNumber' => array('type' => 'varchar(15)'),
  'toNumber' => array('type' => 'varchar(15)'), //Varchar? Text? ??
  'firsttime' => array('type' => 'int(11)'),
  'premute' => array('type' => 'int(11)'),
  'firstoccurence' => array('type' => 'int(11)'),
=======
  'disabled' => array('type' => 'int(1)')
>>>>>>> 186539af82a78e6cff844365618443bc1d95bec9
);


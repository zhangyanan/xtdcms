<?php
define('__IS_DEBUG', 1);

define('ACCESS_RIGHT_NO',										0b0000000000000000);
define('ACCESS_RIGHT_READ',									0b0000000000000001);
define('ACCESS_RIGHT_UPDATE',							0b0000000000000010);
define('ACCESS_RIGHT_CREATE',								0b0000000000000100);
define('ACCESS_RIGHT_DELETE',								0b0000000000001000);
define('ACCESS_RIGHT_ADD_MEMBER',				0b0000000000010000);
define('ACCESS_RIGHT_REMOVE_MEMBER',	0b0000000000100000);


define('ACCESS_MEMBER_NO',								0b1000000000000000);
define('ACCESS_MEMBER_PUBLIC',						0b0100000000000000);
define('ACCESS_MEMBER_GROUP',						0b0010000000000000);
define('ACCESS_MEMBER_SELF',								0b0001000000000000);
//
//define('FOLDER_ACCESS_RIGHT_NO',					0);
//define('FOLDER_ACCESS_RIGHT_READ',				1);
//define('FOLDER_ACCESS_RIGHT_UPDATE',		2);
//define('FOLDER_ACCESS_RIGHT_CREATE',			4);
//define('FOLDER_ACCESS_RIGHT_DELETE',			8);
//
//define('ACCESS_MEMBER_NO',				0);
//define('ACCESS_MEMBER_PUBLIC',		1);
//define('ACCESS_MEMBER_GROUP',		2);
//define('ACCESS_MEMBER_SELF',			4);

define('STATUS_ACTIVE',				'ACTIVE');
define('STATUS_DELETED',			'DELETED');
define('STATUS_PENDING',			'PENDING');
define('STATUS_SUSPENDED',	'SUSPENDED');
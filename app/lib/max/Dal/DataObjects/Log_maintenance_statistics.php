<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * Table Definition for log_maintenance_statistics
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Log_maintenance_statistics extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_maintenance_statistics';      // table name
    public $log_maintenance_statistics_id;    // INT(11) => openads_int => 129 
    public $start_run;                       // DATETIME() => openads_datetime => 142 
    public $end_run;                         // DATETIME() => openads_datetime => 142 
    public $duration;                        // INT(11) => openads_int => 129 
    public $adserver_run_type;               // INT(2) => openads_int => 1 
    public $search_run_type;                 // INT(2) => openads_int => 1 
    public $tracker_run_type;                // INT(2) => openads_int => 1 
    public $updated_to;                      // DATETIME() => openads_datetime => 14 

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGetFromClassName('DataObjects_Log_maintenance_statistics',$k,$v); }

    var $defaultValues = array(
                'start_run' => '%NO_DATE_TIME%',
                'end_run' => '%NO_DATE_TIME%',
                );

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

?>
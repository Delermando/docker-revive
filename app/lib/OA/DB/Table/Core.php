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

require_once MAX_PATH . '/lib/OA/DB/Table.php';

/**
 * A class for creating the core OpenX database tables.
 *
 * @package    OpenXDB
 * @subpackage Table
 */
class OA_DB_Table_Core extends OA_DB_Table
{

    /**
     * The class constructor method.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * A singleton method to create or return a single instance
     * of the {@link OA_DB_Table_Core} object.
     *
     * @static
     * @return OA_DB_Table_Core The created {@link OA_DB_Table_Core} object.
     */
    function &singleton()
    {
        $static =& $GLOBALS['_OA']['TABLES'][__CLASS__];
        if (!isset($static)) {
            $static = new OA_DB_Table_Core(); // Don't use a reference here!
            $static->init(MAX_PATH . '/etc/tables_core.xml');
        }
        return $static;
    }

    /**
     * A method to destroy the singleton, so it will be re-created later
     * if required.
     *
     * @static
     */
    function destroy()
    {
        if (isset($GLOBALS['_OA']['TABLES'][__CLASS__])) {
            unset($GLOBALS['_OA']['TABLES'][__CLASS__]);
        }
    }

}

?>

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

require_once MAX_PATH . '/lib/OA/Creative/File.php';

/**
 * A class to deal with uploaded creatives
 *
 */
class OA_Creative_File_RichMedia extends OA_Creative_File
{
    function readCreativeDetails($fileName, $aTypes = null)
    {
        return true;
    }
}

?>
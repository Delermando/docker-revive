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
 * @package    OpenXDll
 *
 * This file describes the AgencyInfo class.
 */

// Require the base info class.
require_once 'Info.php';

/**
 *  The agencyInfo class extends the base Info class and contains information about the agency.
 *
 */

class OA_Dll_AgencyInfo extends OA_Info
{
    /**
     * The agencyID variable is the unique ID for the agency.
     *
     * @var integer $agencyId
     */
    var $agencyId;

    /**
     * This field contains the ID of the agency account.
     *
     * @var integer $accountId
     */
    var $accountId;

    /**
     * The agencycName variable is the name of the agency.
     *
     * @var string $agencyName
     */
    var $agencyName;

    /**
     * The password variable is the password for the agency.
     *
     * @var string $password
     */
    var $password;

    /**
     * The contactName variable is the name of the contact for the agency.
     *
     * @var string $contactName
     */
    var $contactName;

    /**
     * The emailAddress variable is the email address for the agency contact.
     *
     * @var string $emailAddress
     */
    var $emailAddress;

    function getFieldsTypes()
    {
        return array(
                    'agencyId' => 'integer',
                    'accountId' => 'integer',
                    'agencyName' => 'string',
                    'contactName' => 'string',
                    'password' => 'string',
                    'emailAddress' => 'string'
                );
    }
}

?>
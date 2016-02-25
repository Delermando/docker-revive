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

// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAX_PATH . '/lib/OA/Admin/Option.php';
require_once MAX_PATH . '/lib/OA/Preferences.php';

require_once MAX_PATH . '/lib/max/Plugin/Translation.php';
require_once MAX_PATH . '/www/admin/config.php';


// Security check
OA_Permission::enforceAccount(OA_ACCOUNT_ADMIN, OA_ACCOUNT_MANAGER, OA_ACCOUNT_TRAFFICKER, OA_ACCOUNT_ADVERTISER);

// Load the account's preferences, with additional information, into a specially named array
$GLOBALS['_MAX']['PREF_EXTRA'] = OA_Preferences::loadPreferences(true, true);

// Create a new option object for displaying the setting's page's HTML form
$oOptions = new OA_Admin_Option('preferences');

// Prepare an array for storing error messages
$aErrormessage = array();

// If the settings page is a submission, deal with the form data
if (isset($_POST['submitok']) && $_POST['submitok'] == 'true') {
    // Prepare an array of the HTML elements to process, and which
    // of the preferences are checkboxes
    $aElements   = array();
    $aCheckboxes = array();
    // Tracker
    $aElements[] = 'tracker_default_status';
    $aElements[] = 'tracker_default_type';
    $aElements[] = 'tracker_link_campaigns';
    $aCheckboxes['tracker_link_campaigns'] = true;
    // Save the preferences
    $result = OA_Preferences::processPreferencesFromForm($aElements, $aCheckboxes);
    if ($result) {
        OX_Admin_Redirect::redirect('account-preferences-tracker.php');
    }
    // Could not write the preferences to the database, store this
    // error message and continue
    $aErrormessage[0][] = $strUnableToWritePrefs;
}

// Display the settings page's header and sections
phpAds_PageHeader("account-preferences-index");

// Set the correct section of the preference pages and display the drop-down menu
$oOptions->selection("tracker");

// Get the details of possible tracker statuses
$aStatuses = array();
foreach($GLOBALS['_MAX']['STATUSES'] as $statusId => $statusName) {
    $aStatuses[$statusId] = $GLOBALS[$statusName];
}

// Get the details of possible tracker types
$aTrackerTypes = array();
foreach($GLOBALS['_MAX']['CONN_TYPES'] as $typeId => $typeName) {
    $aTrackerTypes[$typeId] = $GLOBALS[$typeName];
}

// Prepare an array of HTML elements to display for the form, and
// output using the $oOption object
$aSettings = array (
    array (
        'text'  => $strTracker,
        'items' => array (
            array (
                'type'    => 'select',
                'name'    => 'tracker_default_status',
                'text'    => $strDefaultTrackerStatus,
                'items'   => $aStatuses
            ),
            array (
                'type'    => 'break'
            ),
            array (
                'type'    => 'select',
                'name'    => 'tracker_default_type',
                'text'    => $strDefaultTrackerType,
                'items'   => $aTrackerTypes
            ),
            array (
                'type'    => 'break'
            ),
            array (
                'type'    => 'checkbox',
                'name'    => 'tracker_link_campaigns',
                'text'    => $strLinkCampaignsByDefault
            )
        )
    )
);
$oOptions->show($aSettings, $aErrormessage);

// Display the page footer
phpAds_PageFooter();

?>
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

require_once MAX_PATH . '/lib/OA/Admin/Statistics/Delivery/CommonCrossHistory.php';

/**
 * The class to display the delivery statistcs for the page:
 *
 * Statistics -> Advertisers & Campaigns -> Advertiser History -> Daily Statistics
 *
 * and:
 *
 * Statistics -> Advertisers & Campaigns -> Publisher Distribution -> Distribution History -> Daily Statistics
 *
 * @package    OpenXAdmin
 * @subpackage StatisticsDelivery
 */
class OA_Admin_Statistics_Delivery_Controller_AdvertiserDaily extends OA_Admin_Statistics_Delivery_CommonCrossHistory
{

    /**
     * The final "child" implementation of the PHP5-style constructor.
     *
     * @param array $aParams An array of parameters. The array should
     *                       be indexed by the name of object variables,
     *                       with the values that those variables should
     *                       be set to. For example, the parameter:
     *                       $aParams = array('foo' => 'bar')
     *                       would result in $this->foo = bar.
     */
    function __construct($aParams)
    {
        // Set this page's entity/breakdown values
        $this->entity    = 'advertiser';
        $this->breakdown = 'daily';

        // Use the OA_Admin_Statistics_Daily helper class
        $this->useDailyClass = true;

        parent::__construct($aParams);
    }

    /**
     * The final "child" implementation of the parental abstract method.
     *
     * @see OA_Admin_Statistics_Common::start()
     */
    function start()
    {
        // Get parameters
        $advertiserId = $this->_getId('advertiser');
        $publisherId  = $this->_getId('publisher');
        $zoneId       = $this->_getId('zone');

        // Security check
        OA_Permission::enforceAccount(OA_ACCOUNT_ADMIN, OA_ACCOUNT_MANAGER, OA_ACCOUNT_ADVERTISER);
        $this->_checkAccess(array('advertiser' => $advertiserId));

        // Cross-entity security check
        if (!empty($zoneId)) {
            $aZones = $this->getAdvertiserZones($advertiserId);
            if (!isset($aZones[$zoneId])) {
                $this->noStatsAvailable = true;
            }
        } elseif (!empty($publisherId)) {
            $aPublishers = $this->getAdvertiserPublishers($advertiserId);
            if (!isset($aPublishers[$publisherId])) {
                $this->noStatsAvailable = true;
            }
        }

        // Add standard page parameters
        $this->aPageParams = array('clientid'  => $advertiserId);

        // Add the cross-entity parameters
        if (!empty($zoneId)) {
            $this->aPageParams['affiliateid'] = $aZones[$zoneId]['publisher_id'];
            $this->aPageParams['zoneid']      = $zoneId;
        } elseif (!empty($publisherId)) {
            $this->aPageParams['affiliateid'] = $publisherId;
        }

        // Load $_GET parameters
        $this->_loadParams();

        // HTML Framework
        if (OA_Permission::isAccount(OA_ACCOUNT_ADMIN) || OA_Permission::isAccount(OA_ACCOUNT_MANAGER)) {
            if (empty($publisherId) && empty($zoneId)) {
                $this->pageId = '2.1.1.1';
            } else {
                // Cross-entity
                $this->pageId = empty($zoneId) ? '2.1.3.1.1' : '2.1.3.2.1';
            }
            $this->aPageSections = array($this->pageId);
        } elseif (OA_Permission::isAccount(OA_ACCOUNT_ADVERTISER)) {
            if (empty($publisherId) && empty($zoneId)) {
                $this->pageId = '1.1.1';
            } else {
                // Cross-entity
                $this->pageId = empty($zoneId) ? '1.3.1.1' : '1.3.2.1';
            }
            $this->aPageSections = array($this->pageId);
        }

        // Add breadcrumbs
        $this->_addBreadcrumbs('advertiser', $advertiserId);
        if (!empty($zoneId)) {
            $this->addCrossBreadcrumbs('zone', $zoneId);
        } elseif (!empty($publisherId)) {
            $this->addCrossBreadcrumbs('publisher', $publisherId);
        }

        // Add shortcuts
        if (!OA_Permission::isAccount(OA_ACCOUNT_ADVERTISER)) {
            $this->_addShortcut(
                $GLOBALS['strClientProperties'],
                'advertiser-edit.php?clientid='.$advertiserId,
                'images/icon-advertiser.gif'
            );
        }

        // Prepare the data for display by output() method
        $aParams = array(
            'advertiser_id' => $advertiserId
        );
        if (!empty($zoneId)) {
            $aParams['zone_id'] = $zoneId;
        } elseif (!empty($publisherId)) {
            $aParams['publisher_id'] = $publisherId;
        }
        $this->prepare($aParams);
    }

}

?>
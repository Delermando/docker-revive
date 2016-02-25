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
 * Table Definition for affiliates (Affiliate is often called Publisher)
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Affiliates extends DB_DataObjectCommon
{
    var $onDeleteCascade = true;
    var $refreshUpdatedFieldIfExists = true;

    /**
     * BC-compatible user details
     *
     * @todo Please remove later
     */
    var $username;
    var $password;
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'affiliates';                      // table name
    public $affiliateid;                     // MEDIUMINT(9) => openads_mediumint => 129 
    public $agencyid;                        // MEDIUMINT(9) => openads_mediumint => 129 
    public $name;                            // VARCHAR(255) => openads_varchar => 130 
    public $mnemonic;                        // VARCHAR(5) => openads_varchar => 130 
    public $comments;                        // TEXT() => openads_text => 34 
    public $contact;                         // VARCHAR(255) => openads_varchar => 2 
    public $email;                           // VARCHAR(64) => openads_varchar => 130 
    public $website;                         // VARCHAR(255) => openads_varchar => 2 
    public $updated;                         // DATETIME() => openads_datetime => 142 
    public $oac_country_code;                // CHAR(2) => openads_char => 130 
    public $oac_language_id;                 // INT(11) => openads_int => 1 
    public $oac_category_id;                 // INT(11) => openads_int => 1 
    public $account_id;                      // MEDIUMINT(9) => openads_mediumint => 1 

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGetFromClassName('DataObjects_Affiliates',$k,$v); }

    var $defaultValues = array(
                'agencyid' => 0,
                'name' => '',
                'mnemonic' => '',
                'email' => '',
                'updated' => '%DATE_TIME%',
                'oac_country_code' => '',
                );

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    /**
     * Returns affiliateid.
     *
     * @return string
     */
    function getUserId()
    {
        return $this->affiliateid;
    }

    /**
     * Returns 0 if the last_accepted_agency_agreement is set to not null,
     * not zero value. Otherwise, returns 1.
     *
     * @return integer
     */
    function getNeedsToAgree()
    {
        return $this->last_accepted_agency_agreement ? 0 : 1;
    }

    function _auditEnabled()
    {
        return true;
    }

    function _getContextId()
    {
        return $this->affiliateid;
    }

    function _getContext()
    {
        return 'Affiliate';
    }

    /**
     * A method to return the ID of the manager account
     * that "owns" this advertiser account.
     *
     * @return integer The account ID of the "owning"
     *                 manager account. Returns the
     *                 admin account ID if no owning
     *                 manager account can be found.
     */
    function getOwningManagerId()
    {
        $doAgency = OA_Dal::factoryDO('agency');
        $doAgency->agencyid = $this->agencyid;
        $doAgency->find();
        if ($doAgency->getRowCount() == 1) {
            $doAgency->fetch();
            return $doAgency->account_id;
        } else {
            // Could not find the owning manager
            // account ID, return the ID of the
            // admin account instead
            return OA_Dal_ApplicationVariables::get('admin_account_id');
        }
    }

    /**
     * Handle all necessary operations when new trafficker is created
     *
     * @see DB_DataObject::insert()
     */
    function insert()
    {
        // Create account first
        $result = $this->createAccount(OA_ACCOUNT_TRAFFICKER, $this->name);
        if (!$result) {
            return $result;
        }

        // Store data to create a user
        if (!empty($this->username) && !empty($this->password)) {
            $aUser = array(
                'contact_name' => $this->contact,
                'email_address' => $this->email,
                'username' => $this->username,
                'password' => $this->password,
                'default_account_id' => $this->account_id
            );
        }

        $affiliateId = parent::insert();
        if (!$affiliateId) {
            return $affiliateId;
        }

        // Create user if needed
        if (!empty($aUser)) {
            $this->createUser($aUser);
        }

        return $affiliateId;
    }

    /**
     * Handle all necessary operations when a trafficker is updated
     *
     * @see DB_DataObject::update()
     */
    function update($dataObject = false)
    {
        // Store data to create a user
        if (!empty($this->username) && !empty($this->password)) {
            $aUser = array(
                'contact_name' => $this->contact,
                'email_address' => $this->email,
                'username' => $this->username,
                'password' => $this->password,
                'default_account_id' => $this->account_id
            );
        }

        $ret = parent::update($dataObject);
        if (!$ret) {
            return $ret;
        }

        // Create user if needed
        if (!empty($aUser)) {
            $this->createUser($aUser);
        }

        $this->updateAccountName($this->name);

        return $ret;
    }

    /**
     * Handle all necessary operations when a trafficker is deleted
     *
     * @see DB_DataObject::delete()
     */
    function delete($useWhere = false, $cascade = true, $parentid = null)
    {
        $result =  parent::delete($useWhere, $cascade, $parentid);
        if ($result) {
            $this->deleteAccount();
        }

        return $result;
    }

    /**
     * build an affiliates specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc']     = $this->name;
    }

}

?>

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

require_once(MAX_PATH.'/lib/OA/Upgrade/Migration.php');

class Migration_543 extends Migration
{

    function __construct()
    {
        //$this->__construct();

		$this->aTaskList_constructive[] = 'beforeAddTable__account_user_assoc';
		$this->aTaskList_constructive[] = 'afterAddTable__account_user_assoc';
		$this->aTaskList_constructive[] = 'beforeAddTable__account_user_permission_assoc';
		$this->aTaskList_constructive[] = 'afterAddTable__account_user_permission_assoc';
		$this->aTaskList_constructive[] = 'beforeAddTable__accounts';
		$this->aTaskList_constructive[] = 'afterAddTable__accounts';
		$this->aTaskList_constructive[] = 'beforeAddTable__users';
		$this->aTaskList_constructive[] = 'afterAddTable__users';
		$this->aTaskList_constructive[] = 'beforeAddField__affiliates__account_id';
		$this->aTaskList_constructive[] = 'afterAddField__affiliates__account_id';
		$this->aTaskList_constructive[] = 'beforeAddIndex__affiliates__account_id';
		$this->aTaskList_constructive[] = 'afterAddIndex__affiliates__account_id';
		$this->aTaskList_constructive[] = 'beforeAddField__agency__account_id';
		$this->aTaskList_constructive[] = 'afterAddField__agency__account_id';
		$this->aTaskList_constructive[] = 'beforeAddIndex__agency__account_id';
		$this->aTaskList_constructive[] = 'afterAddIndex__agency__account_id';
		$this->aTaskList_constructive[] = 'beforeAddField__clients__account_id';
		$this->aTaskList_constructive[] = 'afterAddField__clients__account_id';
		$this->aTaskList_constructive[] = 'beforeAddIndex__clients__account_id';
		$this->aTaskList_constructive[] = 'afterAddIndex__clients__account_id';


		$this->aObjectMap['affiliates']['account_id'] = array('fromTable'=>'affiliates', 'fromField'=>'account_id');
		$this->aObjectMap['agency']['account_id'] = array('fromTable'=>'agency', 'fromField'=>'account_id');
		$this->aObjectMap['clients']['account_id'] = array('fromTable'=>'clients', 'fromField'=>'account_id');
    }



	function beforeAddTable__account_user_assoc()
	{
		return $this->beforeAddTable('account_user_assoc');
	}

	function afterAddTable__account_user_assoc()
	{
		return $this->afterAddTable('account_user_assoc');
	}

	function beforeAddTable__account_user_permission_assoc()
	{
		return $this->beforeAddTable('account_user_permission_assoc');
	}

	function afterAddTable__account_user_permission_assoc()
	{
		return $this->afterAddTable('account_user_permission_assoc');
	}

	function beforeAddTable__accounts()
	{
		return $this->beforeAddTable('accounts');
	}

	function afterAddTable__accounts()
	{
		return $this->afterAddTable('accounts');
	}

	function beforeAddTable__users()
	{
		return $this->beforeAddTable('users');
	}

	function afterAddTable__users()
	{
		return $this->afterAddTable('users');
	}

	function beforeAddField__affiliates__account_id()
	{
		return $this->beforeAddField('affiliates', 'account_id');
	}

	function afterAddField__affiliates__account_id()
	{
		return $this->afterAddField('affiliates', 'account_id');
	}

	function beforeAddIndex__affiliates__account_id()
	{
		return $this->beforeAddIndex('affiliates', 'account_id');
	}

	function afterAddIndex__affiliates__account_id()
	{
		return $this->afterAddIndex('affiliates', 'account_id');
	}

	function beforeAddField__agency__account_id()
	{
		return $this->beforeAddField('agency', 'account_id');
	}

	function afterAddField__agency__account_id()
	{
		return $this->afterAddField('agency', 'account_id');
	}

	function beforeAddIndex__agency__account_id()
	{
		return $this->beforeAddIndex('agency', 'account_id');
	}

	function afterAddIndex__agency__account_id()
	{
		return $this->afterAddIndex('agency', 'account_id');
	}

	function beforeAddField__clients__account_id()
	{
		return $this->beforeAddField('clients', 'account_id');
	}

	function afterAddField__clients__account_id()
	{
		return $this->afterAddField('clients', 'account_id');
	}

	function beforeAddIndex__clients__account_id()
	{
		return $this->beforeAddIndex('clients', 'account_id');
	}

	function afterAddIndex__clients__account_id()
	{
		return $this->afterAddIndex('clients', 'account_id');
	}

}

?>
<?php

require_once(MAX_PATH.'/lib/OA/Upgrade/Migration.php');

class Migration_614 extends Migration
{

    function __construct()
    {
        //$this->__construct();

		$this->aTaskList_destructive[] = 'beforeRemoveField__accounts__m2m_password';
		$this->aTaskList_destructive[] = 'afterRemoveField__accounts__m2m_password';
		$this->aTaskList_destructive[] = 'beforeRemoveField__accounts__m2m_ticket';
		$this->aTaskList_destructive[] = 'afterRemoveField__accounts__m2m_ticket';


    }



	function beforeRemoveField__accounts__m2m_password()
	{
		return $this->beforeRemoveField('accounts', 'm2m_password');
	}

	function afterRemoveField__accounts__m2m_password()
	{
		return $this->afterRemoveField('accounts', 'm2m_password');
	}

	function beforeRemoveField__accounts__m2m_ticket()
	{
		return $this->beforeRemoveField('accounts', 'm2m_ticket');
	}

	function afterRemoveField__accounts__m2m_ticket()
	{
		return $this->afterRemoveField('accounts', 'm2m_ticket');
	}

}

?>
<?php

require_once(MAX_PATH.'/lib/OA/Upgrade/Migration.php');

class Migration_617 extends Migration
{

    function __construct()
    {
        //$this->__construct();

		$this->aTaskList_destructive[] = 'beforeRemoveField__campaigns__an_campaign_id';
		$this->aTaskList_destructive[] = 'afterRemoveField__campaigns__an_campaign_id';
		$this->aTaskList_destructive[] = 'beforeRemoveField__campaigns__as_campaign_id';
		$this->aTaskList_destructive[] = 'afterRemoveField__campaigns__as_campaign_id';
		$this->aTaskList_destructive[] = 'beforeRemoveField__campaigns__an_status';
		$this->aTaskList_destructive[] = 'afterRemoveField__campaigns__an_status';
		$this->aTaskList_destructive[] = 'beforeRemoveField__campaigns__as_reject_reason';
		$this->aTaskList_destructive[] = 'afterRemoveField__campaigns__as_reject_reason';


    }



	function beforeRemoveField__campaigns__an_campaign_id()
	{
		return $this->beforeRemoveField('campaigns', 'an_campaign_id');
	}

	function afterRemoveField__campaigns__an_campaign_id()
	{
		return $this->afterRemoveField('campaigns', 'an_campaign_id');
	}

	function beforeRemoveField__campaigns__as_campaign_id()
	{
		return $this->beforeRemoveField('campaigns', 'as_campaign_id');
	}

	function afterRemoveField__campaigns__as_campaign_id()
	{
		return $this->afterRemoveField('campaigns', 'as_campaign_id');
	}

	function beforeRemoveField__campaigns__an_status()
	{
		return $this->beforeRemoveField('campaigns', 'an_status');
	}

	function afterRemoveField__campaigns__an_status()
	{
		return $this->afterRemoveField('campaigns', 'an_status');
	}

	function beforeRemoveField__campaigns__as_reject_reason()
	{
		return $this->beforeRemoveField('campaigns', 'as_reject_reason');
	}

	function afterRemoveField__campaigns__as_reject_reason()
	{
		return $this->afterRemoveField('campaigns', 'as_reject_reason');
	}

}

?>
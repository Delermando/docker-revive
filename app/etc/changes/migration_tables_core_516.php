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

class Migration_516 extends Migration
{

    function __construct()
    {
        //$this->__construct();

		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_country_daily';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_country_daily';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_country_forecast';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_country_forecast';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_country_monthly';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_country_monthly';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_domain_page_daily';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_domain_page_daily';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_domain_page_forecast';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_domain_page_forecast';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_domain_page_monthly';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_domain_page_monthly';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_site_keyword_daily';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_site_keyword_daily';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_site_keyword_forecast';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_site_keyword_forecast';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_site_keyword_monthly';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_site_keyword_monthly';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_source_daily';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_source_daily';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_source_forecast';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_source_forecast';
		$this->aTaskList_destructive[] = 'beforeRemoveTable__data_summary_zone_source_monthly';
		$this->aTaskList_destructive[] = 'afterRemoveTable__data_summary_zone_source_monthly';


    }



	function beforeRemoveTable__data_summary_zone_country_daily()
	{
		return $this->beforeRemoveTable('data_summary_zone_country_daily');
	}

	function afterRemoveTable__data_summary_zone_country_daily()
	{
		return $this->afterRemoveTable('data_summary_zone_country_daily');
	}

	function beforeRemoveTable__data_summary_zone_country_forecast()
	{
		return $this->beforeRemoveTable('data_summary_zone_country_forecast');
	}

	function afterRemoveTable__data_summary_zone_country_forecast()
	{
		return $this->afterRemoveTable('data_summary_zone_country_forecast');
	}

	function beforeRemoveTable__data_summary_zone_country_monthly()
	{
		return $this->beforeRemoveTable('data_summary_zone_country_monthly');
	}

	function afterRemoveTable__data_summary_zone_country_monthly()
	{
		return $this->afterRemoveTable('data_summary_zone_country_monthly');
	}

	function beforeRemoveTable__data_summary_zone_domain_page_daily()
	{
		return $this->beforeRemoveTable('data_summary_zone_domain_page_daily');
	}

	function afterRemoveTable__data_summary_zone_domain_page_daily()
	{
		return $this->afterRemoveTable('data_summary_zone_domain_page_daily');
	}

	function beforeRemoveTable__data_summary_zone_domain_page_forecast()
	{
		return $this->beforeRemoveTable('data_summary_zone_domain_page_forecast');
	}

	function afterRemoveTable__data_summary_zone_domain_page_forecast()
	{
		return $this->afterRemoveTable('data_summary_zone_domain_page_forecast');
	}

	function beforeRemoveTable__data_summary_zone_domain_page_monthly()
	{
		return $this->beforeRemoveTable('data_summary_zone_domain_page_monthly');
	}

	function afterRemoveTable__data_summary_zone_domain_page_monthly()
	{
		return $this->afterRemoveTable('data_summary_zone_domain_page_monthly');
	}

	function beforeRemoveTable__data_summary_zone_site_keyword_daily()
	{
		return $this->beforeRemoveTable('data_summary_zone_site_keyword_daily');
	}

	function afterRemoveTable__data_summary_zone_site_keyword_daily()
	{
		return $this->afterRemoveTable('data_summary_zone_site_keyword_daily');
	}

	function beforeRemoveTable__data_summary_zone_site_keyword_forecast()
	{
		return $this->beforeRemoveTable('data_summary_zone_site_keyword_forecast');
	}

	function afterRemoveTable__data_summary_zone_site_keyword_forecast()
	{
		return $this->afterRemoveTable('data_summary_zone_site_keyword_forecast');
	}

	function beforeRemoveTable__data_summary_zone_site_keyword_monthly()
	{
		return $this->beforeRemoveTable('data_summary_zone_site_keyword_monthly');
	}

	function afterRemoveTable__data_summary_zone_site_keyword_monthly()
	{
		return $this->afterRemoveTable('data_summary_zone_site_keyword_monthly');
	}

	function beforeRemoveTable__data_summary_zone_source_daily()
	{
		return $this->beforeRemoveTable('data_summary_zone_source_daily');
	}

	function afterRemoveTable__data_summary_zone_source_daily()
	{
		return $this->afterRemoveTable('data_summary_zone_source_daily');
	}

	function beforeRemoveTable__data_summary_zone_source_forecast()
	{
		return $this->beforeRemoveTable('data_summary_zone_source_forecast');
	}

	function afterRemoveTable__data_summary_zone_source_forecast()
	{
		return $this->afterRemoveTable('data_summary_zone_source_forecast');
	}

	function beforeRemoveTable__data_summary_zone_source_monthly()
	{
		return $this->beforeRemoveTable('data_summary_zone_source_monthly');
	}

	function afterRemoveTable__data_summary_zone_source_monthly()
	{
		return $this->afterRemoveTable('data_summary_zone_source_monthly');
	}

}

?>
<?php

class Application_Model_DbTable_Rss extends Zend_Db_Table_Abstract
{

    protected $_name = 'rssTable';

    function addRss($rssInfo){
    	$row = $this->createRow();
    	$row->rss_link = $rssInfo['rss'];
    	
    	return $row->save();
    }

    function listRss(){
		return $this->fetchAll()->toArray();
    }
}


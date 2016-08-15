<?php
class cleanUpOxremark extends cleanUpOxremark_parent { 

  function login($sUser, $sPassword, $blCookie = false) {
	  if ($this->isAdmin()) {
      $myConfig = $this->getConfig();
      $oDb = oxDb::getDb();
			$sSql = "";
			
			// create index
			if (!$myConfig->getConfigParam( 'blOxremarkIndexOxcraete' )) {
			  $myConfig->setConfigParam( 'blOxremarkIndexOxcraete', true );
			  $sSql = "CREATE INDEX OXCREATE ON oxremark (OXCREATE) ";
			  $oDb->execute($sSql);
			  }
  
			// OXTYPE : o - order, r - remark, n - newsletter, c - registration
			// clean up general - order
      $iCleanUpDays = $myConfig->getConfigParam( 'iCleanUpDays' );
    	if ($iCleanUpDays > 0) {
    	  $iCleanUpDate = date('Y-m-d', time() - ($iCleanUpDays * 86400)); 
        $sSql = "delete from oxremark where oxremark.oxcreate < '$iCleanUpDate' ";
    		$oDb->execute($sSql);
    	  } 
			// clean up remark
      $iCleanUpDays = $myConfig->getConfigParam( 'iCleanUpDaysRemark' );
    	if ($iCleanUpDays > 0) {
    	  $iCleanUpDate = date('Y-m-d', time() - ($iCleanUpDays * 86400)); 
        $sSql  = "delete from oxremark where oxremark.oxcreate < '$iCleanUpDate' ";
				$sSql .= "where oxremark.oxtype = 'r' ";
    		$oDb->execute($sSql);
    	  } 
			// clean up newsletter
      $iCleanUpDays = $myConfig->getConfigParam( 'iCleanUpDaysNotes' );
    	if ($iCleanUpDays > 0) {
    	  $iCleanUpDate = date('Y-m-d', time() - ($iCleanUpDays * 86400)); 
        $sSql  = "delete from oxremark where oxremark.oxcreate < '$iCleanUpDate' ";
				$sSql .= "where oxremark.oxtype = 'n' ";
    		$oDb->execute($sSql);
    	  } 
			// clean up registration
      $iCleanUpDays = $myConfig->getConfigParam( 'iCleanUpDaysRegistration' );
    	if ($iCleanUpDays > 0) {
    	  $iCleanUpDate = date('Y-m-d', time() - ($iCleanUpDays * 86400)); 
        $sSql  = "delete from oxremark where oxremark.oxcreate < '$iCleanUpDate' ";
				$sSql .= "where oxremark.oxtype = 'c' ";
    		$oDb->execute($sSql);
    	  } 
			}
    return parent::login($sUser, $sPassword, $blCookie);
		}
	}

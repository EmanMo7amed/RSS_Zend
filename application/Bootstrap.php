<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initSession(){
		Zend_Session::start();
		$session = new Zend_Session_Namespace( 'Zend_Auth' );
		$session->setExpirationSeconds( 900 );
	}

	protected function _initPlaceholders()
	{
		$this->bootstrap('View');
		$view = $this->getResource('View');
		
		$view->headTitle('RSS Site');

		$view->headLink()->prependStylesheet('/RSS/public/assets/css/bootstrap-theme.css');
		$view->headLink()->prependStylesheet('/RSS/public/assets/css/bootstrap.min.css');
		$view->headLink()->prependStylesheet('/RSS/public/assets/css/font-awesome.min.css');
		$view->headLink()->appendStylesheet('/RSS/public/assets/css/style.css');

		$view->headScript()->prependFile('/RSS/public/assets/js/custom.js');
		$view->headScript()->prependFile('/RSS/public/assets/js/bootstrap.min.js');
		$view->headScript()->prependFile('/RSS/public/assets/js/jquery.min.js');

		$view->headMeta()->appendName('viewport', 'width=device-width, initial-scale=1.0');
		$view->headMeta()->appendName('description', 'eLearning is a modern and fully responsive Template by WebThemez.');
		$view->headMeta()->appendName('author', 'webThemez.com');

		$view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf8');

	}

}


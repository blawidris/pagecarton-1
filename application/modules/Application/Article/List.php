<?php
/**
 * PageCarton Content Management System
 *
 * LICENSE
 *
 * @category   PageCarton CMS
 * @package    Application_Article_List
 * @copyright  Copyright (c) 2011-2016 PageCarton (http://www.pagecarton.com)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: List.php 5.11.2012 12.02am ayoola $
 */

/**
 * @see Application_Article_Abstract
 */
 
require_once 'Application/Article/Abstract.php';


/**
 * @category   PageCarton CMS
 * @package    Application_Article_List
 * @copyright  Copyright (c) 2011-2016 PageCarton (http://www.pagecarton.com)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

class Application_Article_List extends Application_Article_Abstract
{
		
    /**
     * The method does the whole Class Process
     * 
     */
	protected function init()
    {
//		$this->setViewContent( '<h3>OPTIONS:</h3>' );		
	//	$this->setViewContent( '<a title="Compose an article..." rel="shadowbox;changeElementId=' . $this->getObjectName() . /'" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Creator/">+</a>' );
		$this->setViewContent( $this->getList() );
    } 
	
    /**
     * creates the list of the available subscription packages on the application
     * 
     */
	public function createList()
    {
		require_once 'Ayoola/Paginator.php';
		$list = new Ayoola_Paginator();
		$list->pageName = $this->getObjectName();
		$list->listTitle = 'Posts on this application';
	//	var_export( $this->getDbData() );
	//	$data = $this->getDbData();
	//	foreach( $data as $
		$list->setData( $this->getDbData() );
		$list->setListOptions( array( 'Creator' => '<a title="Compose an post..." rel="shadowbox;changeElementId=' . $this->getObjectName() . '" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Creator/">+</a>' ) );
		$this->setIdColumn( 'article_url' );
		$list->setKey( 'article_url' );
		$list->setNoRecordMessage( 'You have not writen any article yet. <a rel="shadowbox;changeElementId=' . $this->getObjectName() . '" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Creator/">Write!</a>' );
		$list->createList(  
			array(
				'article_url' => '<a rel="shadowbox;changeElementId=' . $this->getObjectName() . '" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Editor/?' . $this->getIdColumn() . '=%KEY%">%FIELD%</a>', 
				'o' => '<a title="Preview article." rel="shadowbox;changeElementId=' . $this->getObjectName() . '" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_View/?' . $this->getIdColumn() . '=%KEY%">0</a>', 
				'X' => '<a title="Delete" rel="shadowbox;height=300px;width=300px;changeElementId=' . $this->getObjectName() . '" href="' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Delete/?' . $this->getIdColumn() . '=%KEY%">X</a>', 
			)
		);
		//var_export( $list );
		return $list;
    } 
	// END OF CLASS
}

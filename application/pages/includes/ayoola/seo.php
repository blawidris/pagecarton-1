<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /ayoola/seo
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: seo.php	Wednesday 20th of January 2016 11:03:39 AM	 $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$objay__middlebar0objectEmbed = new Ayoola_Object_Embed( array (
  'view' => 'Embed PHP Class',
  'editable' => 'Application_Link_List',
) );

							}
							else
							{
								
$objay__middlebar0objectEmbed = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Menu' ) )
							{
								
$objay__leftbar0menuView = new Ayoola_Menu( array (
  'view' => 'Display a Menu',
  'option' => 'page',
) );

							}
							else
							{
								
$objay__leftbar0menuView = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$objay__leftbar1objectEmbed = new Ayoola_Object_Embed( array (
  'view' => 'Embed PHP Class',
  'editable' => 'Application_Link_Sitemap',
) );

							}
							else
							{
								
$objay__leftbar1objectEmbed = null;

							}
							
<?php

	/** ------------------------------------------------------------------------------ **
	 *  CMS Configuration File 															*
	 ** ------------------------------------------------------------------------------ **
	 *	Version 					   0.5											    *
	 *  Date Created                   23/11/2016                                       *
	 *  Date Updated                   15/03/2017                                       *
	 ** ------------------------------------------------------------------------------ **/

	/** ------------------------------------------------------------------------------ **
	 * Start the session and set the timezone parameter.							    *
	 ** ------------------------------------------------------------------------------ **/
	ob_start();
	session_start();

	/* -------------------------------------------------------------------------------- */

	date_default_timezone_set('Europe/London');

	/** ------------------------------------------------------------------------------ **
	 * Establish iSV Database connection parameters. 								    *
	 ** ------------------------------------------------------------------------------ **/
	define('DBHOST','localhost');
	define('DBUSER','vp_admin');
	define('DBPASS','!6538xXR');
	define('DBNAME','vp_portal');

	/** ------------------------------------------------------------------------------ **
	 *	Domain information							 								    *
	 ** ------------------------------------------------------------------------------ **/
	define('DIR','http://localhost/vp/');
	// define('DIR','http://www.isvonline.co.za/');
	define('SITEEMAIL','noreply@isvonline.co.za');

	/** ------------------------------------------------------------------------------ **
	 *	Create PDO objects with the specified database parameters, throw an error if 	*
	 *	not successful.							 								    	*
	 ** ------------------------------------------------------------------------------ **/
	try 
	{
		$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} 
	catch(PDOException $e) 
	{
	    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
	    exit;
	}


	/** ------------------------------------------------------------------------------ **
	 * Import classes & modules required.												*
	 ** ------------------------------------------------------------------------------ **/
	include('classes/user.php');
	include('classes/phpmailer/mail.php');

	/** ------------------------------------------------------------------------------ **
	 *	Create new AdminUser object of the 'AdminUser' class      						*
	 ** ------------------------------------------------------------------------------ **/
	$user = new User($db);

	/* -------------------------------------------------------------------------------- */

?>

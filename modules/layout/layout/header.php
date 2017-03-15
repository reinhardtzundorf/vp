<!-- Header.php -->
<!DOCTYPE html>

<!-- HTML -->
<html lang="en">

	<!-- Head -->
	<head>
		<!-- Meta charset -->
	    <meta charset="utf-8"><!-- /meta -->

	    <!-- title -->
	    <title>
	    <?php 

	   		/** ------------------------------------------------------------------ **
	   		 *	Set the current page's title, if '$title' does not have a value 	*
	   		 *  then set the default value. 										*
	   		 ** ------------------------------------------------------------------ **/
	    	if(isset($title)) 
	    	{ 
	    		echo $title; 
	    	}
	    	else
	    	{
	    		echo "Volunteers Portal | Insight Student Volunteers";
	    	}
		?>
	    </title><!-- /title -->

	    <!-- CSS -->
	    <link rel="stylesheet" href="../../../res/css/bootstrap.css">		<!-- Bootstrap -->
	    <link rel="stylesheet" href="../../../res/css/bootstrap-theme.css"> <!-- Bootstrap-Theme -->
	    <link rel="stylesheet" href="../../../res/css/font-awesome.min.css"><!-- Font-Awesome -->
	    <link rel="stylesheet" href="../../../res/css/style/main.css">		<!-- Portal Style -->
	    <!-- /css -->

	</head><!-- /head -->

	<!-- Body -->
	<body>

	<!-- Content for page is inserted here... -->
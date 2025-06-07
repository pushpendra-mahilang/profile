<?php 
  include_once 'td_includes.php';
?>
<!doctype html>
<html >

<head>
   <?php 
      include_once 'html_title.php';
      include_once 'header_plugin.php'; 
   ?>
</head>

<body>

  <?php

			   include_once 'html_header.php';

			   if ($_GET['page']=="" || $_GET['page']=='dashboard') {
								include_once 'View/html_dashboard.php';
							}
				 if ($_GET['page']=='portfolio') {
								include_once 'View/html_portfolio.php';
							}
				 if ($_GET['page']=='about') {
						    include_once 'View/html_about.php';
					}
				 if ($_GET['page']=='contact') {
						    include_once 'View/html_contact.php';
					}
				 if ($_GET['page']=='services') {
						    include_once 'View/html_services.php';
					}

					
				
				// if ($_GET['page']=='department_master') {
				// 	include_once 'View/html_department_master.php';
				// }
        
				// else if ($_GET['page']=='signout') {
				// 	unset($_SESSION['userslug']);
				// 	header("location:".$baseurl.'login.php');
				// }


   ?>
	
	

	<?php 
       include_once 'html_footer.php';
	     include_once 'footer_plugin.php';
	 ?>
</body>

</html>
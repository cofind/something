<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
// Include database connection and functions here.  See 3.1. 
sec_session_start(); 
if(login_check($mysqli) == true) {
        // Add your protected page content here!
		include 'php/functions.php';
	    // Get list of harvesters
		$db = new Db();
		$rows = $db -> select("SELECT * from mashine_config where type = 'forwarder' and sms_service = 'Y'");




?>

		<nav id="sidebar">		
			
			<ul id="main-nav" class="open-active">			

				<li class="active">				
					<a href="./index.html">
						<i class="fa fa-dashboard"></i>
						Galvenais Panelis
					</a>				
				</li>
				<li>				
					<a href="./calendar.html">
						<i class="fa fa-calendar"></i>
						Kalendars
					</a>				
				</li>

				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						Forwarders
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
	
<?php
$x=1;
	
while($x <= max(array_keys($rows))) {

	echo '<li>';
		echo '<a href="./page-settings.html?id=' . $rows[$x][mashine_name] . '">';
			echo '<i class="glyphicon glyphicon-tree-conifer"></i> ';
	print($rows[$x][mashine_desc]);
			echo '</a>';
		echo '</li>';
		
		
    $x++;

} 

?>


						</ul>						
					
				</li>	


				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						Harvesters
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
		
		
		

<?php


    $db = new Db();
    $rows = $db -> select("SELECT * from mashine_config where type = 'harvester' and active_yn = 'Y' order by mashine_name ");

$x=1;
	
while($x <= max(array_keys($rows))) {

	echo '<li>';
		echo '<a href="./page-settings.html?id=' . $rows[$x][mashine_name] . '">';
			echo '<i class="glyphicon glyphicon-tree-conifer"></i> ';
	print($rows[$x][mashine_name]);
			echo '</a>';
		echo '</li>';
		
		
    $x++;

} 





?>


						</ul>						
					
				</li>	

 
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						Cirsmas
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
						<li>
							<a href="./site-details.html">
								<i class="fa fa-user"></i> 
								Pārskats
							</a>
						</li>
						<li>
							<a href="./sms-details.html">
								<i class="fa fa-user"></i> 
								Sortimenti
							</a>
						</li>
						<li>
							<a href="./sms-details.html">
								<i class="fa fa-user"></i> 
								SMS Atskaites
							</a>
						</li>




	
						<? /*
						<li>
							<a href="./page-support.html">
								<i class="fa fa-question"></i> 
								Support Page
							</a>
						</li>
						<li>
							<a href="./page-gallery.html">
								<i class="fa fa-picture-o"></i> 
								Gallery
							</a>
						</li>
						<li>
							<a href="./page-settings.html">
								<i class="fa fa-cogs"></i> 
								Settings
							</a>
						</li>
						<li>
						
							<a href="./page-calendar.html">
								<i class="fa fa-calendar"></i> 
								Calendar
							</a>
						</li>
					*/ ?>
					</ul>						
			
				</li>	

				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-envelope-o"></i>
						Ziņu centrs
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
						<li>
							<a href="./site-details.html">
								<i class="fa fa-cog"></i> 
								Uzstādījumi
							</a>
						</li>

						<li>
							<a href="./site-details.html">
								<i class="fa fa-envelope-o"></i> 
								Ziņu Centrs
							</a>
						</li>
						<li>
							<a href="./site-details.html">
								<i class="fa fa-file-text-o"></i> 
								Atgādinājumu centrs
							</a>
						</li>
						</ul>

					</li>	
				
				
				
				
				<? /*
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						Example Pages
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
						<li>
							<a href="./page-profile.html">
								<i class="fa fa-user"></i> 
								Profile
							</a>
						</li>
						<li>
							<a href="./page-invoice.html">
								<i class="fa fa-money"></i> 
								Invoice
							</a>
						</li>
						<li>
							<a href="./page-pricing.html">
								<i class="fa fa-dollar"></i> 
								Pricing Plans
							</a>
						</li>
						<li>
							<a href="./page-support.html">
								<i class="fa fa-question"></i> 
								Support Page
							</a>
						</li>
						<li>
							<a href="./page-gallery.html">
								<i class="fa fa-picture-o"></i> 
								Gallery
							</a>
						</li>
						<li>
							<a href="./page-settings.html">
								<i class="fa fa-cogs"></i> 
								Settings
							</a>
						</li>
						<li>
							<a href="./page-calendar.html">
								<i class="fa fa-calendar"></i> 
								Calendar
							</a>
						</li>
					</ul>						
					
				</li>	
				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-tasks"></i>
						Form Elements
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="./form-regular.html">
								<i class="fa fa-location-arrow"></i>
								Regular Elements
							</a>
						</li>
						<li>
							<a href="./form-extended.html">
								<i class="fa fa-magic"></i>
								Extended Elements
							</a>
						</li>	
						<li>
							<a href="./form-validation.html">
								<i class="fa fa-check"></i>
								Validation
							</a>
						</li>			
					</ul>	
									
				</li>
				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-desktop"></i>
						UI Features
						<span class="caret"></span>
					</a>	

					<ul class="sub-nav">
						<li>
							<a href="./ui-buttons.html">
								<i class="fa fa-hand-o-up"></i>
								Buttons
							</a>
						</li>
						<li>
							<a href="./ui-tabs.html">
								<i class="fa fa-reorder"></i>
								Tabs & Accordions
							</a>
						</li>

						<li>
							<a href="./ui-popups.html">
								<i class="fa fa-asterisk"></i>
								Popups / Notifications
							</a>
						</li>	

						<li>
							<a href="./ui-sliders.html">
								<i class="fa fa-tasks"></i>
								Sliders
							</a>
						</li>	
				
						<li class="">
							<a href="./ui-typography.html">
								<i class="fa fa-font"></i>
								Typography
							</a>
						</li>	
				
						<li class="">
							<a href="./ui-icons.html">
								<i class="fa fa-star-o"></i>
								Icons
							</a>
						</li>	
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-table"></i>
						Tables
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="./table-basic.html">
								<i class="fa fa-table"></i> 
								Basic Tables
							</a>
						</li>		
						<li>
							<a href="./table-advanced.html">
								<i class="fa fa-table"></i> 
								Advanced Tables
							</a>
						</li>
						<li>
							<a href="./table-responsive.html">
								<i class="fa fa-table"></i> 
								Responsive Tables
							</a>
						</li>	
					</ul>	
									
				</li>

				<li>
					<a href="./ui-portlets.html">
						<i class="fa fa-list-alt"></i>
						Portlets
					</a>
				</li>
				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-bar-chart-o"></i>
						Charts & Graphs
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="./chart-flot.html">
								<i class="fa fa-bar-chart-o"></i> 
								jQuery Flot
							</a>
						</li>
						<li>
							<a href="./chart-morris.html">
								<i class="fa fa-bar-chart-o"></i> 
								Morris.js
							</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="javascript:;">
						<i class="fa fa-file-text-o"></i>
						Extra Pages
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="./page-login.html">
								<i class="fa fa-unlock"></i> 
								Login Basic
							</a>
						</li>
						<li>
							<a href="./page-login-social.html">
								<i class="fa fa-unlock"></i> 
								Login Social
							</a>
						</li>
						<li>
							<a href="./page-404.html">
								<i class="fa fa-ban"></i> 
								404 Error
							</a>
						</li>
						<li>
							<a href="./page-500.html">
								<i class="fa fa-ban"></i> 
								500 Error
							</a>
						</li>
						<li>
							<a href="./page-blank.html">
								<i class="fa fa-file-text-o"></i> 
								Blank Page
							</a>
						</li>
					</ul>
				</li>
*/?>
			</ul>
					
		</nav> <!-- #sidebar -->









<?

} else { 
        header('Location: page-login.html?error=1');
}


?>


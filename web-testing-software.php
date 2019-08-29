<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
  <!-- Site Title-->
  <title>Functional Testing a Web Application - AppPerfect</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
  <meta name="description" content="This tutorial provides a brief introduction to the AppPerfect Web Test product using a set of hands-on practice exercises.">
  <meta name="keywords" content="AppPerfect Corporation">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <link rel="stylesheet" href="/plugins/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300%7CRoboto+Slab:400,700%7CMontserrat:700%7CPacifico">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head undefined position-background" style='background-image: url(/images1/web-test-bg-1.jpg);'  >
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap header-corporate">
          <!-- <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="100px"> -->
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="100px">
            <div class="rd-navbar-top-panel bg-primary">
              <div class="rd-navbar-inner">
                <button data-rd-navbar-toggle=".list-inline" type="submit" class="rd-navbar-collapse-toggle"><span></span></button><a href="mailto:support@appperfect.com" class="fa-envelope">support@appperfect.com</a><a href="callto:+1-408-252-4100 " class="fa-mobile-phone custom-margin-topnav">+1-408-252-4100</a><a href="/sales/index.php" class="fa-shopping-bag custom-margin-topnav">Sales</a>
                <a href="/download/index.php" class="fa-download preffix-2">Downloads</a>
                <ul class="list-inline pull-right list-head-social">
                  <li><a target="_blank" href="http://www.facebook.com/AppPerfect" class="fa-facebook"></a></li>
                  <li><a target="_blank" href="http://www.youtube.com/AppPerfect" class="fa-youtube-play"></a></li>
                  <li><a target="_blank" href="http://www.linkedin.com/company/appperfect-corp-" class="fa-linkedin" ></a></li>
                  <li><a target="_blank" href="https://plus.google.com/107544096333694710843/about" class="fa-google-plus"></a></li>
                  <li><a target="_blank" href="http://www.twitter.com/AppPerfect" class="fa-twitter"></a></li>
                  <li><a target="_blank" href="http://www.slideshare.net/AppPerfect" class="fa-slideshare"></a></li>
                  <li class="text-left"><a href="mailto:support@appperfect.com" class="fa-envelope">support@appperfect.com</a></li>
                  <li class="text-left"><a href="callto:+1-408-252-4100" class="fa-mobile-phone">+1-408-252-4100</a></li>
                  <li class="text-left"><a href="/sales/index.php" class="fa-shopping-bag">Sales</a></li>
                  <li class="text-left"><a href="/download/index.php" class="fa-download">Downloads</a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" type="submit" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="/" class="brand-name">
                  <img src="/images/logo.svg" alt="AppPerfect Corporation"/></a>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap " >
                <!-- RD Navbar Search-->
<!--
                <div class="rd-navbar-search">
                  <form action="search.php" method="GET" class="rd-navbar-search-form">
                    <label class="rd-navbar-search-form-input">
                      <input type="text" name="s" placeholder="Search.." autocomplete="off">
                    </label>
                    <button type="submit" class="rd-navbar-search-form-submit fa-shopping-cart"></button>
                  </form><span class="rd-navbar-live-search-results"></span>
                  <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results" type="submit" class="rd-navbar-search-toggle"></button>
                </div><a href="shop-cart.php" class="fa-shopping-cart"><span>10</span></a>
              -->
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav width-max-content">
                <li><a href="/products/" class="">Products</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/products/agentless-monitor.php">Agentless Monitor</a></li>
                    <li><a href="/products/load-test.php">Load Test</a></li>
                    <li><a href="/products/web-test.php">Web Test</a></li>
                    <li><a href="/products/test-manager.php">Test Manager</a></li>
                    <li><a href="/products/big-data-analytics-solution.php">Big Data Analytics - QueryIO</a></li>
                    <li><a href="/download/">Downloads</a></li>
                  </ul>
                </li>

                <li><a href="/services/" class="">Services</a></li>

                <li><a href="/services/software-development-services/" class="">Development</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/services/software-development-services/web-application-development.php">Web Application Development</a></li>
                    <li><a href="/services/software-development-services/mobile-application-development.php">Mobile Application Development</a></li>
                    <li><a href="/services/software-development-services/desktop-application-development.php">Desktop Application Development</a></li>
                 
                    <li><a href="/services/software-development-services/distributed-caching.php">Distributed Caching</a></li>
                    <li><a href="/services/software-development-services/nosql-solutions.php">NoSQL Solutions</a></li>
                    <li><a href="/services/software-development-services/message-broker-and-messaging-middleware.php">Message Broker & Messaging Middleware</a></li>
                    <li><a href="/services/software-development-services/database-design-and-development.php">Database Design & Development</a></li>
                    <li><a href="/services/software-development-services/profiling-and-system-tuning.php">Profiling & System Tuning</a></li>

                  </ul>
                </li>
                <li><a href="/services/performance-and-functional-testing/" class="">Testing</a>
                  <ul class="rd-navbar-dropdown">
                    <li class="dropdown-header"><a href="/services/performance-and-functional-testing/performance-testing.php">Performance/Load Testing</a></li>
                    <li><a href="/services/load-testing/web-load-testing.php">Web Application Testing</a></li>
                    <li><a href="/services/load-testing/web-services-load-testing.php">Web Services Testing</a></li>
                    <li><a href="/services/performance-and-functional-testing/mobile-application-load-testing.php">Mobile Application Load Testing</a></li>
                    <li><a href="/services/load-testing/database-load-testing.php">Database Testing</a></li>
                    <li><a href="/support/tutorials/distributed-load-testing.php">Distributed Testing</a></li>
                    <li><a href="/services/cloud-computing/cloud-hosted-testing.php">Cloud Hosted Testing</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header"><a href="/services/performance-and-functional-testing/functional-testing.php">Functional Testing</a></li>
                    <li><a href="/services/web-testing/functional-testing.php">Web Functional Testing</a></li>
                    <li><a href="/services/performance-and-functional-testing/mobile-application-functional-testing.php">Mobile Application Functional Testing</a></li>           
                    <li><a href="/services/web-testing/cross-browser-testing.php">Cross Browser Testing</a></li>
                  </ul>
                </li>
                <li><a href="/services/operations-and-monitoring/" class="">Monitoring</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/services/operations-and-monitoring/24-7-site-operations.php">24/7 Site Operations</a></li>
                    <li><a href="/services/operations-and-monitoring/infrastructure-monitoring.php">Infrastructure Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/transactional-monitoring.php">Transactional Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/functional-monitoring.php">Functional Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/system-monitoring.php">System Monitoring</a></li>
                    <li><a href="/services/monitoring/database-monitoring.php">Database Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/network-monitoring.php">Network Monitoring</a></li>
                    <li><a href="/services/monitoring/server-monitoring.php">Server Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/cluster-monitoring.php">Cluster Monitoring</a></li>
                    <li><a href="/services/operations-and-monitoring/custom-monitoring-dashboard.php">Custom Monitoring Dashboards</a></li>
                    <li><a href="/services/operations-and-monitoring/splunk-based-monitoring.php">Splunk-based Monitoring</a></li>

                  </ul>
                </li>

                  <li><a href="/services/salesforce"  class="" >Salesforce</a></li>  

                  <li><a href="/security"  class="" >Security </a>
                    <ul class="rd-navbar-dropdown">
                    <li><a href="/security/web-application-security/index.php">Web Application Security</a></li>
                    <li><a href="/security/data-security/index.php">Data Security</a></li>
                    <li><a href="/security/cloud-security/index.php">Cloud Security</a></li>
                    <li><a href="/security/container-security/index.php">Container Security</a></li>
                    <li><a href="/security/network-security/index.php">Network Security</a></li>
                    <li><a href="/security/penetration-testing/index.php">Penetration Testing</a></li>
                    
                  </ul>  

                  </li>  
                  

                <li><a href="/services/big-data-services/" class="">Big Data</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/services/big-data-services/big-data-implementation.php">Big Data Implementation</a></li>
                    <li><a href="/services/big-data-services/big-data-optimization.php">Big Data Optimization</a></li>
                    <li><a href="/services/big-data-services/big-data-analytics.php">Big Data Analytics</a></li>
                    <li><a href="/services/big-data-services/custom-big-data-solutions.php">Custom Big Data Solutions</a></li>
                    <li><a href="/services/big-data-services/big-data-cluster-management.php">Big Data Cluster Management</a></li>
                    <li><a href="/services/big-data-services/big-data-mining-aggregation.php">Data Mining & Data Aggregation</a></li>

                  </ul>
                </li>
                <li><a href="/support/" class="nav-btn-active">Support</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/sales/index.php">Professional Support / Services</a></li>
                    <li><a href="/forums/" target="_blank">AppPerfect User Forums</a></li>
                    <li><a href="/support/tutorials/">Online Tutorials</a></li>
                    <li><a href="/support/demo/">Online Demos</a></li>
                    <li><a href="/support/online-docs.php">Online Documentation</a></li>
                    <li><a href="/support/appperfect-feedback.php">Reporting Bugs/Enhancements</a></li>
                  </ul>
                </li>

               
                  
                <li><a href="/company/" class="">Company</a>
                  <ul class="rd-navbar-dropdown">
                    <li><a href="/company/careers.php" >Careers</a></li>
                    <li><a href="/company/">About Us</a></li>
                    <li><a href="/company/contact.php">Contact Us</a></li>
                    <li><a target="blank" href="/blog/">Blogs</a></li>
                  </ul>
                </li>


              </ul>
            </div>
          </div>
        </nav>
      </div>                <section class="relative text-center content-page-title-image">
          <div class="container">
            <div class="jumbotron text-center">
              <h1><!-- <small>Choose your Style</small> --><span class='text-bold'>Web Testing</span> </h1>
                          </div>
          </div>
        </section>
              </header>
      <!-- Page Content-->
      <main class="page-content page-content-margin">
        <!-- <section class="bg-light section-lg">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active">With Right Sidebar</li>
          </ol>
        </section> -->
        <section class=" section-inset-4">
          <div class="container">
            <div class="row">
              <!-- The main content block -->
              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <!-- Main content heading - same as title of the page -->
                
 <!-- SECTION _ TO ADD NEW SECTIONS -->
    <section class="section-inset-1 text-xs-left">
	<div id="content">
	<h1 class="h1title">Functional Testing a Web Application</h1>
<p>This tutorial provides a brief introduction to the AppPerfect Web Test product using a set of hands-on practice exercises. This tutorial assumes you have
successfully downloaded and installed AppPerfect&nbsp;Web Test on your machine with the default
options. Apart from this pre-requisite, this tutorial is self contained.  </p>
<p>This document is divided into&nbsp;following sections</p>
	<ol>
		<li class="alinkhover"><a href="#common" class="alink">Creating Project</a></li>
		<li class="alinkhover"><a href="#Functional_Tester" class="alink">AppPerfect Web Test</a></li>
	</ol>

<p>Within each section, multiple exercises are listed. Each exercise forms a logical unit
which is expected to take no more than a few minutes to perform. All exercises
use the PetStore demo application running inside Apache Tomcat. The modified PetStore application
and Tomcat are both bundled with this product.  </p>

<p>All exercises assume you have installed the product in <b>C:\AppPerfect\WebTest</b> folder and will
be referred as <b>WebTest_HOME</b> henceforth in tutorial. If you have installed the product in
some other folder, modify the instructions below appropriately.</p>

<p>This tutorial is not intended as a comprehensive training guide. Please refer to the
product documentation for detailed information. However, this tutorial will give you a very good overview
of the products and substantially improve your productivity with the product.</p>

<h4 id="common">Creating Project</h4>

<h6>Exercise 1: Launch AppPerfect Web Test</h6>
<ol>
	<li>Click on Start -&gt; Programs -&gt;AppPerfect&nbsp;Web Test&nbsp;x.x.x -&gt; AppPerfect Web Test</li>
	<li>On launching AppPerfect Web Test a Welcome page will be displayed. Go through the brief description
	given for product.<br>

</ol>

<h6>Exercise 2: Creating Project</h6>
<ol>
	<li>Launch the Define New Project dialog by clicking <i>File -&gt;New...</i> menu option.
		The New Project wizard will be launched.</li>
	<li>Keep the default project name and location for the purpose of this exercise. Click on the OK button.</li>
	<li>A confirmation message saying that the project is saved will be displayed. Click on the OK button.</li>
</ol>

<p>Now using this project we will create tests to demonstrate the functionalities of AppPerfect
Web Test product.</p>

<h4 id="Functional_Tester">AppPerfect Web Test</h4>

<p>NB:Please follow the steps provided in the "Creating Project" section to first create a project,
then proceed further.</p>

<h6>Exercise 1: Define a Web Test project</h6>

<ol>
	<li>Once the common project is successfully created another dialog - Define Project Properties dialog -
		will be displayed.</li>
	<li>The dialog shows various options which can be configured for the project, leave them default
		and click on Next button.  </li>
	<li>Click through all the menu items to familiarize yourself with the available features and how to access
		them. Viewing through all menu items will give a reasonable overview of the application.</li>
	<li>Click <em>Help -&gt; Table of Contents</em> menu item to see AppPerfect Web Test product documentation</li>
	<li>Open the Preferences dialog by selecting the menu option <i>Tools -&gt; Options...</i>
     </li>
	<li>Review the default settings for Web Test and click the OK button to close the dialog.

	</li>
</ol>

<h6>Exercise 2: Recording a Test</h6>

<ol>
    <li>Start tomcat server by selecting Start-&gt;Programs-&gt;AppPerfect Web Test x.x.x-&gt;Documentation and
        Examples-&gt;Examples-&gt;Tomcat running Petstore-&gt;Start Server.</li>
	<li>To start recording, click on <i>Project -&gt; Record test...</i> in the menu bar.'</li>
	<li>'AppPerfect Recorder' dialog will be displayed. Select the browser with which you need to record from the Browser drop down. Select ActionGroup1 from the Group combo. Provide starting URL
		as "http://localhost:8392/petstore". In the authentication drop down select "Basic Authentication" and provide
		user name: "j2ee" and password :"j2ee". Now Click on 'Start recording' button.
     </li>
	<li>An instance of selected browser will be launched with the <b>PetStore</b> home page loaded.
		Click on <b>enter the store</b> link. This will populate the database and display the PetStore main page.
		Note that populating the database might take some time.</li>
	<li>Click on each link on the left: Birds, Reptiles, Dogs, Cats, Fish</li>
	<li>Order an item by clicking on: Birds -&gt; Amazon Parrot -&gt; Adult Male Amazon Parrot -&gt; Add to cart</li>
	<li>Modify the quantity and click on Update Cart button.
     </li>
	<li>Check out by clicking on the Check Out link.  </li>
	<li>At the 'Sign in' page, default values are already provided. Click on Submit.
     </li>
	<li>Sign out of PetStore by clicking on Sign-out at top right of screen.
     </li>
	<li>Close browser by clicking on <em>File -&gt; Close</em> in the browser window.
     </li>
	<li>Click on the Stop button of "AppPerfect Recorder" dialog to stop the recording session.</li>
	<li>Click on Close button to close the 'AppPerfect Recorder' dialog.</li>
	<li>In the AppPerfect Web Test window, look at the tree on the left. Each action you
		performed has been recorded.</li>
	<li>Click on any of the recorded action on the left. The page associated with that action is displayed along
		with the actual element highlighted on the right hand side.  </li>
</ol>

<h6>Exercise 3: Creating required parameters</h6>

<ol>
    <li>In the editor tree, select 'Parameters' node.</li>
    <li>On right hand side, click on 'Add Parameter' button to add a parameter.</li>
    <li>Select 'Fixed Values' as Data Source. Select Next button.</li>
    <li>In the 'Parameter Setting Dialog', enter 'sampleParam' as the parameter name.</li>
    <li>Under Add Value, enter 2 and click on the 'Add' button.</li>
    <li>Under Add Value, enter 3 and click on the 'Add' button.</li>
    <li>Choose 'Sequential' as parameter selection.</li>
    <li>Click Finish.</li>
    <li>In the editor tree select the event which states something like (set on WebInputField 27:).</li>
	<li>In the details tab Click on the "text" argument in the Event Arguments table.</li>
    <li>Click on the 'parameterize' button.</li>
    <li>In the parameterization settings dialog, select "text" under the name column
        in the parameter settings table.</li>
    <li>'Constant Value' will be selected with the value 27 in
        the text box.</li>
    <li>Select 'Parameterize' and from the combo box, select sampleParam. This will use the values
        of sampleParam as item quantity on each iteration.</li>
    <li>Click Finish.</li>
	<li>Now if the test is replayed for two iterations then each time different value will be picked for Item quantity.</li>
</ol>

<h6>Exercise 4: Adding page validations</h6>

<ol>
	<li>Select the URL "Items" in the Editor tab.</li>
	<li>On the Right side of the screen, select "Show DOM tree" icon. Right click on the DOM Tree on the right and select the option 'Validate HTML source'.</li>
	<li>This will validate all the elements &amp; content of the web page when the test is replayed and
		report any validation error if there is any mismatch found in the recorded and replayed web page.</li>
</ol>

<h6>Exercise 5: Executing a test</h6>

<ol>

	<li>Go to <i>Project -&gt; Properties....</i> menu to open Web Test project properties dialog.
		Change the 'No. of iterations' value to 2 and click OK.  </li>
	<li>To start replay of the recorded test, click on <em>Project -&gt; Run</em> from the menu bar.
     </li>
	<li>An instance of default browser configured at Tools -> Options -> Browsers  is launched and each of the recorded events is replayed.
		No manual intervention is required during test replay, unless an error is encountered.
     </li>
	<li>Note that two different values are picked for Item quantity for each iterations.
     </li>
	<li>Stop running tomcat server by selecting Start-&gt;Programs-&gt;AppPerfect Web Testx.x.x-&gt;Documentation and
		Examples-&gt;Examples-&gt;Tomcat running Petstore-&gt;Stop Server.
     </li>
</ol>

<h6>Exercise 6: View and analyze results</h6>

<ol>
	<li>After replay, results are displayed in Results tab.</li>
	<li>Click on Results tab. Test results details are displayed on the right. Click on individual items
		in the tree on the left to view details on specific actions.</li>
	<li>Browse and examine the different views that are displayed on selecting the various nodes in
		the navigation tree.</li>
	<li>Select the ActionGroup node. This report gives a summary of the successful, failed, timed-out &amp;
		not played URLs &amp; Events.</li>
	<li>Select the URL Item and click on the Validation Results tab on the right. Here you will find the details
		of the successful / failed validations.</li>
</ol>
	
	
	</div>
	</section>
		
	
               <!-- Side bar section - to use this comment the main content in the contentheader page -->
               <!-- <div class="col-xs-12 col-md-4 blog-sidebar">
                <div class="sidebar-module">
                  <h4>about us</h4>
                  <div class="thumbnail-3 thumbnail-mod-2"><img src="images/index-9.jpg" alt="">
                    <div class="caption">
                      <p>Need to give your website a bit more oomph? Then you're in the right place. We have been building WP and J!</p><a href="#" class="btn btn-success btn-sm">learn more</a>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </section>
      </main>      <!-- Page Footer-->
      <footer class="page-foot section-inset-4 bg-primary bg-custom">
        <section class="footer-content">
          <div class="container">
            <div class="row text-left">
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                <h4>Products</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/products/agentless-monitor.php">Agentless Monitor</a></li>
                  <li><a href="/products/load-test.php">Load Test</a></li>
                  <li><a href="/products/web-test.php">Web Test</a></li>
                  <li><a href="/products/test-manager.php">Test Manager</a></li>
                  <li><a href="/products/big-data-analytics-solution.php">QueryIO</a></li>
                </ul>

                <h4>Load Testing</h4>
                <ul class="marked-list well6" >
                  <li><a href="/services/load-testing/web-load-testing.php">Web Application Load Testing</a></li>
                  <li><a href="/services/load-testing/web-services-load-testing.php">Web Services Load Testing</a></li>
                  <li><a href="/services/load-testing/database-load-testing.php">Database Load Testing</a></li>
                  <li><a href="/support/tutorials/distributed-load-testing.php">Distributed Load Testing</a></li>
                  <li><a href="/support/tutorials/load-test-ajax.php">AJAX Load Testing</a></li>
                  <li><a href="/support/tutorials/load-test-flash.php">Flash Load Testing</a></li>
                  <li><a href="/services/cloud-computing/cloud-testing.php">Cloud Load Testing</a></li>
                </ul>

                <h4>Salesforce</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/services/salesforce">Salesforce Development Services</a></li>
                </ul>
                
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                <h4>Operations &amp; Monitoring</h4>
                <ul class="marked-list well6">
                  <li><a href="/services/operations-and-monitoring/24-7-site-operations.php">24/7 Site Operations</a></li>
                  <li><a href="/services/operations-and-monitoring/infrastructure-monitoring.php">Infrastructure Monitoring</a></li>
                  <li><a href="/services/operations-and-monitoring/transactional-monitoring.php">Transactional Monitoring</a></li>
                  <li><a href="/services/operations-and-monitoring/functional-monitoring.php">Functional Monitoring</a></li>
                  <li><a href="/services/operations-and-monitoring/system-monitoring.php">System Monitoring</a></li>
                  <li><a href="/services/monitoring/database-monitoring.php">Database Monitoring</a></li>
                  <li><a href="/services/monitoring/snmp-monitoring.php">Network Monitoring</a></li>
                  <li><a href="/services/monitoring/server-monitoring.php">Server Monitoring</a></li>
                  <li><a href="/services/operations-and-monitoring/cluster-monitoring.php">Cluster Monitoring</a></li>
                  <li><a href="/services/monitoring/java-monitoring.php">Java Monitoring</a></li>
                  <li><a href="/services/monitoring/website-monitoring.php">Website / URL Monitoring</a></li>              
                  <li><a href="/services/operations-and-monitoring/custom-monitoring-dashboard.php">Custom Monitoring Dashboards</a></li>
                  <li><a href="/services/operations-and-monitoring/splunk-based-monitoring.php">Splunk-based Monitoring</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                

                <h4>Big Data Services</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/services/big-data-services/big-data-analytics.php">Big Data Analytics</a></li>
                  <li><a href="/services/big-data-services/big-data-implementation.php">Big Data Implementation</a></li>
                  <li><a href="/services/big-data-services/big-data-cluster-management.php">Big Data Cluster Management</a></li>
                  <li><a href="/services/big-data-services/custom-big-data-solutions.php">Custom Big Data Solutions</a></li>
                  <li><a href="/services/big-data-services/big-data-optimization.php">Big Data Optimization</a></li> 
                  <li><a href="/services/big-data-services/big-data-mining-aggregation.php">Data Mining &amp; Data Aggregation</a></li> 
                </ul>

                <h4>Software Security Services</h4>
                <ul class="marked-list well6">
                  <li><a href="/security/web-application-security/index.php">Web Application Security</a></li>
                    <li><a href="/security/data-security/index.php">Data Security</a></li>
                    <li><a href="/security/cloud-security/index.php">Cloud Security</a></li>
                    <li><a href="/security/container-security/index.php">Container Security</a></li>
                    <li><a href="/security/network-security/index.php">Network Security</a></li>
                    <li><a href="/security/penetration-testing/index.php">Penetration Security</a></li>
                  
                </ul>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                <h4>Performance &amp; Functional Testing</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/services/web-testing/functional-testing.php">Web Functional Testing</a></li>
                  <li><a href="/services/web-testing/web-services-functional-testing.php">Web Services Testing</a></li>
                  <li><a href="/services/web-testing/ajax-testing.php">AJAX Testing</a></li>
                  <li><a href="/support/tutorials/web-test-flash-testing.php">Flash Testing</a></li>
                  <li><a href="/services/web-testing/cross-browser-testing.php">Cross browser Testing</a></li>
                  <li><a href="/services/test-automation/automated-testing.php">Automated Testing</a></li>     
                  <li><a href="/services/performance-and-functional-testing/load-testing.php">Load Testing</a></li>
                  <li><a href="/services/performance-and-functional-testing/functional-testing.php">Functional Testing</a></li>
                  <li><a href="/services/performance-and-functional-testing/mobile-application-testing.php">Mobile Application Testing</a></li>
                  <li><a href="/services/cloud-computing/cloud-hosted-testing.php">Cloud Hosted Testing</a></li>
                </ul>     
                              
              
                
              
                <h4>Sales</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/sales/">Sales</a></li>
                </ul>
              
              </div>

              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                
                  <h4>Software Development Services</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/services/software-development-services/web-application-development.php">Web Application Development</a></li>
                  <li><a href="/services/software-development-services/mobile-application-development.php">Mobile Application Development</a></li>
                  <li><a href="/services/software-development-services/desktop-application-development.php">Desktop Application Development</a></li>
                  
                  <li><a href="/services/software-development-services/distributed-caching.php">Distributed Caching</a></li>
                  <li><a href="/services/software-development-services/nosql-solutions.php">NoSQL Solutions</a></li>
                  <li><a href="/services/software-development-services/message-broker-and-messaging-middleware.php">Message Broker &amp; Messaging Middleware</a></li>
                  <li><a href="/services/software-development-services/database-design-and-development.php">Database Design & development</a></li>
                  <li><a href="/services/software-development-services/profiling-and-system-tuning.php">Profiling & System Tuning </a></li>
                  
                </ul>

                <h4>Downloads</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/download/">Downloads</a></li>
                </ul>
              </div>
              <div class="clearfix visible-sm"></div> 
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                
                <h4>Support</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a target="_blank" href="/support/tutorials/index.php">Tutorials</a></li>
                  <li><a href="/forums/" target="_blank">User Forums</a></li>
                  <li><a target="_blank" href="/support/docs/load-test/index.html">Load Test Docs</a></li>
                  <li><a target="_blank" href="/support/docs/web-test/index.html">Web Test Docs</a></li>
                  <li><a target="_blank" href="/support/docs/agentless-monitor/admin-guide/index.html">Agentless Monitor Admin Guide</a></li>
                  <li><a target="_blank" href="/support/docs/agentless-monitor/user-guide/index.html">Agentless Monitor User Guide</a></li>
                </ul>
              
              
                <h4>End Of Life Products</h4>
                <ul class="marked-list well6" style="margin-bottom:5px">
                  <li><a href="/products/app-test.php">App Test</a></li>
                  <li><a href="/products/java-code-test.php">Java Code Test</a></li>
                  <li><a href="/products/java-unit-test.php">Java Unit Test</a></li>
                  <li><a href="/products/java-profiler.php">Java Profiler</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                <h4>About Us</h4>
                <ul class="marked-list well6">
                  <li><a href="/company/">Company</a></li>
                  <li><a href="/company/careers.php">Careers</a></li>
                  <li><a href="/company/customers.php">Customers</a></li>
                  <li><a href="/company/contact.php">Contact</a></li>
                </ul>
              </div>
              <div class="col-xs-12 text-center social-connect">
                <ul class="list-inline list-footer-social">
                  <li><a target="_blank" href="http://www.facebook.com/AppPerfect" class="fa-facebook"></a></li>
                  <li><a target="_blank" href="http://www.youtube.com/AppPerfect" class="fa-youtube-play"></a></li>
                  <li><a target="_blank" href="http://www.linkedin.com/company/appperfect-corp-" class="fa-linkedin"></a></li>
                  <li><a target="_blank" href="https://plus.google.com/107544096333694710843/about" class="fa-google-plus"></a></li>
                  <li><a target="_blank" href="http://www.twitter.com/AppPerfect" class="fa-twitter"></a></li>
                  <li><a target="_blank" href="http://www.slideshare.net/AppPerfect" class="fa-slideshare"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="copyright bg-dark well5">
          <div class="container text-center marked-list">
            <p>
              <span class="pull-left">&#169; 2003 - 2018 AppPerfect Corporation<br/>Apache, Hadoop and HDFS are trademarks of The Apache Software Foundation.<br/>Splunk is a trademark of Splunk Inc.<br/>Salesforce and Salesforce Certified Logo are trademarks of Salesforce.com</span>
              <span class="pull-right footer-links">
                <a href="/company/termsofuse.php">Terms of Use</a> | 
                <a href="/company/privacy.php">Privacy Statement</a> | 
                <a href="/sitemap.php">Sitemap</a>
              </span>
            </p>
          </div>
        </section>
        <!-- {%FOOTER_LINK}-->
      </footer>
      <!-- Rd Mailform result field-->
      <div class="rd-mailform-validate"></div>
    </div>
    <!-- Java script-->
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
    <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <script type="text/javascript" src="/plugins/slick/slick.js"></script>

    <script>
    $(document).ready(function(){
      $('.slick-slider').slick({
        infinite: true,
        arrow: true,
        adaptiveHeight: true
      });
    });

    function adjustScreen() {
      setTimeout(function () {
        $(window).trigger("load");
      }, 50);
    }
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/57f5d46fbb785b3a47d8857d/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Google Code for tawk.to Chat Conversion -->
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
    <script type="text/javascript">

    var Tawk_API = Tawk_API || {};
    Tawk_API.onChatStarted = function(){   

      window.google_trackConversion({
        google_conversion_id : 1071456400,
        google_conversion_language : "en",
        google_conversion_format : "3",
        google_conversion_color : "ffffff",
        google_conversion_label : "vvvOCOHshG8QkMH0_gM",
        google_remarketing_only : false,
      });

    };
    </script>
  </body>
  </html>  
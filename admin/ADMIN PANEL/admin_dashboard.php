<?php
$servername="localhost";
$username="root";
$password="";
$database="creditcard";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";     
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];
	
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="About Branding Agency">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>ADMIN</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin_dashboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Aldrich:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/JK_Lakshmipat_University_Logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Logout">
    <meta property="og:type" content="website">
    
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-palette-2-base u-header" id="sec-f1a4"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="admin_dashboard.php" class="u-image u-logo u-image-1" data-image-width="499" data-image-height="500">
          <img src="images/JK_Lakshmipat_University_Logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <h3 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1">JK Lakshmipat University, Jaipur</h3>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;" wfd-invisible="true">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-white" href="logout1.php" style="padding: 10px 26px 10px 24px;">Logout</a>
            </li></ul>
          </div>
          <!-- <a href="logout1.php"><button class="out">Logout</button></a> -->
          <!-- <div class="u-custom-menu u-nav-container-collapse" wfd-invisible="true">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow"><form action="logout1.php">  
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item">
                Logout
                </li></ul>
              </div></form>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
          </div> -->
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" src="" id="carousel_6775">
      <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
        <img class="u-image u-image-1" src="images/ales-nesetril-ex_p4AaBxbs-unsplash.jpg" data-image-width="1629" data-image-height="1080">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-palette-2-base u-repeater-item u-shape-rectangle u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xlink:href="#svg-10b8"></use></svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-10b8" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.519,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.345-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z M42.459,48.132c-0.35,0.254-0.706,0.5-1.067,0.735
	c-0.166,0.108-0.331,0.216-0.5,0.321c-0.472,0.292-0.952,0.57-1.442,0.83c-0.108,0.057-0.217,0.111-0.326,0.167
	c-1.126,0.577-2.291,1.073-3.488,1.476c-0.042,0.014-0.084,0.029-0.127,0.043c-0.627,0.208-1.262,0.393-1.904,0.552
	c-0.002,0-0.004,0.001-0.006,0.001c-0.648,0.16-1.304,0.293-1.964,0.402c-0.018,0.003-0.036,0.007-0.054,0.01
	c-0.621,0.101-1.247,0.174-1.875,0.229c-0.111,0.01-0.222,0.017-0.334,0.025C28.751,52.97,28.127,53,27.5,53
	c-0.634,0-1.266-0.031-1.895-0.078c-0.109-0.008-0.218-0.015-0.326-0.025c-0.634-0.056-1.265-0.131-1.89-0.233
	c-0.028-0.005-0.056-0.01-0.084-0.015c-1.322-0.221-2.623-0.546-3.89-0.971c-0.039-0.013-0.079-0.027-0.118-0.04
	c-0.629-0.214-1.251-0.451-1.862-0.713c-0.004-0.002-0.009-0.004-0.013-0.006c-0.578-0.249-1.145-0.525-1.705-0.816
	c-0.073-0.038-0.147-0.074-0.219-0.113c-0.511-0.273-1.011-0.568-1.504-0.876c-0.146-0.092-0.291-0.185-0.435-0.279
	c-0.454-0.297-0.902-0.606-1.338-0.933c-0.045-0.034-0.088-0.07-0.133-0.104c0.032-0.018,0.064-0.036,0.096-0.054l7.907-4.313
	c1.36-0.742,2.205-2.165,2.205-3.714l-0.001-3.602l-0.23-0.278c-0.022-0.025-2.184-2.655-3.001-6.216l-0.091-0.396l-0.341-0.221
	c-0.481-0.311-0.769-0.831-0.769-1.392v-3.545c0-0.465,0.197-0.898,0.557-1.223l0.33-0.298v-5.57l-0.009-0.131
	c-0.003-0.024-0.298-2.429,1.396-4.36C21.583,10.837,24.061,10,27.5,10c3.426,0,5.896,0.83,7.346,2.466
	c1.692,1.911,1.415,4.361,1.413,4.381l-0.009,5.701l0.33,0.298c0.359,0.324,0.557,0.758,0.557,1.223v3.545
	c0,0.713-0.485,1.36-1.181,1.575l-0.497,0.153l-0.16,0.495c-0.59,1.833-1.43,3.526-2.496,5.032c-0.262,0.37-0.517,0.698-0.736,0.949
	l-0.248,0.283V39.8c0,1.612,0.896,3.062,2.338,3.782l8.467,4.233c0.054,0.027,0.107,0.055,0.16,0.083
	C42.677,47.979,42.567,48.054,42.459,48.132z"></path></svg>
            
            
          </span>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-1">STUDENTS<br>ADDED
                </h4>
                <p class="u-custom-font u-font-open-sans u-text u-text-body-alt-color u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                <?php
                  $sql1="select COUNT(LOGIN_ID) from student";
                  $result1=mysqli_query($conn,$sql1);
                  $row1=mysqli_fetch_assoc($result1);
                  echo implode("",$row1);
                ?></p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-repeater-item u-shape-rectangle u-video-cover u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xlink:href="#svg-beef"></use></svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-beef"><path d="m102.7 39.2c0.8 0 1.5 0.3 2.1 0.9l7.8 7.8c4.8 4.8 7.7 11.5 7.4 18.3-0.6 12.6-11 22.6-23.7 22.6h-29c-0.1 0-0.1-0.1-0.1-0.2 1.1-3 4.1-5.2 7.5-5.2h10.5c0.9 0 1.8-0.4 2.3-1.1 0.8-1.1 0.7-2.6-0.3-3.5l-24.9-24.8c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.5 0.9-2.1 1.3-0.8 2.1-0.8 1.5 0.3 2.1 0.8l16.9 16.9c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.3-1.4-0.8-1.9l-6.7-6.7c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.5 0.9-2.1 1.3-0.8 2.1-0.8 1.5 0.3 2.1 0.8l4 4c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.3-1.4-0.8-1.9l-2.7-2.7c-0.5-0.5-0.8-1.2-0.8-2s0.3-1.5 0.9-2.1 1.3-0.9 2.1-0.9 1.5 0.3 2.1 0.9l2.7 2.7c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.2-1.3-0.7-1.8c-0.8-0.9-1.2-2.1-0.8-3.3 0.5-1.3 1.6-1.9 2.8-1.9m0-8c-2.9 0-5.7 1.1-7.8 3.2-0.7 0.7-1.2 1.4-1.7 2.1 0 0-0.1 0.1-0.1 0-0.4 0-0.8-0.1-1.1-0.1-2.9 0-5.7 1.1-7.8 3.2-1 1-1.8 2.2-2.3 3.4 0 0 0 0.1-0.1 0.1-2.6 0.2-5.1 1.3-6.9 3.2l-0.2 0.2-2.5-2.5c-2-2-4.9-3.2-7.8-3.2s-5.7 1.1-7.8 3.2-3.2 4.9-3.2 7.8c0 3 1.2 5.7 3.2 7.8l15.8 15.8c0.1 0.1 0 0.2-0.1 0.2-5.8 0.8-10.8 4.8-12.8 10.5-1.9 5.2 2 10.7 7.5 10.7h29.1c8.5 0 16.4-3.3 22.4-9.3 6.1-6.1 9.4-14.3 9.3-23-0.1-8.4-3.8-16.4-9.8-22.4l-7.8-7.8c-1.8-2-4.6-3.1-7.5-3.1z"></path><path d="m82.1 118c0 1.1-0.9 2-2 2h-70.2c-1.1 0-2-0.9-2-2v-108c0-1.1 0.9-2 2-2h70.1c1.1 0 2 0.9 2 2v16.9c0 2.2 1.8 4 4 4s4-1.8 4-4v-16.9c0-5.5-4.5-10-9.9-10h-70.2c-5.4 0-9.9 4.5-9.9 10v108c0 5.5 4.5 10 9.9 10h70.1c5.5 0 9.9-4.5 9.9-10v-10.6c0-2.2-1.8-4-4-4s-4 1.8-4 4v10.6z"></path></svg>
            
            
          </span>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-3">
                  <span style="font-size: 1.25rem;">TRANSACTIONS</span>
                  <br>
                  <span style="font-size: 1.25rem;">DONE</span>
                </h4>
                <p class="u-custom-font u-font-open-sans u-text u-text-body-alt-color u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                <?php
                  $sql1="select COUNT(TRANSACTION_ID) from transactions";
                  $result1=mysqli_query($conn,$sql1);
                  $row1=mysqli_fetch_assoc($result1);
                  echo implode("",$row1);
                ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-3">
            <h2 class="u-custom-font u-text u-text-5"> Admin Dashboard</h2>
            <p class="u-text u-text-6"> Here you can add a new student and view all the data.&nbsp;<br>
            </p>
            <a href="http://localhost/creditcard/Login_v18/admin/useradd.php" class="u-active-palette-2-base u-align-center u-border-2 u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-active-white u-text-black u-text-hover-white u-btn-1" target="_blank" >ADD STUDENT</a>
            <a href="http://localhost/creditcard/Login_v18/admin/ADMIN%20PANEL/studenttable.php" class="u-active-palette-2-base u-align-center u-border-2 u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-active-white u-text-black u-text-hover-white u-btn-2" target="_blank" >VIEW STUDENTS</a>
            <a href="transactiontable.php" class="u-active-palette-2-base u-align-center u-border-2 u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-active-white u-text-black u-text-hover-white u-btn-3" target="_blank" >VIEW TRANSACTIONS</a>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section> -->
  </body>
</html>
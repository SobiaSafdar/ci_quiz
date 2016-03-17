<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Admin Panel</title>	
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('js/jquery-1.5.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/hideshow.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/jquery.tablesorter.min.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.equalHeight.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/layout.css'); ?>" type="text/css" media="screen" />
    <script type="text/javascript">
    $(document).ready(function() 
    { 
      $(".tablesorter").tablesorter(); 
     } 
    );
    $(document).ready(function() {

    //When page loads...
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content

    //On Click Event
    $("ul.tabs li").click(function() {

            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content

            var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active ID content
            return false;
    });
});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>
<body>
<header id="header">
    <hgroup>
        <h1 class="site_title"><a href="">Test</a></h1>
        <h2 class="section_title">Dashboard</h2>
    </hgroup>
</header> <!-- end of header bar -->
<section id="secondary_bar">
    <div class="user">
        <p>User</p>
         <a class="logout_user" href="<?php echo base_url()."index.php/user_ctrl/logout"; ?>" title="Logout">Logout</a> 
    </div>
<div class="breadcrumbs_container">
    <article class="breadcrumbs"><a href="dashboard.php" class="current">Dashboard</a> 
         <div class="breadcrumb_divider"></div> <a href="change_password.php" class="current" >Change Password</a>
    </article>
</div>  
</section><!-- end of secondary bar -->
<aside id="sidebar" class="column">
<h3>Question</h3>
<ul class="toggle">
    <li class="icn_new_article"><a href="<?php echo base_url()."index.php/test_ctrl/starttest"; ?>">Start Test</a></li>
    <li class="icn_new_article"><a href="<?php echo base_url()."index.php/test_ctrl/result/"; ?>">Result</a></li>
</ul>
<footer>
    <hr />
    <p><strong>Copyright &copy; 2015</strong></p>
</footer>
</aside>
    
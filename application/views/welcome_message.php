<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/Cabin_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/atooltip.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>gudang/js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body id="page1">
<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="index.html" id="logo">AirLines</a></h1>
      <span id="slogan">Fast, Frequent &amp; Safe Flights</span>
      <nav id="top_nav">
        <ul>
          <li><a href="index.html" class="nav1">Home</a></li>
          <li><a href="contacts.html" class="nav3">Contact</a></li>
        </ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.html"><span><span>About</span></span></a></li>
        <li class="end"><a href="contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_1" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <h2>ONEWAY</h2>
                     </div>
                  </div>
                  <div class="row"> <span class="left">From</span>
                    <input type="text" class="input" name="from" placeholder="Type Departure City" required="true" />
                  </div>
                  <div class="row"> <span class="left">To</span>
                    <input type="text" class="input" name="to" placeholder="Type Destination City" required="true"> 
                  </div>
                  <div class="clear"></div>
                  <div class="date">
                  <div class="row"> <span class="left">Depart</span>
                    <input type="date" class="input" id="datepicker2" name="depart" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="true">
                  </span>
                     </div>
                  <div class="row"> <span class="left">Return</span>  
                   <select id="w3_country1" name="prices" onchange="change_country(this.value)" class="frm-field required">
                  <option value="125000">Rp125.000,00</option>  
                  <option value="130000">Rp130.000,00</option>   
                  <option value="225000">Rp225.000,00</option>   
                  <option value="330000">Rp330.000,00</option>              
                </select>
                </div>
                <br>
                <div class="clear"></div>
              <input type="submit" value="Search Flights">
            </form> 
          </div>
          </div>
        </div>
      </article>
      <div id="slider"> <img src="images/banner1.jpg" alt=""> <img src="images/banner2.jpg" alt=""> <img src="images/banner3.jpg" alt=""> </div>
    </div>
</script>
</body>
</html>
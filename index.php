<!DOCTYPE html>
<html>
<head>
<title>VacciKnowlogy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="X-UA-Compatible" content="IE=10"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-control" content="public">


<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="http://open.mapquestapi.com/sdk/js/v7.0.s/mqa.toolkit.js?key=Fmjtd%7Cluub2g68nq%2Cba%3Do5-9uaxhw"></script>

    <script src='js/jquery.js' type="text/javascript"></script>
    <script src='js/jquery-ui.custom.js' type="text/javascript"></script>
    <script src='js/jquery.cookie.js' type="text/javascript"></script>
    <script src='js/jquery.dynatree.js' type="text/javascript"></script>

    <!-- bxSlider Javascript file -->
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" href="js/jquery.bxslider.css" />

  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>

<script src="js/jquery-defaultvalue.js"></script> 
<script src="js/jquery-browsercheck.js"></script> 


<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42723462-1', 'vacciknowlogy.org');
  ga('send', 'pageview');

</script>
<style>
#loading{background:url("images/loader/icon_loading.gif") no-repeat center center;height:100px;width:100px;position:fixed;left:50%;top:50%;z-index:1000;margin:-25px 0 0 -25px;text-align:center}
#slider{display:none}

#copyright {
    background-color: #444444;
    border-bottom: 7px solid #0082AD;
    color: #999999;
    overflow: hidden;
    padding: 20px 0;
    width: 100%;
}
</style>
        <script type="text/javascript">
                $(document).ready(function (){
                        showRecentUpdate();
                });
                function showRecentUpdate(){
                        $("#recent-update-list").empty();
                        $.ajax({
                                url: "includes/showRecentUpdate.php?rand="+Math.random(),
                                type: "POST"
                        })
                        .success(function(data) {
                                var obj = $.parseJSON(data);
                                jQuery.each(obj, function() {
                                        if(this != false)
                                                $("#recent-update-list").prepend('<div class="update-list"><span>'+this.replace('\\','')+'</span></div><hr/>').hide().slideDown('slow');
                                });
                                $("#recent-update-list").find("div:eq(0)").effect("highlight", {}, 15000);
                        });
                }
        </script>

</head>
<body>
<?php include('includes/func.php'); ?>
<div class="wrapper row2">
  <div class="header_cover">

    <nav id="topnav" style=" width:770px; display: inline-block;float:left;" >
     <ul class="clear"  >
     <li ><a href="index.php" id="logo-menu"><img src="images/GzDqAt_kjk01uzrvVR-ses82Ogj_KdD_ZqcyN1j6pmBbriYSCMjnxzvn7mIQvyswPm7HExhriu_YO4Sz5REu-750x724.png" width="100" ></a></li>
     	  <li style=" border-left: 0px ;"><a href="#"><img src="images/16325-200.png" width="25" > Research</a>
    	    <ul>
              <li><a href="index2.php?page=Con_summary"  target="_self">Publication Feeds</a></li>
              <li><a href="index2.php?page=taxon_classification"  target="_self">Literature Search</a></li>
              <li><a href="index2.php?page=taxon_classification"  target="_self">Trend</a></li>
            </ul>
          </li>
	  <li style=" border-left: 0px ;"><a href="#"><img src="images/steps-icons-expert.png" width="25"> Expert Finder</a>
            <ul>
              <li><a href="index2.php?page=Con_summary"  target="_self">Matching Expert</a></li>
              <li><a href="index2.php?page=taxon_classification"  target="_self">Report Expert</a></li>
            </ul>
          </li>
	  <li style=" border-left: 0px ;"><a href="#"><img src="images/f5b95e565bf3e0f8dcf4eed3ce8763bf_400x400.png" width="25"> Grant Finder</a>
          </li>


        </ul>
    
      </nav>
      <nav id="topnav" style="width:400px;display: inline-block; padding-top:30px; float:right;" >
          <ul style="float:right;">
              <li class="first active" ><a href="http://www.vacciknowlogy.org/VacciKM/index.php"> Vaccine KM</a></li>
              <li class="first active" ><a href="http://vacciknowlogy.org/VaccineWatch/nvi/Display.php"> Vaccine Watch</a> </li>
              <li class="first active" ><a href="http://vacciknowlogy.org/VacciExpert/"> Vaccine Expert</a> </li>
	        <ul>
		      <li><a href="http://www.nvi.go.th/"  target="_self">National Vaccine Institute</a></li>
        	      <li><a href="https://docs.google.com/forms/d/1IGqX7IwefNea3ihWWdYMKhq8IhSlqzsA-qjJpt7Wy5E/viewform"  target="_self">Contact </a></li>
            	</ul>

	     </li -->
          </ul>
      </nav>
      
   	  
        <ul id="social" style="float:right; padding-top:0px;">
          <li>
           <form id="formsearch" name="formsearch" method="POST" action="index2.php?page=advanced_search_full2" >
              SEARCH
              <input maxlength="80" align="middle" name="txtKeyword2"  placeholder="Search.."  id="txtKeyword2" type="text"   />
              IN
              <select name="selectIn2" class="listbox_search" id="selectIn2" align="middle">
		<option value="all_field">All</option>
                <option value="scientific_name">Expert</option>
                <option value="common_name">Vaccine</option>
              </select>
		<input type="hidden" value="top" id="front" name="front" >
              <input name="button_search"  value=" GO "  type="submit" class="button_search" align="middle" /> <input name="button_search"  value="Advanced Search" onclick="window.location.href='index2.php?page=advanced_search';"  class="button_search" align="middle" />
            </form>
          </li>
        </ul>
        
    
    </div> 
    <!--end div class="header_cover"-->

</div>
<!-- //////////////////////////////////////////////////// Infographic -->
<div style=" padding-top:150px;"> </div>
<table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">
<tr  heigth="800px">
	<td bgcolor="#FFFFFF" style="vertical-align:top; ">
	   	<table width="90%" style=" padding-top:10px;" align="center">
			<tr>
				<td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/icon_expert.png" width="100" ></td>
				<td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/sgd.jpg" width="150" ></td>
				<td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/Research.jpg" width="100" ></td>
				<td align="center"></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
                                <td align="center"><div class="number-expert"><b>500 Expert </div></td><td align="center"><b>400 Institute</td><td align="center"><b>100,000 Published </td>
                        </tr>
			 <tr>
                                <td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/mcsp-icon-malaria-v2.png" width="100" ></td>
                                <td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/icon-vacunas.png" width="100" ></td>
                                <td align="center"><img class="wow flipInY" data-wow-offset="200" src="images/collaboration.png" width="100" ></td>
                                <td align="center"></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                                <td align="center"><div class="number-expert"><b>xxx Malaria or Dengue</div></td><td align="center"><b>xxx Vaccine</td><td align="center"><b>xxx Collaborative </td>
                        </tr>

		</table>
	</td>
</tr>
<tr><td  bgcolor="#FFFFFF" style="vertical-align:top; " align="center"><br></td></tr>
</table>

<!-- //////////////////////////////////////////////////  Maon -->
<div style=" padding-top:10px;"> </div>

<table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">
<tr  heigth="800px">
	 <!-- //Col 1/////////////////////Table Rss --------- -->
	<td bgcolor="#FFFFFF" style="vertical-align:top; " width="33%">
	<table>
                <tr>
                        <td align="center" valign="top" style="width:30%;border-left: 2px solid #DDD;margin-left:5px;padding-left:5px;">
			<div class="feed-cdc" style="width:100%;">
                                        <table style="width:100%;padding-top:10px;">
                                                <tr>
                                                        <td valign="middle"><b>Vaccine Published</b>
							<div style="width:100%;overflow-x:hidden;overflow-y:auto;height:400px;text-align:left;">
							<?php echo  feedpub('https://eutils.ncbi.nlm.nih.gov/entrez/eutils/erss.cgi?rss_guid=1PW-O5V9EIrhHz8eAOQ1hY9LKSoOEVGgxZlEhZP7FAhG_OpM_e','Pubmed'); ?>
							</div>
							</td>
                                                </tr>
                                        </table>
                                </div>

                        </td>
        </table>
	</td>
	 <!-- //Col 2/////////////////////Table Rss --------- -->
	<td bgcolor="#FFFFFF" style="vertical-align:top; " width="33%">
	 <table>
                <tr>
                        <td align="center" valign="top" style="width:30%;border-left: 2px solid #DDD;margin-left:5px;padding-left:5px;">
                        <div class="feed-cdc" style="width:100%;">
                                        <table style="width:100%;padding-top:10px;">
                                                <tr>
                                                        <td valign="middle"><b>Diseases Outbreak News</b>
							<div style="width:100%;overflow-x:hidden;overflow-y:auto;height:400px;text-align:left;">
							<?php echo  feednews('http://www.who.int/feeds/entity/csr/don/en/rss.xml'); ?> 
							</div>
							</td>
                                                </tr>
                                        </table>
                                </div>
	                </td>
        </table>
	</td>
        <td bgcolor="#FFFFFF" style="vertical-align:top; " width="33%">
	<!-- //Col 3/////////////////////Table Rss --------- -->
	<table>
		<tr>
                        <td align="center" valign="top" style="width:30%;border-left: 2px solid #DDD;margin-left:5px;padding-left:5px;">

                                <div class="feed-cdc" style="width:100%;">
                                        <table style="width:100%;padding-top:10px;">
                                                <tr>
                                                        <td valign="middle"><b>Recent update</b></td>
                                                </tr>
                                        </table>
                                </div>
                                <div id="recent-update-list" style="width:100%;overflow-x:hidden;overflow-y:auto;height:400px;text-align:left;">

                                </div>
                                </div>
                        </td>
	</table>
        </td>
</tr>
</table>

<div style=" padding-top:10px;"> </div>

<table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">
<tr  heigth="800px">
<td>
        </td>
</tr>
</table>


<div style=" padding-top:20px;"> </div>

  <!-- Copyright -->
  <footer class="clear" id="copyright" style="width: 100%;">
<div class="footer_s" style="width:1170px; margin: 0 auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="1">
<tbody><tr>
<td align="center"> <a target="_blank" title="facebook" href="https://www.facebook.com/nvikm/?fref=ts"><img width="22" height="22" border="0" alt="This is a Facebook Icon." src="images/facebook.png"></a> </td>
<td align="center"> <a target="_blank" title="twitter" href="https://twitter.com/nvikm"><img width="22" height="22" border="0" alt="This is a Twitter Icon." src="images/twitter.png"></a> </td>
<td align="center"> <a target="_blank" title="foursquare" href="https://www.google.co.th/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwiwhbDUkP3SAhVBto8KHfCzCskQFggaMAA&url=https%3A%2F%2Fth.foursquare.com%2Fv%2F%25E0%25B8%25AA%25E0%25B8%2596%25E0%25B8%25B2%25E0%25B8%259A%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2584%25E0%25B8%258B%25E0%25B8%2599%25E0%25B9%2581%25E0%25B8%25AB%25E0%25B8%2587%25E0%25B8%258A%25E0%25B8%25B2%25E0%25B8%2595-%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2584%25E0%25B8%2581%25E0%25B8%25B2%25E0%25B8%25A3%25E0%25B8%25A1%25E0%25B8%25AB%25E0%25B8%25B2%25E0%25B8%258A%25E0%25B8%2599%2F5236959011d2054cfbeba341&usg=AFQjCNGylkaQERSguab76zpopS9HEGHAIg&sig2=8oLVl2A-n2SEIwyKxi-W6A"><img width="22" height="22" border="0" alt="This is a Foursquare Icon." src="images/foursquare-button-logo.png"></a> </td>
<td align="left" style="color:#FFF;">Department of Computer Science,Faculty of Science and Technology.<br>&copy;2017 Rajamangala University of Technology Suvarnabhumi.. All Rights Reserved. </td>
<td align="right"><a href="http://www.freedomrmutsb.com/sci.rmutsb/"> Powered by Department of Computer Science,Faculty of Science and Technology @ RmutSB </a></td>
</tr>
</tbody></table>
</div>
  </footer>
</body>
</html>


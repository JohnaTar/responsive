<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css_2/sb-admin.css" rel="stylesheet">
<!-- รูป กระพรืบ /////////////////////////////// -->
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script>new WOW().init();</script>
<!-- ************/////////////////////////////// -->
<script src="https://use.fontawesome.com/9a1dedc2b2.js"></script>


</head>

<body  data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include('includes/func.php'); ?>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar  static-top navbar-toggleable-md navbar-light bg-default" style="box-shadow: 0 0 3px 3px #EEEEEE; v " >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- ////////////////////////logo//////////////////////////////////////////////////////////// -->
       <a href="index.php" id="logo-menu"><img src="images/GzDqAt_kjk01uzrvVR-ses82Ogj_KdD_ZqcyN1j6pmBbriYSCMjnxzvn7mIQvyswPm7HExhriu_YO4Sz5REu-750x724.png" width="100" ></a>
        <div class="collapse navbar-collapse" id="navbarExample"> 
         <!--  ////////////////////////////Research ////////////////////////////////////////////////////////-->
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/16325-200.png" width="25"> :  Research
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="index2.php?page=Con_summary">Publication Feeds</a>
                        <a class="dropdown-item" href="index2.php?page=taxon_classification">Literature Search</a>
                        <a class="dropdown-item" href="index2.php?page=taxon_classification">Trend</a>
                    </div>
                </li>
         <!--  ////////////////////////////Expert Finder////////////////////////////////////////////////////////-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/steps-icons-expert.png" width="25"> : Expert Finder
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="index2.php?page=Con_summary">Matching Expert</a>
                        <a class="dropdown-item" href="index2.php?page=taxon_classification">Report Expert</a>
                       
                    </div>
                </li>
        <!--  ////////////////////////////Expert Finder////////////////////////////////////////////////////////-->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/f5b95e565bf3e0f8dcf4eed3ce8763bf_400x400.png" width="25"> : Grant Finder
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="http://www.vacciknowlogy.org/VacciKM/index.php">Vaccine KM</a>
                        <a class="dropdown-item" href="http://vacciknowlogy.org/VaccineWatch/nvi/Display.php">Vaccine Watch</a>
                        <a class="dropdown-item" href="http://vacciknowlogy.org/VaccineWatch/nvi/Display.php">Vaccine Expert</a>
                        <a class="dropdown-item" href="http://www.nvi.go.th/">National Vaccine Institute</a>
                        <a class="dropdown-item" href="https://docs.google.com/forms/d/1IGqX7IwefNea3ihWWdYMKhq8IhSlqzsA-qjJpt7Wy5E/viewform">Contact </a>
                    </div>
                </li>

        <!--  ////////////////////////////search////////////////////////////////////////////////////////-->
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2" id="formsearch" name="formsearch" method="POST" action="index2.php?page=advanced_search_full2"   >
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                          

                      <select name="selectIn2" class="listbox_search" id="selectIn2" align="middle">
        <option value="all_field">All</option>
                <option value="scientific_name">Expert</option>
                <option value="common_name">Vaccine</option>
              </select>
                <span class="input-group-btn">

                        <button class="btn btn-primary"  type="submit"><i class="fa fa-search"></i></button>

                    </span>

                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="window.location.href='index2.php?page=advanced_search';"><i class="fa fa-fw fa-sign-out"></i> Advanced Search</a>
                </li>
            </ul>
        </div>
    </nav>
<div style=" padding-top:150px;"> </div>

   <!--  ////////////////////////////PICTURE ////////////////////////////////////////////////////////-->
    <div class="content-wrapper py-3" >

        <div class="container">
     



<div class="row" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">

           <div class="col-md-4 " style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" src="images/icon_expert.png" width="100"  alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1">500 Expert</h6>
                               
                            </div>
                           
             </div>
        <!-- ////////////////////////////////////////////     picture 2//////////////////////////////////////////////////// -->

              <div class="col-md-4" style="text-align: center; ">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" src="images/sgd.jpg" width="150" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1">400 Institute</h6>
                               
                            </div>
                           
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 3//////////////////////////////////////////////////// -->


              <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" width="100" src="images/Research.jpg" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1">100,000 Published</h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 4//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" width="100" src="images/mcsp-icon-malaria-v2.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1">100,000 Published</h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 5//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" width="100" src="images/icon-vacunas.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1">100,000 Published</h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 6//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="wow flipInY" data-wow-offset="200" width="100" src="images/collaboration.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1">100,000 Published<!--ADD LINL <a href="#">100,000 Published</a> --></h6>
                                
                            </div>
                            
             </div>                
                
                
                
                
    </div> 
        <!-- /////////////row ////////////////////////////////////////////////////////////////////////////-->
        <div style=" padding-top:10px;"> </div>

    <div class="row" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">
         <div class="col-md-4" style="text-align: center; padding-top: 10px">
            <div class="card-block" style="padding-top: 45px">
                    <h6 class="card-title mb-1">Vaccine Published<!-- ADD LINK <a href="#">Vaccine Published</a> --></h6>
                    <?php echo  feedpub('https://eutils.ncbi.nlm.nih.gov/entrez/eutils/erss.cgi?rss_guid=1PW-O5V9EIrhHz8eAOQ1hY9LKSoOEVGgxZlEhZP7FAhG_OpM_e','Pubmed'); 
                    ?>
                                
            </div>
   
         </div>
   <!--  ////////////////////////////////////////////////////////////////////////////////////////////////// -->

         <div class="col-md-4" style="text-align: center; padding-top: 10px">
              <div class="card-block" style="padding-top: 45px">
                    <h6 class="card-title mb-1">Diseases Outbreak News<!-- ADD LINK<a href="#">Diseases Outbreak News</a>  --></h6>
                    <?php echo  feednews('http://www.who.int/feeds/entity/csr/don/en/rss.xml'); ?> 
                   
                                
            </div>
         </div>
      <!--  ////////////////////////////////////////////////////////////////////////////////////////////////// -->    
         <div class="col-md-4" style="text-align: center; padding-top: 10px">
             <div class="card-block" style="padding-top: 45px">
                    <h6 class="card-title mb-1">Recent update<!-- ADD LINK <a href="#">Recent update</a> --></h6>
                    
                   
                                
            </div>
        
         </div>



 
    </div>    <!-- /////////////row //////////////////////////////////////////////////////////////////-->


   


 
                
        </div> <!-- //Contrainer*/////////////////////////////////////////////////////////////// -->
      
     </div>
        <!-- /.container-fluid -->
<!-- 
////////////////////////////////////////////////////////////////////////// -->
<style type="text/css">
    .footer-bottom {
 background:#444;
 padding:30px 0;
 border-top:1px solid #d9d9d9;
 font-size:16px;
 color:white;
}
</style>
<div class="footer-bottom">
    <div class="container">
        <div class="row">

            
            <div class="col-md-12 widget">
    <center>
        <a href="https://www.facebook.com/nvikm/?fref=ts"> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a> :
        <a href="https://twitter.com/nvikm"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a> :
        <a href="https://www.google.co.th/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwiwhbDUkP3SAhVBto8KHfCzCskQFggaMAA&url=https%3A%2F%2Fth.foursquare.com%2Fv%2F%25E0%25B8%25AA%25E0%25B8%2596%25E0%25B8%25B2%25E0%25B8%259A%25E0%25B8%2599%25E0%25B8%25A7%25E0%25B8%2584%25E0%25B8%258B%25E0%25B8%2599%25E0%25B9%2581%25E0%25B8%25AB%25E0%25B8%2587%25E0%25B8%258A%25E0%25B8%25B2%25E0%25B8%2595-%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2584%25E0%25B8%2581%25E0%25B8%25B2%25E0%25B8%25A3%25E0%25B8%25A1%25E0%25B8%25AB%25E0%25B8%25B2%25E0%25B8%258A%25E0%25B8%2599%2F5236959011d2054cfbeba341&usg=AFQjCNGylkaQERSguab76zpopS9HEGHAIg&sig2=8oLVl2A-n2SEIwyKxi-W6A"><i class="fa fa-foursquare fa-2x" aria-hidden="true"></i></a>
    </center>  
        <br>
        Department of Computer Science,Faculty of Science and Technology.&copy;2017 Rajamangala University of Technology Suvarnabhumi.. All Rights Reserved.
        </br>

            <center> Powered by Department of Computer Science,Faculty of Science and Technology @ RmutSB »</center>
            </div>
        </div>
    </div>
</div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js_2/sb-admin.min.js"></script>

</body>

</html>

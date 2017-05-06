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

</head>

<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-light bg-default" >
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

   <!--  ////////////////////////////PICTURE ////////////////////////////////////////////////////////-->
    <div class="content-wrapper py-3">

        <div class="container">
     



<div class="row" style="border:1px solid #CCCCCC;box-shadow: 0 0 3px 3px #EEEEEE; ">

           <div class="col-md-4 " style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img  class="card-img-top img-fluid" src="images/icon_expert.png" width="100"  alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1"><a href="#">500 Expert</a></h6>
                               
                            </div>
                           
             </div>
        <!-- ////////////////////////////////////////////     picture 2//////////////////////////////////////////////////// -->

              <div class="col-md-4" style="text-align: center; ">
           
                            <a href="#">
                                <img class="card-img-top img-fluid " src="images/sgd.jpg" width="150" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">400 Institute</a></h6>
                               
                            </div>
                           
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 3//////////////////////////////////////////////////// -->


              <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img class="card-img-top img-fluid" width="100" src="images/Research.jpg" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1"><a href="#">100,000 Published</a></h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 4//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img class="card-img-top img-fluid" width="100" src="images/mcsp-icon-malaria-v2.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1"><a href="#">100,000 Published</a></h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 5//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img class="card-img-top img-fluid" width="100" src="images/icon-vacunas.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1"><a href="#">100,000 Published</a></h6>
                                
                            </div>
                            
             </div>
         <!-- ////////////////////////////////////////////     picture 6//////////////////////////////////////////////////// -->


               <div class="col-md-4" style="text-align: center; padding-top: 25px">
           
                            <a href="#">
                                <img class="card-img-top img-fluid" width="100" src="images/collaboration.png" alt="">
                            </a>
                            <div class="card-block" style="padding-top: 45px">
                                <h6 class="card-title mb-1"><a href="#">100,000 Published</a></h6>
                                
                            </div>
                            
             </div>                
                
                
                
                
    </div> <!-- /////////////row -->


       <!--          <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-area-chart"></i> Area Chart Example
                </div>
                <div class="card-block">
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
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        -->
     
 
                
</div>


           <!--  <div style=" padding-top:100px;"> </div>
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

        </table> -->

<!-- 
<tr><td  bgcolor="#FFFFFF" style="vertical-align:top; " align="center"><br></td></tr>

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

 -->



            <!-- Breadcrumbs -->
         
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js_2/sb-admin.min.js"></script>

</body>

</html>

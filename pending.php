<?php 

require 'phpfunction/loginfunction.php';
session_start();


?>



<?php

if(!isset($_SESSION['username']))
{
   header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo" id="username"> </a>
      <!--logo end-->

      

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        </a>
           
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"> admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <form method="post" action="phpfunction/loginfunction.php">
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
           <!--    <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li> -->
              <li>
                <a href="#" class="logout-btn"> <i class="icon_key_alt"></i> Log Out</a>
              </li>
              </form>
              <!-- <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li> -->
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          
          <li class="">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <li class="sub-menu active">
            <a href="javascript:;" class="">
                          <i class="fa fa-users"></i>
                          <span style="font-size: 13px;" >Accounts Activation</span>
                          <span class="menu-arrow arrow_carrot-right" ></span>
                      </a>
            <ul class="sub">
              <li class="active"><a class="" href="pending.php">Pending Activation</a></li>
              <li><a class="" href="approved.php">Approved Activation</a></li>
            </ul>
          </li>

           <li class="">
            <a class="" href="account.php">
                          <i class="fa fa-user"></i>
                          <span>Accounts</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="geneology.php">
                          <i class="icon_flowchart"></i>
                          <span>Geneology Tree</span>
                      </a>
          </li>
        
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_cart_alt"></i>
                          <span>Orders</span>
                          <span class="menu-arrow arrow_carrot-right" ></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="pending-order.php">Pending Order</a></li>
              <li><a class="" href="approved-order.php">Approved Order</a></li>
            </ul>
          </li>
          <li class="">
            <a class="" href="payout.php">
                          <i class="icon_creditcard"></i>
                          <span>Release Payout</span>
                      </a>

          </li>
          <li>
            <a class="" href="product.php">
                          <i class="icon_tag_alt"></i>
                          <span>Products</span>

                      </a>

          </li>
          <li>
            <a class="" href="report.php">
                          <i class="icon_piechart"></i>
                          <span>Report</span>

                      </a>

          </li>
          <li>
            <a class="" href="user.php">
                          <i class="fa fa-user"></i>
                          <span>Users</span>

                      </a>

          </li>
          <li>
            <a class="" href="profile.php">
                          <i class="icon_id-2"></i>
                          <span>My Profile</span>

                      </a>

          </li>
          <li>
            <a class="logout-btn" href="#">
                          <i class="fa fa-sign-out"></i>
                          <span>Logout</span>

                      </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-users "></i>Activation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-users "></i><a href="order.php">Records</a></li>
              <li><i class="fa fa-laptop"></i>Records</li>
            </ol>
          </div>
        </div>

        

        





        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-users red"></i><strong>Pending Records</strong></h2>
               <!--  <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div> -->
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>
                      <th scope="col">Payment Type</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Date Ordered</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                            // WHERE type='video' AND status='draft' AND uniq_id='article'
                           $sql1 = "SELECT * FROM activation_req ";
                        
                        $result1 = $conn->query($sql1);
                    
                       ?> 
                      
                       <?php while ( $row = $result1->fetch_object() ):?>


                       <?php endwhile; ?>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>09256</td>
                          <td>Credit</td>
                          <td>20</td>
                          <td>03-04-19</td>
                          <td>
                            <a class="btn btn-primary" href=""><span class="icon_book"></span> View</a>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="" ><span class="icon_trash"></span> Delete</a>
                          </td>


                        </tr>

                        <tr>
                          <th scope="row">2</th>
                          <td>Carlo</td>
                          <td>02315</td>
                          <td>Credit</td>
                          <td>10</td>
                          <td>03-07-19</td>
                          <td>
                            <a class="btn btn-primary" href=""><span class="icon_book"></span> View</a>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="" ><span class="icon_trash"></span> Delete</a>
                          </td>


                        </tr>

                        <tr>
                          <th scope="row">3</th>
                          <td>Hans</td>
                          <td>12345</td>
                          <td>Credit</td>
                          <td>50</td>
                          <td>03-08-19</td>
                          <td>
                            <a class="btn btn-primary" href=""><span class="icon_book"></span> View</a>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="" ><span class="icon_trash"></span> Delete</a>
                          </td>
                        </tr>

                          <tr>
                          <th scope="row">4</th>
                          <td>Norielle</td>
                          <td>46584</td>
                          <td>Credit</td>
                          <td>70</td>
                          <td>03-09-19</td>
                          <td>
                            <a class="btn btn-primary" href=""><span class="icon_book"></span> View</a>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="" ><span class="icon_trash"></span> Delete</a>
                          </td>
                        </tr>

                         <tr>
                          <th scope="row">5</th>
                          <td>Albert</td>
                          <td>45461</td>
                          <td>Credit</td>
                          <td>80</td>
                          <td>03-10-19</td>
                          <td>
                            <a class="btn btn-primary" href=""><span class="icon_book"></span> View</a>
                          </td>
                          <td>
                            <a class="btn btn-danger" href="" ><span class="icon_trash"></span> Delete</a>
                          </td>
                        </tr>


                    
                  </tbody>
                </table>
              </div>

            </div>

          </div>
     
         

        </div>



        

      </section>
      <div class="text-right">
       
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/custom/custom-function.js"></script>
    <script src="js/custom/database-custom.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

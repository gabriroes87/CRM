<!-- relative root -->
<?php
session_start();
$path = '';
include $path.'../includes/dbh.inc.php';
include $path.'../includes/bypass_security.php';
include $path.'header.php';

if ($_SESSION['cadmin'] == FALSE) {
  // code...
  header("Location: ../index.php");
}
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $path ?>assets/css/style.css">
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
  <script src="js/utils.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


<script>
$(document).ready( function () {
$('#table_id').DataTable();
} );
</script>
</head>
<!-- header -->

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse show navbar-fixed-left" style="">
      <div class="sidebar-sticky pt-3"  id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <ul class="nav flex-column">
          <li class="nav-item">

              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                </svg>
                Home
              </a>

            <!-- <a class="nav-link active" href="cpanel.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Dashbodard <span class="sr-only">(current)</span>
            </a> -->
          </li>
          <li class="nav-item">

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
              </svg>
              Add Costumer
            </a>

            <!-- <a class="nav-link" href="cpanel/costumer.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Customer
            </a> -->
          </li>


          <li class="nav-item">

            <a class="nav-link" id="v-pills-tickets-tab" data-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">
              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
              </svg>
              Tickets
            </a>

          </li>

          <li class="nav-item">

            <!-- <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">

              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path fill="none" d="M4.3,15.249H3.428c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,15.444,4.541,15.249,4.3,15.249 M6.916,15.249H6.044c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,15.444,7.157,15.249,6.916,15.249 M13.894,8.271h0.872c0.241,0,0.437-0.195,0.437-0.437c0-0.241-0.195-0.436-0.437-0.436h-0.872c-0.241,0-0.437,0.194-0.437,0.436C13.457,8.077,13.652,8.271,13.894,8.271 M4.3,7.399H3.428c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,7.594,4.541,7.399,4.3,7.399 M15.638,11.324c-0.241,0-0.436,0.194-0.436,0.436s0.194,0.437,0.436,0.437s0.437-0.195,0.437-0.437S15.879,11.324,15.638,11.324 M14.766,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.241,0,0.437-0.195,0.437-0.437C15.202,15.444,15.007,15.249,14.766,15.249 M12.149,7.399h-0.872c-0.241,0-0.437,0.194-0.437,0.436c0,0.242,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,7.594,12.39,7.399,12.149,7.399 M17.818,9.144V5.655c0-0.939-0.745-1.7-1.676-1.737l-0.104-0.859L9.276,3.88L2.824,2.151l-0.471,1.76H2.119c-0.963,0-1.744,0.781-1.744,1.744v10.466c0,0.963,0.781,1.744,1.744,1.744h13.955c0.963,0,1.744-0.781,1.744-1.744v-1.744c0.963,0,1.744-0.781,1.744-1.745v-1.744C19.562,9.925,18.781,9.144,17.818,9.144 M16.946,5.655v0.242c-0.18-0.104-0.377-0.178-0.589-0.213L16.25,4.801C16.646,4.882,16.946,5.234,16.946,5.655 M15.277,4.029l0.184,1.507l-3.929-1.052L15.277,4.029z M3.44,3.219l9.09,2.436H2.788L3.44,3.219z M1.247,5.655c0-0.481,0.39-0.872,0.871-0.872l-0.24,0.896C1.65,5.711,1.438,5.786,1.247,5.897V5.655z M16.946,16.121c0,0.48-0.392,0.872-0.872,0.872H2.119c-0.482,0-0.872-0.392-0.872-0.872V7.399c0-0.481,0.39-0.872,0.872-0.872h13.955c0.48,0,0.872,0.391,0.872,0.872v1.744h-1.744c-0.964,0-1.745,0.781-1.745,1.744v1.744c0,0.964,0.781,1.745,1.745,1.745h1.744V16.121z M18.69,12.632c0,0.481-0.392,0.873-0.872,0.873h-2.616c-0.482,0-0.873-0.392-0.873-0.873v-1.744c0-0.481,0.391-0.872,0.873-0.872h2.616c0.48,0,0.872,0.391,0.872,0.872V12.632z M12.149,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,15.444,12.39,15.249,12.149,15.249 M9.533,15.249H8.661c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,15.444,9.774,15.249,9.533,15.249 M6.916,7.399H6.044c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,7.594,7.157,7.399,6.916,7.399 M9.533,7.399H8.661c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,7.594,9.774,7.399,9.533,7.399"></path>
              </svg>
              Create Checking Account

            </a> -->

          </li>

          <li class="nav-item">

            <a class="nav-link" id="v-pills-costumers-tab" data-toggle="pill" href="#v-pills-costumers" role="tab" aria-controls="v-pills-costumers" aria-selected="false">

              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M17.211,3.39H2.788c-0.22,0-0.4,0.18-0.4,0.4v9.614c0,0.221,0.181,0.402,0.4,0.402h3.206v2.402c0,0.363,0.429,0.533,0.683,0.285l2.72-2.688h7.814c0.221,0,0.401-0.182,0.401-0.402V3.79C17.612,3.569,17.432,3.39,17.211,3.39M16.811,13.004H9.232c-0.106,0-0.206,0.043-0.282,0.117L6.795,15.25v-1.846c0-0.219-0.18-0.4-0.401-0.4H3.189V4.19h13.622V13.004z"></path>
              </svg>
              Costumers

            </a>

          </li>
          <li class="nav-item">

            <!-- <a class="nav-link" id="v-pills-cards-tab" data-toggle="pill" href="#v-pills-cards" role="tab" aria-controls="v-pills-cards" aria-selected="false">

              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M15.475,6.692l-4.084-4.083C11.32,2.538,11.223,2.5,11.125,2.5h-6c-0.413,0-0.75,0.337-0.75,0.75v13.5c0,0.412,0.337,0.75,0.75,0.75h9.75c0.412,0,0.75-0.338,0.75-0.75V6.94C15.609,6.839,15.554,6.771,15.475,6.692 M11.5,3.779l2.843,2.846H11.5V3.779z M14.875,16.75h-9.75V3.25h5.625V7c0,0.206,0.168,0.375,0.375,0.375h3.75V16.75z"></path>
              </svg>
              Cards

            </a> -->

          </li>


          <li class="nav-item">

            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
              Integrations
            </a>

          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Customer Relationship Management</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">

          </a>
        </h6>

      </div>
    </nav>





    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>




      <div class="d-flex justify-content-between dash-chart-main flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a class="navbar-brand" href="<?php echo $path ?>assets/cpanel.php" style="color:#006994;">
            <img src="<?php echo $path ?>assets/media/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <?php echo $_SESSION['cname'] ?>
          </a>

          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="mx-2 mr-4">
              <?php echo date("F jS ");?><b> <?php echo date("h:ia");?></b>
            </div>

        </div>


      </div>

      <div class="col-md-4 mx-auto">
        <?php
        if(isset($_GET['status'])) {
          $status = $_GET['status'];
          if ($status == 'ID_NOT_FOUND') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              ???? id was not found in our records, check id or contact support.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'ID_ASSIGNED') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              ???? this id already has an username assigned.
              <hr>
              You can close this alert now.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'USER_EXIST') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              ???? username already exist, please type a different one.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'EMAIL_EXIST') {
            // code...
            echo '
            <div class="alert alert-warning alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Warning</h4>
              <hr>
              ???? <strong>Holy guacamole!</strong> a costumer with the same email already exist, check costumer records.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'ID_EXIST') {
            // code...
            echo '
            <div class="alert alert-warning alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Warning</h4>
              <hr>
              ???? <strong>Holy guacamole!</strong> a costumer with the same id already exist, check costumer records.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          }elseif ($status == 'SUCCESS' || $status == 'SIGNUP_SUCCESS') {
            // code...
            echo '
            <div class="alert alert-success alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Well done!</h4>
              <hr>
              ?????? credentials stored.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          }
        }
        ?>
      </div>




        <div class="tab-content" id="v-pills-tabContent">



          <!-- HOME TAB -->
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


            <!-- Home BODY -->
            <div class="mb-5"></div> <!-- spacer -->
            <h3>Control Center</h3>
            <div class="mb-5"></div> <!-- spacer -->


            <?php
              $sql = 'SELECT * FROM ticket WHERE tstatus = 0';
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $open_tickets = $stmt->rowCount();

              $sql = 'SELECT * FROM ticket WHERE tstatus = 1';
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $res_tickets = $stmt->rowCount();

              $sql = 'SELECT * FROM ticket WHERE tstatus = 2';
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $closed_tickets = $stmt->rowCount();


              $sql = 'SELECT * FROM costumer';
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $costumer_sum = $stmt->rowCount();
            ?>

            <div class="col-lg-6">

            <h1 class="h3">Welcome back agent, current stats</h1>
            <div class="mb-5"></div> <!-- spacer -->



            </div>


            <!-- Home BODY -->

            <div class="row">
              <div class="col-lg-6">

              
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>

                <div class="col-lg-6">
                <h1 class="h5">Open Tickets <b><?php print($open_tickets) ?></b></h1>
                <h1 class="h5">Resolved Tickets <b><?php print($res_tickets) ?></b></h1>
                <h1 class="h5">Closed Tickets <b><?php print($closed_tickets) ?></b></h1>
                <div class="mb-5"></div> <!-- spacer -->
                </div>
              		<!-- <canvas id="myChart" style="display: block; width: 452px; height: 226px;" width="452" height="226" class="chartjs-render-monitor"></canvas> -->


              </div><!-- /.col-lg-4 -->

              <div class="col-lg-6">
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart2" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>
                <div class="col-lg-6">
                <h1 class="h5">Current Costumers : <b><?php print($costumer_sum) ?></b></h1>
                <h1 class="h5">Total Tickets <b><?php print($open_tickets + $res_tickets + $closed_tickets) ?></b></h1>
                <div class="mb-5"></div> <!-- spacer -->
                </div>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


          </div>



          <!-- CREATE USER TAB -->
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

          
            <div class="col-lg-12 col-md-8">
              <form class="form-signin"  action="<?php echo $path ?>includes/cpanel_signup.inc.php" method="post">

                <div class="text-center mb-4">
                  <svg class="svg-icon" viewBox="0 0 20 20" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                  </svg>
                  <h1 class="h3 mb-3 font-weight-normal">Enroll a new Costumer</h1>
                  <h6>Get closer to you clients, and let them manage all their information <b>online</b>.</h6>
                </div>
                <div class="mb-5"></div>

                <div class="form-label-group mb-3">
                  <label for="input_nit">Taxpayer Identification Number</label>
                  <input type="text" name="nit" id="input_nit" class="form-control tin"  required="" autofocus="">
                </div>
                
                <div class="form-label-group mb-3">
                  <label for="input_cid">Identification Number</label>
                  <input type="text" name="dpi" id="input_cid" class="form-control userid"  required="" autofocus="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_cname">Name</label>
                  <input type="text" name="cname" id="input_cname" class="form-control"  required="" autofocus="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_ccompany">Company</label>
                  <input type="text" name="ccompany" id="input_ccompany" class="form-control"  required="" autofocus="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_cdob">Date of Birth</label>
                  <input type="date" name="cdob" id="input_cdob" class="form-control" required="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_cphone">Phone</label>
                  <input type="text" name="cphone" id="input_cphone" class="form-control phone" required="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_cemail">Email</label>
                  <input type="text" name="cemail" id="input_cemail" class="form-control" autofocus="">
                </div>

                <div class="form-label-group mb-3">
                  <label for="input_caddress">Address</label>
                  <textarea class="form-control" name="caddress" id =input_caddress" rows="4" required></textarea>
                </div>

                <div class="mb-4"></div>
                <button type="reset" class="btn btn-md btn-light">Clear</button>

                <div class="mb-4"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="cpanel-signup-submit">Submit</button>

              </form>
            </div>



          </div>


          <!-- CREATE CARD TAB -->
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

            <div class="col-lg-12 col-md-8">
              <form class="form-signin"  action="<?php echo $path ?>includes/card_register.inc.php" method="post">
                <div class="text-center mb-4">
                  <svg class="svg-icon" viewBox="0 0 20 20" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M17.728,4.419H2.273c-0.236,0-0.429,0.193-0.429,0.429v10.304c0,0.234,0.193,0.428,0.429,0.428h15.455c0.235,0,0.429-0.193,0.429-0.428V4.849C18.156,4.613,17.963,4.419,17.728,4.419 M17.298,14.721H2.702V9.57h14.596V14.721zM17.298,8.712H2.702V7.424h14.596V8.712z M17.298,6.566H2.702V5.278h14.596V6.566z M9.142,13.005c0,0.235-0.193,0.43-0.43,0.43H4.419c-0.236,0-0.429-0.194-0.429-0.43c0-0.236,0.193-0.429,0.429-0.429h4.292C8.948,12.576,9.142,12.769,9.142,13.005"></path>
                  </svg>
                  <h1 class="h3 mb-3 font-weight-normal">Create a new Card</h1>
                  <h6>Easily manage your bank accounts and finances <b>online</b>.</h6>
                </div>

                <!-- FUNCTIONALITY -->
                <?php
                // CREDIT CARD NUMBER GENERATOR
                function cnumberGen() {
                  $result="5";
                  array_map(function($value) use(&$result){
                    $result.=mt_rand(0, 9);
                  }, range(0,14));
                  return $result;
                }
                // CREDIT CARD NUMBER VERIFIATION
                function cardGen($conn) {
                  $cardNumber = cnumberGen();
                  $sql = 'SELECT * FROM card WHERE cnumber=:cnumber';
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(['cnumber' => $cardNumber]);
                  $row = $stmt->fetchObject();
                  if ($row > 0) {
                    cardGen($conn);
                  } else
                  echo $cardNumber;
                }
                //CVV GENERATOR
                function cvvGen() {
                  $result = rand(100,999);
                  echo $result;
                }
                // EXP DATE GENERATOR
                function dateGen() {
                  $date = date('Y/m/d');
                  $result = date("Y-m-d", strtotime(date("Y-m-d", strtotime($date)) . " + 3 year"));
                  echo $result;
                }
                 ?>

                <div class="mb-5"></div>
                <!-- CREDIT CARD NUMBER  -->
                <div class="form-label-group mb-3">
                  <label for="cardID">Card Number</label>
                  <input type="text" name="cnumber" id="cardID" class="form-control creditcard" value="<?php cardGen($conn); ?>" readonly>
                </div>
                <!-- CUSTOMER SELECTION -->
                <div class="form-label-group mb-3">
                  <!-- <input type="text" name="cuser" id="inputUsername" class="form-control" placeholder="Username" required="">  -->
                  <label for="input_cid">Costumer Identification Number</label>
                  <select id="input_cid" name="cid" class="form-control selectpicker" title="" required>
                       <option disabled selected></option>
                       <?php
                       $sql = 'SELECT cid, cname FROM costumer';
                       $stmt = $conn->prepare($sql);
                       $stmt->execute();
                       $row = $stmt->fetchAll();
                       // SELECT COSTUMER
                       foreach ($row as $row) {
                         echo '<option value="'.$row->cid.'">'.$row->cname.' [ '.$row->cid.' ]</option>';
                       }
                        ?>
                    </select>
                </div>
                <!-- LIMIT -->
                <div class="form-label-group mb-3">
                  <label for="input_climit">Credit Limit</label>
                  <input type="text" name="climit" value='15000.0000' id="input_climit" class="form-control amount">
                </div>
                <!-- CVV -->
                <div class="form-label-group mb-3">
                  <label for="input_cvv">CVV</label>
                  <input type="text" name="cvv" value='<?php cvvGen(); ?>' id="input_cvv" class="form-control cvv" required="" readonly>
                </div>
                <!--  -->
                <div class="form-label-group mb-3">
                  <label for="input_cexp_date">Exp. Date</label>
                  <input type="date" name="cexp_date" value='<?php dateGen(); ?>' id="input_cexp_date" class="form-control cvv" required="" readonly>
                </div>

                <div class="mb-5"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="card-register-submit">Create a Mastercash??</button>

              </form>
            </div>
          </div>


          <!-- CREATE ACCOUNT TAB -->
          <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">

            <div class="col-lg-12 col-md-8">
              <form class="form-signin"  action="<?php echo $path ?>includes/checking_register.inc.php" method="post">
                <div class="text-center mb-4">
                  <svg class="svg-icon" viewBox="0 0 20 20" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path fill="none" d="M4.3,15.249H3.428c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,15.444,4.541,15.249,4.3,15.249 M6.916,15.249H6.044c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,15.444,7.157,15.249,6.916,15.249 M13.894,8.271h0.872c0.241,0,0.437-0.195,0.437-0.437c0-0.241-0.195-0.436-0.437-0.436h-0.872c-0.241,0-0.437,0.194-0.437,0.436C13.457,8.077,13.652,8.271,13.894,8.271 M4.3,7.399H3.428c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,7.594,4.541,7.399,4.3,7.399 M15.638,11.324c-0.241,0-0.436,0.194-0.436,0.436s0.194,0.437,0.436,0.437s0.437-0.195,0.437-0.437S15.879,11.324,15.638,11.324 M14.766,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.241,0,0.437-0.195,0.437-0.437C15.202,15.444,15.007,15.249,14.766,15.249 M12.149,7.399h-0.872c-0.241,0-0.437,0.194-0.437,0.436c0,0.242,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,7.594,12.39,7.399,12.149,7.399 M17.818,9.144V5.655c0-0.939-0.745-1.7-1.676-1.737l-0.104-0.859L9.276,3.88L2.824,2.151l-0.471,1.76H2.119c-0.963,0-1.744,0.781-1.744,1.744v10.466c0,0.963,0.781,1.744,1.744,1.744h13.955c0.963,0,1.744-0.781,1.744-1.744v-1.744c0.963,0,1.744-0.781,1.744-1.745v-1.744C19.562,9.925,18.781,9.144,17.818,9.144 M16.946,5.655v0.242c-0.18-0.104-0.377-0.178-0.589-0.213L16.25,4.801C16.646,4.882,16.946,5.234,16.946,5.655 M15.277,4.029l0.184,1.507l-3.929-1.052L15.277,4.029z M3.44,3.219l9.09,2.436H2.788L3.44,3.219z M1.247,5.655c0-0.481,0.39-0.872,0.871-0.872l-0.24,0.896C1.65,5.711,1.438,5.786,1.247,5.897V5.655z M16.946,16.121c0,0.48-0.392,0.872-0.872,0.872H2.119c-0.482,0-0.872-0.392-0.872-0.872V7.399c0-0.481,0.39-0.872,0.872-0.872h13.955c0.48,0,0.872,0.391,0.872,0.872v1.744h-1.744c-0.964,0-1.745,0.781-1.745,1.744v1.744c0,0.964,0.781,1.745,1.745,1.745h1.744V16.121z M18.69,12.632c0,0.481-0.392,0.873-0.872,0.873h-2.616c-0.482,0-0.873-0.392-0.873-0.873v-1.744c0-0.481,0.391-0.872,0.873-0.872h2.616c0.48,0,0.872,0.391,0.872,0.872V12.632z M12.149,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,15.444,12.39,15.249,12.149,15.249 M9.533,15.249H8.661c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,15.444,9.774,15.249,9.533,15.249 M6.916,7.399H6.044c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,7.594,7.157,7.399,6.916,7.399 M9.533,7.399H8.661c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,7.594,9.774,7.399,9.533,7.399"></path>
                  </svg>
                  <h1 class="h3 mb-3 font-weight-normal">Create a Checking Account</h1>
                  <h6>Easily store money and pay your credit card <b>online</b>.</h6>
                </div>

                <!-- FUNCTIONALITY -->

                <div class="mb-5"></div>
                <!-- CUSTOMER SELECTION -->
                <div class="form-label-group mb-3">
                  <!-- <input type="text" name="cuser" id="inputUsername" class="form-control" placeholder="Username" required="">  -->
                  <label for="input_cid">Costumer Identification Number</label>
                  <select id="input_cid" name="cid" class="form-control selectpicker" title="" required>
                       <option disabled selected></option>
                       <?php
                       $sql = 'SELECT cid, cname FROM costumer';
                       $stmt = $conn->prepare($sql);
                       $stmt->execute();
                       $row = $stmt->fetchAll();
                       // SELECT COSTUMER
                       foreach ($row as $row) {
                         echo '<option value="'.$row->cid.'">'.$row->cname.' [ '.$row->cid.' ]</option>';
                       }
                        ?>
                    </select>
                </div>
                <!-- FUNDS -->
                <div class="form-label-group mb-3">
                  <label for="input_cfund">Funds</label>
                  <input type="text" name="cfund" value='15000.00' id="input_cfund" class="form-control camount">
                </div>

                <div class="mb-5"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="checking-register-submit">Create Checking Account</button>

              </form>
            </div>
          </div>

          <!-- TICKETS TAB -->

          
          <div class="tab-pane fade" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
          <div class="mb-5"></div> <!-- spacer -->  
          <h2>Tickets</h2>
          <div class="table-responsive">
            <form class="form-inline my-2 my-lg-0">
              <div class="form-label-group">
                <input type="text" id="myInputTicket" class="form-control mr-sm-2" placeholder="Search">
              </div>
            </form>
            <div class="mb-4"></div> <!-- spacer -->
            
            
            <table class="table table-hover" id="myTicketTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Status</th>
                  <th scope="col">Ticket Number</th>
                  <th scope="col">Name</th>
                  <th scope="col">NIT</th>
                  <th scope="col"></th>
                  <th scope="col">Title</th>
                  <th scope="col"></th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = 'SELECT * 
                          FROM ticket 
                          LEFT JOIN costumer
                            ON ticket.nit = costumer.nit
                          WHERE cadmin=FALSE
                          ORDER BY tstatus ASC, created ASC';
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $row = $stmt->fetchAll();
                  // display all tickets
                  foreach ($row as $row) {
                    $orgDate = $row->created;
                    $newDate = date("F jS h:ia", strtotime($orgDate));
                    echo '
                      <tr>
                        <td scope="row"><b>';
                          switch ($row->tstatus) {
                            case 0:
                                echo '<p style="color:#088da5" title="We???ve received your message and your ticket is waiting to be responded to by an agent."><b>open</b></p>';
                                break;
                            case 1:
                                echo '<p style="color:#037d50" title="A determination has been made and your ticket has been closed."><b>resolved</b></p>';
                                break;
                            case 2:
                                echo '<p style="color:#b30000" title="Ticket has been closed."><b>closed</b></p>';
                                break;
                          }
                          echo '</b>
                        </td>
                        <td scope="row">
                            <form class="form-ticket-submit"  action="ticket.php" method="post">
                              <input type="hidden" name="tid" value="'.$row->tid.'" id="tid" class="form-control">
                              <button class="btn" type="submit" name="submit-ticket" title="Ticket Number">
                                <svg class="svg-icon" viewBox="0 0 25 25" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M12.522,10.4l-3.559,3.562c-0.172,0.173-0.451,0.176-0.625,0c-0.173-0.173-0.173-0.451,0-0.624l3.248-3.25L8.161,6.662c-0.173-0.173-0.173-0.452,0-0.624c0.172-0.175,0.451-0.175,0.624,0l3.738,3.736C12.695,9.947,12.695,10.228,12.522,10.4 M18.406,10c0,4.644-3.764,8.406-8.406,8.406c-4.644,0-8.406-3.763-8.406-8.406S5.356,1.594,10,1.594C14.643,1.594,18.406,5.356,18.406,10M17.521,10c0-4.148-3.374-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.147,17.521,17.521,14.147,17.521,10"></path>
                                </svg>
                                <b>'.sprintf("%010s", $row->tid).'</b>
                              </button>
                            </form>
                        </td>
                        <td>'.$row->cname.'</td>
                        <td class="align-top">'.$row->nit.'</td>
                        <td></td>
                        <td>'.$row->msg.'</td>
                        <td></td>
                        <td>'.$newDate.'</td>

                      </tr>



                    ';

                  }
                   ?>

                </tbody>
              </table>
            </div>
          </div>


          <!-- END TICKETS TAB -->







          <!-- COSTUMERS TAB -->
          <div class="tab-pane fade" id="v-pills-costumers" role="tabpanel" aria-labelledby="v-pills-costumers-tab">
          <div class="mb-5"></div> <!-- spacer -->  
            <h2>Costumers</h2>
            <hr>
            <div class="table-responsive">
              
            
            <form class="form-inline my-2 my-lg-0">
              
            <div class="form-label-group">
              <input type="text" id="myInput" class="form-control mr-sm-2" placeholder="Search">
            </div>
            </form>


          


          
        <div class="mb-4"></div> <!-- spacer -->

              <table class="table table-hover" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">NIT</th>
                    <th scope="col">DPI</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>

                  </tr>
                </thead>
                <tbody>

                  <?php
                  $sql = 'SELECT * 
                          FROM costumer
                          LEFT JOIN cstatus
                            ON costumer.nit = cstatus.nit
                          WHERE cadmin=FALSE
                          ORDER BY cname ASC';
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $row = $stmt->fetchAll();
                  // SELECT COSTUMER
                  foreach ($row as $row) {
                    echo '
                      <tr>
                        <td scope="row">
                          <form class="form-ticket-submit"  action="costumer.php" method="post">
                            <input type="hidden" name="nit" value="'.$row->nit.'" id="nit" class="form-control">
                            <button class="btn" type="submit" name="submit-costumer-edit" title="NIT">
                              <svg class="svg-icon" viewBox="0 0 25 25" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M12.522,10.4l-3.559,3.562c-0.172,0.173-0.451,0.176-0.625,0c-0.173-0.173-0.173-0.451,0-0.624l3.248-3.25L8.161,6.662c-0.173-0.173-0.173-0.452,0-0.624c0.172-0.175,0.451-0.175,0.624,0l3.738,3.736C12.695,9.947,12.695,10.228,12.522,10.4 M18.406,10c0,4.644-3.764,8.406-8.406,8.406c-4.644,0-8.406-3.763-8.406-8.406S5.356,1.594,10,1.594C14.643,1.594,18.406,5.356,18.406,10M17.521,10c0-4.148-3.374-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.147,17.521,17.521,14.147,17.521,10"></path>
                              </svg>
                              <b>'.$row->nit.'</b>
                            </button>
                          </form>
                        </td>
                        <td>'.$row->dpi.'</td>
                        <td>'.$row->cname.'</td>
                        <td class="align-top">';
                        switch ($row->cstatus) {
                          case 0:
                              echo '<p style="color:#b08D57"><b>Bronze</b></p>';
                              break;
                          case 1:
                              echo '<p style="color:#555652"><b>Silver</b></p>';
                              break;
                          case 2:
                              echo '<p style="color:#DAA520"><b>Gold</b></p>';
                              break;
                          case 3:
                              echo '<p style="color:#aaa9ae"><b>Platinum</b></p>';
                              break;
                          case 4:
                              echo '
                              <p style="color:#70d1f4"><b>
                                Diamond
                              </b></p>';
                              break;
                            }
                        
                        echo '</td>
                        <td>'.$row->cemail.'</td>
                        <td>'.$row->cphone.'</td>


                      </tr>



                    ';

                  }
                   ?>

                </tbody>
              </table>
            </div>
          </div>

          <!-- CARDS TAB -->
          <div class="tab-pane fade" id="v-pills-cards" role="tabpanel" aria-labelledby="v-pills-cards-tab">
            <h2>Cards</h2>
            <hr>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Credit Card</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Exp. Date</th>
                    <th scope="col">Credit Limit</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $sql = 'SELECT cnumber, card.cid, cexp_date, cissue_date, climit, cbalance, cname FROM card LEFT JOIN costumer ON costumer.cid = card.cid';
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $row = $stmt->fetchAll();
                  // SELECT COSTUMER
                  foreach ($row as $row) {
                    echo '
                      <tr>
                        <td scope="row"><b>'.$row->cnumber.'</b></td>
                        <td title="'.$row->cname.'">'.$row->cid.'</td>
                        <td>'.$row->cexp_date.'</td>
                        <td>'.$row->cissue_date.'</td>
                        <td>Q '.$row->climit.'</td>
                        <td>Q '.$row->cbalance.'</td>
                        <td>
                          <form >
                            <button class="btn" type="submit" name="delete-card-submit" title="Delete">
                              <svg class="svg-icon" viewBox="0 0 20 20" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306"></path>
                              </svg>
                            </button>
                            <button class="btn" type="submit" name="delete-costumer-submit" title="Edit">
                              <svg class="svg-icon" viewBox="0 0 20 20" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M17.064,4.656l-2.05-2.035C14.936,2.544,14.831,2.5,14.721,2.5H3.854c-0.229,0-0.417,0.188-0.417,0.417v14.167c0,0.229,0.188,0.417,0.417,0.417h12.917c0.229,0,0.416-0.188,0.416-0.417V4.952C17.188,4.84,17.144,4.733,17.064,4.656M6.354,3.333h7.917V10H6.354V3.333z M16.354,16.667H4.271V3.333h1.25v7.083c0,0.229,0.188,0.417,0.417,0.417h8.75c0.229,0,0.416-0.188,0.416-0.417V3.886l1.25,1.239V16.667z M13.402,4.688v3.958c0,0.229-0.186,0.417-0.417,0.417c-0.229,0-0.417-0.188-0.417-0.417V4.688c0-0.229,0.188-0.417,0.417-0.417C13.217,4.271,13.402,4.458,13.402,4.688"></path>
                              </svg>
                            </button>
                          </form>
                        </td>

                      </tr>



                    ';

                  }
                   ?>

                </tbody>
              </table>
            </div>
          </div>


        </div>
        <!--<canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>-->
        <?php require __DIR__."/footer.php"; ?>
      </main>
    </div>
  </div>



  <script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTicketTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[1].textContent.toUpperCase();
        var secondCol = rows[i].cells[2].textContent.toUpperCase();
        var thirdCol = rows[i].cells[3].textContent.toUpperCase();
        var fourthCol = rows[i].cells[5].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1 || fourthCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}

document.querySelector('#myInputTicket').addEventListener('keyup', filterTable, false);
</script>


  
  <script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[0].textContent.toUpperCase();
        var secondCol = rows[i].cells[1].textContent.toUpperCase();
        var thirdCol = rows[i].cells[2].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}

document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
</script>
  <script>
Chart.defaults.global.legend.display = false;

        var ctxi = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctxi, {
            // The type of chart we want to create
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php print($open_tickets) ?>,
                  <?php print($res_tickets) ?>,
                  <?php print($closed_tickets) ?>,
                ],
                backgroundColor: [
                  window.chartColors.blue,
                  window.chartColors.green,
                  window.chartColors.red,
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Open',
                'Resolved',
                'Closed'
              ]
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
              title: {
                display: true,
                text: 'Ticket Statistics'
              },
              animation: {
                duration: 5000,
      					animateScale: true,
      					animateRotate: true
      				}
            }
        });




        var ctx = document.getElementById('myChart2').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'polarArea',
            data: {
              datasets: [{
                data: [
                  <?php print($costumer_sum) ?>,
                  <?php print($open_tickets + $closed_tickets + $res_tickets) ?>,
                ],
                backgroundColor: [
                  window.chartColors.orange,
                  window.chartColors.purple,
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Costumers',
                'Tickets'
              ]
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
              title: {
                display: true,
                text: 'Support KDA Ratio'
              },
              animation: {
                duration: 5000,
      					animateScale: true,
      					animateRotate: true
      				}
            }
        });

      	</script>
DPI
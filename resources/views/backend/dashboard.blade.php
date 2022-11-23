@extends('backend.layouts.app')

@section('title', 'Home')
<script type="text/javascript">
  window.onload = setInterval(clock,1000);

  function clock()
  {
  var d = new Date();
  
  var date = d.getDate();
  
  var month = d.getMonth();
  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
  month=montharr[month];
  
  var year = d.getFullYear();
  
  var day = d.getDay();
  var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
  day=dayarr[day];
  
  var hour =d.getHours();
    var min = d.getMinutes();
  var sec = d.getSeconds();

  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
  }
</script>
@section('content')
    <section class="themebackgrounddashboard">
       
            
                    {{-- <div class="card-body label1">
                        <h1 class="text-bold text-center">Welcome to Admin Panel.</h1>
                    </div> --}}
                    <div class="card-body label1">
                      <p id="date"></p>
                      <p id="time"></p>
                  </div>
                   
                    <div class="row card-body  ">
                      <div class="row ">

                        <div class="col-lg-6 col-3 ">
                            <!-- small box -->
                            <div class="small-box bg-info CARDcolor">
                              <div class="inner">
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "patientdb");
                                    $query = "SELECT * FROM inpatients ORDER by id";
                                    $query_run = mysqli_query($conn, $query);
                
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3> '.$row.' </h3>';
                
                                ?>
                                <p>Total InPatients</p>
                              </div>
                              <div class="icon">
                              <i class="fas fa-user-alt"></i>
                              </div>
                              {{-- <a href="details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                          </div>

                          <div class="col-lg-6 col-3 ">
                            <!-- small box -->
                            <div class="small-box bg-info CARDcolor">
                              <div class="inner">
                                <?php
                                    $conn = mysqli_connect("localhost", "root", "", "patientdb");
                                    $query = "SELECT * FROM appointments ORDER by id";
                                    $query_run = mysqli_query($conn, $query);
                
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3> '.$row.' </h3>';
                
                                ?>
                                <p>Total Appoinment/s</p>
                              </div>
                              <div class="icon">
                              <i class="fas fa-user-alt"></i>
                              </div>
                              {{-- <a href="details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                          </div>
                          <!-- ./col -->
                         
                    
                
                     
                      <div class="col-lg-6 col-3 ">
                        <!-- small box -->
                        <div class="small-box bg-info CARDcolor">
                          <div class="inner">
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "patientdb");
                                $query = "SELECT * FROM staff ORDER by id";
                                $query_run = mysqli_query($conn, $query);
            
                                $row = mysqli_num_rows($query_run);
                                echo '<h3> '.$row.' </h3>';
            
                            ?>
                            <p>Total Staff</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-user-alt"></i>
                          </div>
                          {{-- <a href="details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                      </div>
                      <!-- ./col -->
                     
                    </div>
            
                  </div>
                  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
      
    </section>
@endsection
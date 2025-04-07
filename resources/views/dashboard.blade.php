<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/fresh.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <style>
  .btn {
  background-color: rgba(150, 160, 255, 0.5);
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-weight: bold;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.btn:hover {
  transition: 0.5s;
  box-shadow: 5px 10px 10px rgb(110, 110, 222);
}
.btn {
  animation: pulse 1s linear infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
#confirm{
  position: relative;
  top: 80px;
}
#row{
  position: relative;
  top: 50px;
}

 </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="/assets/images/profile/covid-19.webp.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8" id="cross"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            @can('user details')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('users.index')}}">
                <i class="fas fa-user"></i>
                <span class="hide-menu">User Details</span>
              </a>
            </li>
            @endcan
            @can('create permission')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('permission')}}">
                <i class="fas fa-cog"></i> <!-- Cog icon for settings -->
                <span class="hide-menu">Create_permissions</span>
              </a>
            </li>
            @endcan
            @can('create Role')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('role.main')}}"> 
                <i class="fas fa-user-shield"></i> <!-- Admin icon -->
                <span class="hide-menu">Create_Roles</span>
              </a>
            </li>
            @endcan
            @can('booking')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.index')}}">  
                <i class="fas fa-book"></i>
                <span class="hide-menu">Booking</span>
              </a>
            </li>
            @endcan
            @can('booking lists')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.viewbooking')}}">
                <i class="fas fa-list"></i> 
                <span class="hide-menu">Booking lists</span>
              </a>
            </li>
            @endcan
            @can('create reports')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.test')}}">
                <i class="fas fa-vial"></i>
                <span class="hide-menu">Create Covid-19 test report</span>
              </a>
            </li>
            @endcan
            @can('admin view report')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.viewreport')}}">
                <i class="fas fa-eye"></i> 
                <span class="hide-menu">View Reports</span>
              </a>
            </li>
            @endcan
            @can('vaccination status')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.vaccination')}}">
                <i class="fas fa-check-circle"></i>
                <span class="hide-menu">Vaccination_status</span>
              </a>
            </li>
            @endcan
            @can('vaccine request')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.vaccinerequest')}}">
                <i class="fas fa-file-alt"></i>
                <span class="hide-menu">Vaccine Request</span>
              </a>
            </li>
            @endcan
            @can('request details')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.vaccinehistory')}}">
                <i class="fas fa-info-circle"></i>
                <span class="hide-menu">Vaccine Request details</span>
              </a>
            </li>
            @endcan
            @can('search')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.getvaccine')}}">
                <i class="fas fa-search"></i>
                <span class="hide-menu">Vaccine Search Details</span>
              </a>
            </li>
            @endcan
            @can('view report')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.take')}}">
                <i class="fas fa-eye"></i>
                <span class="hide-menu">Patient_View_Reports</span>
              </a>
            </li>
            @endcan
            @can('create appoinment')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.appoinment')}}">
                <i class="fas fa-calendar-alt"></i>
                <span class="hide-menu">Create_Appoiment</span>
              </a>
            </li>
            @endcan
            @can('Appoinment view')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.appoinmentgetview')}}">
                <i class="fas fa-calendar-alt"></i>
                <span class="hide-menu">Appoiment_View</span>
              </a>
            </li>
            @endcan
            @can('Vaccine list')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('patient.vaccinelist')}}">
                <i class="fas fa-syringe"></i>
                <span class="hide-menu">Vaccine_lists</span>
              </a>
            </li>
            @endcan
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      
      <header class="app-header p-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <li class="nav-item d-block d-xl-none" id="toggle">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2" id="menu"></i>
                </a>
              </li>
                <ul class="navbar-nav" id="abc">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4" style="color: black;"></i>
                            <span style="font-size: 17px; color:black;">{{ Auth::user()->name }} ({{Auth::user()->roles->pluck("name")->implode(",")}})</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown" style="color: black;">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('patient.pic', Auth::user()->id) }}">
                                    <i class="bi bi-person fs-6 me-2"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                    <i class="bi bi-box-arrow-right fs-6 me-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8">
                  <div class="mb-3 mb-sm-0">
                    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Dashboard</h1>
                    @if (session('not'))
                    <div class="alert alert-danger" id="alert">
                     {{session('not')}}
                    </div>
                    @endif
                   </div>
                    @if (session('success'))
                   <div class="alert alert-success" id="alert">
                    {{ session('success') }}
                   </div>
                   @endif
                    @if (session('profile'))
                   <div class="alert alert-success"  id="alert">
                    {{session('profile')}}
                   </div>
                   @endif
                  </div>
                  @if (session('delete'))
                   <div class="alert alert-danger"  id="alert">
                    {{session('delete')}}
                   </div>
                   @endif
                  </div>
                  @if (session('error'))
                  <div class="alert alert-danger"  id="alert">
                   {{session('error')}}
                  </div>
                  @endif
                  @if (session('danger'))
                  <div class="alert alert-danger"  id="alert">
                   {{session('danger')}}
                  </div>
                  @endif
                  @if (session('No'))
                  <div class="alert alert-danger"  id="ale">
                   {{session('No')}}
                  </div>
                  @endif
                  @if (session('data'))
                  <div class="alert alert-danger"  id="ale">
                   {{session('data')}}
                  </div>
                  @endif
                  @if (session('exists'))
                  <div class="alert alert-danger"  id="ale">
                   {{session('exists')}}
                   </div>
                   @endif
        </div>
        <script>
           document.addEventListener("DOMContentLoaded",function(){
            var ale = document.getElementById("ale");
            setTimeout(function(){
              ale.style.display = "none";
            },10000)
          })
          document.addEventListener("DOMContentLoaded",function(){
            var alert = document.getElementById("alert");
            setTimeout(function(){
              alert.style.display = "none";
            },5000)
          })
        </script>
        @if (auth()->user()->hasAnyRole(['Hospital', 'Admin']))
        <div class="container mt-5">
          <div class="row" id="row">
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body text-center">
                  <i class="fas fa-calendar-check" style="font-size:50px;" ></i> <!-- Icon for bookings -->
                  <p class="card-text" id="totals">Total-Bookings : {{$booking}}</p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
                  <div class="card mb-3">
                      <div class="card-body text-center">
                        <i class="fas fa-file-alt" style="font-size:50px;"></i> <!-- Icon for reports -->
                        <p class="card-text" id="totals">Total-Reports : {{$report}}</p>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body text-center">
                    <i class="fas fa-syringe" style="font-size:50px;"></i> <!-- Icon for vaccines -->
                    <p class="card-text" id="totals">Total-Vaccines : {{$vaccine}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
      
        <div class="container mt-5" id="confirm">
          <h2 class="text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">COVID-19 Cases Distribution</h2>
          <div class="row">
              <div class="col-md-12">
                  <div class="chart-container">
                      <canvas id="covidPieChart"></canvas>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Bootstrap JS and dependencies -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <!-- Chart.js script -->
      <script>
          var ctx = document.getElementById('covidPieChart').getContext('2d');
          var covidPieChart = new Chart(ctx, {
              type: 'pie', // Pie chart type
              data: {
                  labels: ['New Cases', 'Recovered', 'Deaths'], // Labels for the pie chart
                  datasets: [{
                      label: 'COVID-19 Cases',
                      data: [300, 1500, 200], // Example data
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  plugins: {
                      legend: {
                          position: 'top',
                      },
                      tooltip: {
                          callbacks: {
                              label: function(tooltipItem) {
                                  return tooltipItem.label + ': ' + tooltipItem.raw;
                              }
                          }
                      }
                  }
              }
          });
      </script>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>
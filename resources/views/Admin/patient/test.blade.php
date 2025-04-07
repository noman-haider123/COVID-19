<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Covid-19-create-report</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/fresh.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Add custom styles here */
    #abc{
       width: 100%;
    }
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

/* Button Hover Animation */

.btn:hover {
  animation: pulse-hover 1s linear infinite;
}

@keyframes pulse-hover {
  0% {
    transform: scale(1);
  }
  50%{
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
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
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('dashboard')}}"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm2 2h10v10H7V7z"/></svg>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
          </ul>
          </nav>
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
                  @if (session('report'))
                  <div class="alert alert-success" id="alert">
                    {{ session('report') }}
                  </div>
                  @endif
            </div>
            <script>
              document.addEventListener("DOMContentLoaded",function(){
                var alert = document.getElementById("alert");
                setTimeout(function(){
                  alert.style.display = "none";
                },5000)
              })
            </script>
        </div>
        <section class="h-100 h-custom">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-8 ">
                <div class="card rounded-3">
                  <img src="https://media.springernature.com/w580h326/nature-cms/uploads/collections/2AP1TD2-b598c7937e0cb7c3ddb3d98f6d897d82.jpg"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                  <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Create_Report</h3>
        
                    <form class="px-md-2" action="{{route('patient.vaccine')}}" method="POST">
                     @csrf
                     <div class="row">
                     <div class="col-md-12 mb-3">
                      <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Hospital_name</label>
                        <select name="hospital" class="form-control @error('hospital') is-invalid @enderror">
                            <option value="" disabled selected>Choose...</option>
                            <option value="{{ $user->id }}" {{ old('hospital') == $user->id ? 'selected' : '' }}>
                              {{ $user->name }}
                          </option>
                        </select>
                        <span class="text-danger">
                            @error('hospital')
                           {{$message}}
                            @enderror
                           </span>
                         </div>
                        </div>
                     </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                            <label for="exampleInputPatientaddress" class="form-label">Patient_name</label>
                            <select name="patient" class="form-control @error('patient') is-invalid @enderror">
                             <option value="" disabled selected>Choose...</option>
                            @foreach ($booking as $data)
                            <option value="{{ $data->id }}" {{ old('patient') == $data->id ? 'selected' : ''}}>{{$data->name}}</option>
                            @endforeach
                            </select>
                            <span class="text-danger">
                             @error('patient')
                            {{$message}}
                             @enderror
                            </span>
                          </div>
                  
                        </div>
                       
                      </div>
        
        
                      <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="mb-3">
                                <label for="exampleInputPatientaddress" class="form-label">Vaccine_name</label>
                                    <select name="vaccine" class="form-control @error('vaccine') is-invalid @enderror">
                                    <option value="" disabled selected>Choose...</option>
                                    @foreach ($vaccine as $get)
                                  <option value="{{ $get->id }}" {{ old('vaccine') == $get->id ? 'selected' : ''}}>{{$get->Vaccine_name}}</option>
                                 @endforeach
                              </select>
                            <span class="text-danger">
                             @error('vaccine')
                            {{$message}}
                             @enderror
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                              <label for="exampleInputtest" class="form-label">Test_Result</label>
                             <input type="text" name="result" class="form-control @error('result') is-invalid @enderror" value="{{old('result')}}"/>
                             <span class="text-danger">
                                @error('result')
                                {{$message}}
                                @enderror
                               </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="mb-3">
                                <label for="exampleInputtestdate" class="form-label">Test_date</label>
                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"/>
                               <span class="text-danger">
                                @error('date')
                                {{$message}}
                                @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                    
                      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn">CreateReport</button>
        
                    </form>
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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

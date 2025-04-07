<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
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
              <a class="sidebar-link" href=""> 
                  <i class="fa fa-file"></i>
                <span class="hide-menu">main patient page</span>
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
                    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Patient Booking</h1>
                    @if (session('booking'))
                    <div class="alert alert-success" id="alert">
                      {{session('booking')}}
                    </div>
                    @endif
            </div>
        </div>
        <script>
          document.addEventListener("DOMContentLoaded",function(){
            var alert = document.getElementById("alert");
            setTimeout(function(){
              alert.style.display = "none";
            },5000)
          })
        </script>
        <section class="h-100 h-custom">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-8 ">
                <div class="card rounded-3">
                  <img src="https://media.springernature.com/w580h326/nature-cms/uploads/collections/2AP1TD2-b598c7937e0cb7c3ddb3d98f6d897d82.jpg"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                  <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Booking</h3>
        
                    <form class="px-md-2" action="{{route('booking')}}" method="POST">
                     @csrf
                     <div class="row">
                     <div class="col-md-12 mb-3">
                      <div class="mb-4">
                        <label for="exampleInputPatientname" class="form-label">Patientname</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        <span class="text-danger">
                          @error('name')
                          {{$message}}
                          @enderror
                        </span>
                        </div>
                     </div>
                     </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                            <label for="exampleInputPatientaddress" class="form-label">Patientaddress</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                            <span class="text-danger">
                              @error('address')
                              {{$message}}
                              @enderror
                            </span>
                          </div>
                  
                        </div>
                       
                      </div>
        
        
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                            <label for="exampleInputPatientaddress" class="form-label">Patientage</label>
                            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age">
                            <span class="text-danger">
                              @error('age')
                              {{$message}}
                              @enderror
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                              <label for="exampleInputPatientgender" class="form-label">Patient Gender</label>
                              <select name="gender" id="exampleInputPatientgender" class="form-control @error('gender') is-invalid @enderror">
                                  <option value="" disabled selected>Choose...</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                              </select>
                              @error('gender')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="mb-3">
                              <label for="hospital_id" class="form-label">Hospital name</label>
                              <select name="hospital_id" class="form-control @error('hospital_id') is-invalid @enderror">
                                  <option value="" disabled selected>Choose...</option>
                                 @foreach ($hospital as $item )
                                 <option value="{{$item->id}}" {{old('hospital_id') == $item->id ? 'selected' : ''}}>
                                  {{$item->name}}
                                </option>
                                @endforeach
                              </select>
                              @error('hospital_id')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1">Submit</button>
        
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

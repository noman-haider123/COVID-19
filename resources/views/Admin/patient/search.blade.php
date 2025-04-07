<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-vaccine-search</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/fresh.css" />
  <scrip src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
.form-control{
  padding: 0.5rem;
  border: none;
  border-radius: 70px;
  background-color: #f0f0f0;
  font-size: 1rem;
  font-weight: bold;
  color: #000;
  padding-block: 0.5rem;
  padding-inline: 1.10rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  font-weight: bold;
  border: 3px solid #ffffff4d;
  outline: none;
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
.set{
  background-color: rgba(150, 160, 255, 0.5);
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-weight: bold;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: black;
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
                  </div>
                  @if (session('danger'))
                  <div class="alert alert-danger" id="alert">
                    {{ session('danger') }}
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
      <div class="row">
          
        <div class="col-md-12">
                <div class="mb-3 mb-sm-0">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-6">
                        <form action="{{route('patient.search')}}" method="GET">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputsearch1" class="form-label">Vaccine_Search</label>
                            <input type="text" class="form-control @error('search') is-invalid @enderror" name="search" placeholder="Enter Your Name">
                            <span class="text-danger">
                              @error('search')
                              {{ $message }}
                              @enderror
                            </span>
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  @if(isset($vaccines) && !$vaccines->isEmpty())
                  @foreach ($vaccines as $items)
                        <div class="card w-100 mt-5">
                          <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Search Details</h5>
                            <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle table-bordered table-striped">
                                <div class="report">
                                  <a href="{{route('patient.pdf',$items->id)}}" class="set">Download Vaccine PDF</a>
                                  </div>
                                <thead class="text-dark fs-4">
                                  <tr>    
                                    <th class="border-bottom-0">
                                      <h6 class="fw-semibold mb-0">Hospital_name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                      <h6 class="fw-semibold mb-0">Patient_name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                      <h6 class="fw-semibold mb-0">Vaccine_name</h6>
                                    </th>
                                  </tr>
                                  <tr>
                                    <tr>
                                      <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$items->data->name}}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                              <h6 class="fw-semibold mb-0">{{$items->user->name}}</h6>
                                          </td>
                                          <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{$items->vaccine->Vaccine_name}}</h6>
                                          </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                  </tr>
                                </div>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
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
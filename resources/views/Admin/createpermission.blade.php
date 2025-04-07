<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-Permission</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/fresh.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
     .form-control{
      border: none;
      border-bottom: 4px solid #ccc;
      height: 30px;
      transition: 0.5s; 
      box-shadow: none;
    }
    .form-control:hover{
      border-bottom: 4px solid #ccc;
       transition: 0.5s;           
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
          <div class="col-md-12">
                  <div class="mb-3 mb-sm-0">
                    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Dashboard</h1>
                 
                    </div>
            </div>
        </div>
      </div>
      </script>
      @if (session('success'))
          <div class="alert alert-success" id="alert">
            {{session('success')}}
          </div>
      @endif
      @if (session('update'))
      <div class="alert alert-success" id="alert">
        {{session('update')}}
      </div>
      @endif
      @if (session('delete'))
      <div class="alert alert-danger" id="alert">
        {{session('delete')}}
      </div>
      @endif
      <script>
        document.addEventListener("DOMContentLoaded",function(){
          var alert = document.getElementById("alert");
          setTimeout(function(){
            alert.style.display = "none";
          },5000)
        })
      </script>
      <div class="container mt-5" id="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form action="{{route('permission.create')}}" method="POST">
              @csrf
            <div class="mb-3" id="css">
              <label class="form-label">Permission_name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"/>
              <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <button class="btn">CreatePermission</button>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Permission lists </h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle table-bordered table-striped">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Permission_name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Guard_name</h6>
                        </th>
                        @can('edit permission')
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Update</h6>
                        </th>
                        @endcan
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Delete</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($permissions as $items )
                            
                        <tr>  
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6>
                          </td>
                          <td class="border-bottom-0">
                            <p class="fw-semibold mb-0 fs-4">{{$items->name}}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="fw-semibold mb-0 fs-4">{{$items->guard_name}}</p>
                          </td>
                          @can('edit permission')
                          <td class="border-bottom-0">
                            <a href="{{route('permission.edit',$items->id)}}" class="btn">Update</a>
                          </td>
                          @endcan
                          <td class="border-bottom-0">
                            <a href="{{ route('permission.delete', $items->id) }}" 
                               class="btn"
                               onclick="return confirmDelete(event, this);">Delete</a>
                        </td>
                            @endforeach
                          </tr>                    
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-center mt-4">
                    {{ $permissions->links() }}
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
          function confirmDelete(event, element) {
              event.preventDefault(); // Prevent the default link action
      
              // Show confirmation dialog
              if (confirm('Are you sure you want to delete this Permission?')) {
                  // If OK is clicked, proceed with the delete action
                  window.location.href = element.href;
              } else {
                  // If Cancel is clicked, do nothing
                  return false;
              }
          }
      </script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>
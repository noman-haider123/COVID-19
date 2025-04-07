<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-Login</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
              body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }
    form {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        width: 100%;
    }
    .form-control {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        padding: 10px;
        transition: all 0.3s ease;
    }
    .form-control:focus {
        border-bottom: 2px solid #007bff;
        box-shadow: none;
        outline: none;
    }
    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .mb-3 {
        margin-bottom: 1.5rem;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        position: relative;
        top: 10px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .text-danger {
        font-size: 14px;
        color: #dc3545;
    }
  .toggle-icon{
    position: relative;
    display: flex;
    justify-content: flex-end;
    cursor: pointer;
    font-size: 25px;
    top: -40px;
  }
  .toggle-icon {
            position: absolute;
            right: 10px;
            /* Adjust as needed */
            top: 50px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
        }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/profile/covid-19.webp.png"  width="200px" height="100px" alt="">
                </a>
                <p class="text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:30px">Login</p>
                @if (session("error"))
                <div class="alert alert-danger" role="alert" id="alert">
                  {{ session("error") }}
                </div>
                @endif
                @if (session("Register"))
                <div class="alert alert-success" role="alert" id="alert">
                  {{ session("Register") }}
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
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Name Field -->
                
                    <!-- Email Field -->
                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                
                    <!-- Password Field -->
                    <div class="mb-4 mt-4 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="confirmPassword">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                          </span>
                          <span id="toggleConfirmPassword" class="toggle-icon">&#128065;</span>
                    </div>
                    <p>Don't have an Account?   <a href="{{route("register")}}">Register</p>

                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 mt-5">LogIn</button>
                </form>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
     document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const passwordField = document.getElementById('confirmPassword');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
        });
  </script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
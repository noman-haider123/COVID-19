<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COVID-19 Awareness - Stay Safe, Stay Informed</title>
  <meta name="description" content="Get the latest information on COVID-19, including symptoms, prevention, and current statistics." />
  <meta name="author" content="COVID-19 Awareness Team" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- IMPORTANT: DO NOT REMOVE THIS SCRIPT TAG OR THIS VERY COMMENT! -->
  <script src="https://cdn.gpteng.co/gptengineer.js" type="module"></script>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-virus me-2"></i>
        COVID-19 Awareness
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("register") }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("login") }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-section text-white text-center d-flex align-items-center" id="home">
    <div class="container">
      <h1 class="display-3 fw-bold mb-3">Stay Safe. Stay Informed.</h1>
      <p class="lead mb-4">Get the latest information about COVID-19 and learn how to protect yourself and your loved ones.</p>
      <a href="#stats" class="btn btn-light btn-lg px-4 me-md-2">View Statistics</a>
      <a href="#prevention" class="btn btn-outline-light btn-lg px-4">Learn Prevention</a>
    </div>
  </header>

  <!-- Stats Section -->
  <section id="stats" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">COVID-19 Global Statistics</h2>
      <p class="text-center text-muted mb-5">Latest worldwide figures as of today</p>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 text-center stats-card confirmed">
            <div class="card-body">
              <div class="stat-icon mb-2">
                <i class="fas fa-virus"></i>
              </div>
              <h5 class="card-title">Confirmed Cases</h5>
              <p class="card-text stat-number" id="confirmed-cases">767,535,490</p>
              <p class="card-text text-muted">Worldwide</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 text-center stats-card recovered">
            <div class="card-body">
              <div class="stat-icon mb-2">
                <i class="fas fa-heart"></i>
              </div>
              <h5 class="card-title">Recovered</h5>
              <p class="card-text stat-number" id="recovered-cases">740,183,765</p>
              <p class="card-text text-muted">Worldwide</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 text-center stats-card deaths">
            <div class="card-body">
              <div class="stat-icon mb-2">
                <i class="fas fa-heartbeat"></i>
              </div>
              <h5 class="card-title">Deaths</h5>
              <p class="card-text stat-number" id="death-cases">6,951,223</p>
              <p class="card-text text-muted">Worldwide</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <small class="text-muted">Source: WHO, CDC, and other health organizations. Numbers may vary.</small>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="mb-4">About COVID-19</h2>
          <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.</p>
          <p>Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment. However, some will become seriously ill and require medical attention.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Symptoms Section -->
  <section id="symptoms" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Common Symptoms</h2>
      
      <div class="row g-4">
        <div class="col-md-3 col-6">
          <div class="symptom-item text-center">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-thermometer-half"></i>
            </div>
            <h5>Fever</h5>
          </div>
        </div>
        
        <div class="col-md-3 col-6">
          <div class="symptom-item text-center">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-head-side-cough"></i>
            </div>
            <h5>Dry Cough</h5>
          </div>
        </div>
        
        <div class="col-md-3 col-6">
          <div class="symptom-item text-center">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-tired"></i>
            </div>
            <h5>Fatigue</h5>
          </div>
        </div>
        
        <div class="col-md-3 col-6">
          <div class="symptom-item text-center">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-lungs"></i>
            </div>
            <h5>Shortness of Breath</h5>
          </div>
        </div>
      </div>
      
      <div class="alert alert-warning mt-5" role="alert">
        <div class="d-flex">
          <div class="me-3">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
          </div>
          <div>
            <h5>Seek immediate medical attention if you have serious symptoms.</h5>
            <p class="mb-0">Always call before visiting your doctor or health facility.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Prevention Section -->
  <section id="prevention" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Prevention Tips</h2>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 prevention-card">
            <div class="card-body">
              <div class="text-center mb-3">
                <div class="icon-wrapper">
                  <i class="fas fa-hands-wash"></i>
                </div>
              </div>
              <h5 class="card-title text-center">Wash your hands frequently</h5>
              <p class="card-text">Regularly and thoroughly clean your hands with soap and water for at least 20 seconds or use an alcohol-based hand rub.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 prevention-card">
            <div class="card-body">
              <div class="text-center mb-3">
                <div class="icon-wrapper">
                  <i class="fas fa-people-arrows"></i>
                </div>
              </div>
              <h5 class="card-title text-center">Maintain social distancing</h5>
              <p class="card-text">Keep at least 6 feet (about 2 arm's length) distance between yourself and others, particularly those who are coughing or sneezing.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 prevention-card">
            <div class="card-body">
              <div class="text-center mb-3">
                <div class="icon-wrapper">
                  <i class="fas fa-head-side-mask"></i>
                </div>
              </div>
              <h5 class="card-title text-center">Wear a face mask</h5>
              <p class="card-text">Cover your nose and mouth with a mask when around others. The mask helps protect those around you in case you are infected.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <h5>COVID-19 Awareness</h5>
          <p>Providing accurate and up-to-date information about the COVID-19 pandemic to help keep you and your loved ones safe.</p>
        </div>
        
        <div class="col-md-3 mb-4 mb-md-0">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#home" class="text-white text-decoration-none">Home</a></li>
            <li><a href="#about" class="text-white text-decoration-none">About</a></li>
            <li><a class="nav-link" href="{{ route("register") }}">Register</a>
            <li><a class="nav-link" href="{{ route("login") }}">Login</a>
            </li>
          </ul>
        </div>
        
        <div class="col-md-3">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <a href="https://www.facebook.com/" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
            <a href="https://pk.linkedin.com/" class="text-white"><i class="fab fa-linkedin-in"></i></a>
          </div>
          
          <h5 class="mt-4">Contact</h5>
          <p class="mb-1"><i class="fas fa-envelope me-2"></i> info@covid19awareness.org</p>
          <p><i class="fas fa-phone me-2"></i> +1 (123) 456-7890</p>
        </div>
      </div>
      
      <hr class="my-4">
      
      <div class="text-center">
        <p class="mb-0">&copy; 2025 COVID-19 Awareness. Designed and Developed By Noman Haider</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="main.js"></script>
</body>
</html>
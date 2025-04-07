<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19-About</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light" id="bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="covid-19.webp.png" alt="COVID-19 Logo"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <!-- SVG cancel icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("index")}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("About")}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("register")}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("login")}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid bgimage">
        <div class="row justify-content-center">
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 style="color: blueviolet;    font-size: 25px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-weight: bold;">Who We Are</h2>
                    <p>We are a team of dedicated professionals committed to providing exceptional service and solutions
                        to our customers. Our expertise spans across multiple industries, ensuring we deliver innovative
                        and efficient outcomes for all projects we undertake.</p>
                </div>
                <div class="col-md-6">
                    <img src="about.jpg" class="img-fluid rounded" alt="About Us Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 style="color: blueviolet;  font-size: 30px; font-weight: bold;">Our Mission</h2>
                    <p style="  font-size: 25px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-weight: bold;">To inspire and empower individuals and businesses with innovative solutions
                        that foster growth, creativity, and impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container" id="team">
            <div class="row">
                <h2 class="text-center mb-5">Meet Our Team</h2>
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="team.jpg" alt="Team Member 1">
                        <h5>John Doe</h5>
                        <p>229E</p>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="team1.jpg" alt="Team Member 2">
                        <h5>Jane Smith</h5>
                        <p>NL63</p>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="team2.jpg" alt="Team Member 3">
                        <h5>Mike Johnson</h5>
                        <p>HKU1</p>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="team3.jpg" alt="Team Member 4">
                        <h5>Emily Davis</h5>
                        <p>OC43</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white py-5">
        <div class="container-fluid py-3 my-2">
            <div class="row justify-content-center">

                <!-- System Information -->
                <div class="col-12 col-md-6 mb-4 mb-md-0" id="COVID-19">
                    <h5>COVID-19 Vaccination Management System</h5>
                    <p class="mt-4">VaxCare HQ. Vaccine management systems are tools for streamlining the vaccine supply
                        chain, ensuring that vaccines are managed effectively from distribution through to
                        administration. Central to these systems is the ability to track vaccines, and manage inventory
                        levels and expiration dates, all on a single platform.</p>
                </div>

                <!-- Contact Information -->
                <div class="col-12 col-md-6" id="CoronaVirus">
                    <h5>Contact Us</h5>
                    <p>Address: Malir Kalaboard</p>
                    <p>Contact Number: 0315-2216909</p>
                    <p>Email Address: <a href="mailto:nomaniqbalhaider@gmail.com"
                            class="text-white">nomaniqbalhaider@gmail.com</a></p>
                </div>

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>COVID-19-Home</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
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
    <div class="container-fluid bgimg">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="text-center">Stay Safe</h3>
                <p class="text-center">COVID-19 is caused by the SARS-CoV-2 virus. COVID-19 can cause mild to severe
                    respiratory illness, including death. The best preventive measures include getting vaccinated,
                    wearing a mask during times of high transmission.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center">CoronaVirus Statics</h1>
                <p class="text-center">A highly contagious respiratory disease caused by the SARS-CoV-2 virus.</p>
                <div class="icon-link ms-4">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="total-cases">
                    <p>14,112,077</p>
                    <p id="case" class="ms-2">Active Cases</p>
                </div>
                <div class="second">
                    <div class="icon-link ms-4">
                        <i class="fas fa-skull-crossbones"></i>
                    </div>
                    <div class="total-cases">
                        <p>15,115,080</p>
                        <p id="case" class="ms-2">Total Deaths</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="third">
            <div class="icon-link ms-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="total-cases">
                <p id="collect" class="ms-4">11,100,077</p>
                <p id="case-done" class="ms-4">Recoverd Cases</p>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img overflow-hidden p-5">
                        <img class="img-fluid w-100" src="corona.jpg" id="kh">
                    </div>
                </div>
                <div class="col-lg-6" id="abc">
                    <h1 class="display-5 mb-4"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: blueviolet;">
                        Prevent from
                        this Pandemic</h1>
                    <p class="mb-4" style="font-family: Arial, Helvetica, sans-serif;">Keep a safe distance of a metre
                        from others.
                        Carry a sanitiser / wash your hands frequently with water and soap.
                        Avoid close contact with anyone who is sick or has symptoms. Personal protective equipment, hand
                        washing, social distancing and self-isolation.Precise prevention and control based on big data.
                        A successful pandemic response consists of scientific prevention and control as well as precise
                        measures. Methods like big data should be used to monitor the pandemic and trace its source at a
                        higher level.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
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
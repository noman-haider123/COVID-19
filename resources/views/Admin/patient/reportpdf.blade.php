<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-Report-PDF</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/fresh.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Add custom styles here */
    #abc{
       width: 100%;
    }
table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
  </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Report Details</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Patient Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Patient Age</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Patient Address</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Patient Gender</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Vaccine Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Test Result</h6>
                                        </th>
                                        <th>
                                            <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Test Date</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>  
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->booking->name}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->booking->age}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->booking->address}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->booking->gender}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->vaccine->Vaccine_name}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->Test_Result}}</p>
                                        </td>
                                        <td>
                                            <p class="fw-semibold mb-0">{{$data->Test_date}}</p>
                                        </td>
                                    </tr>                                                       
                                </tbody>
                            </table>
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
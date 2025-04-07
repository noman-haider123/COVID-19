<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19-Vaccine-PDF</title>
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
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-md-12">
                  <div class="mb-3 mb-sm-0">
                    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Vaccine Details</h1>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-stretch" id="bcd">
                          <div class="card w-100">
                            <div class="card-body p-4">
                              <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle table-bordered table-striped">
                                  <thead class="text-dark fs-4">
                                    <tr>    
                                      <th class="border-bottom-0">
                                          <h6 class="fw-semibold mb-0" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Patient_name</h6>
                                      </th>
                                      <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"  style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">hospital_name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"  style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;">Vaccine_name</h6>
                                    </th>
                                  </tr>
                              </thead>
                                    <tr>  
                                        <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0">{{$customers->user->name}}</p>
                                    </td>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold mb-0">{{$customers->data->name}}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold mb-0">{{$customers->vaccine->Vaccine_name}}</p>
                                        </td>
                                    </tr>                                                       
                                </table>
                              </div>
                            </div>
                          </div>
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
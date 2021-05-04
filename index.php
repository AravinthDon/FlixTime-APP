<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>FlixTime</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include("components/header.php"); ?>
  <div class="container">
    <section class="search-area aligh-items-center">
      <!-- Using grids to position -->
      <div class="row">
        <div class="col-lg-12 col-md-10 text-center">
          <h2>Search for your favorite movies and TV Shows</h2>
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
              <form class="card card-sm" id="searchForm">
                <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                  </div>
                  <!--end of col-->
                  <div class="col">
                    <input class="form-control form-control-lg form-control-borderless" id = "searchText" type="search"
                      placeholder="Eg: Marvel's Avengers">
                  </div>
                  <!--end of col-->
                  <div class="col-auto">
                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                  </div>
                  <!--end of col-->
                </div>
              </form>
            </div>
            <!--end of col-->
          </div>
        </div>
      </div>
  </div>
  <!--div class="container">
    <div class="jumbotron">
      <h3 class="text-center">Search For Any Movie</h3>
      <form id="searchForm">
        <input type="text" class="form-control" id="searchText" placeholder="Search Movies...">
      </form>
    </div>
  </div-->

  <div class="container">
    <div id="movies" class="row"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <title>Edit Herb</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">Blogen</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="<?php echo base_url()?>main/getherb" class="nav-link">herb</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome Brad
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Herb</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo base_url() ?>main/getherb" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Herb
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Herb</h4>
            </div>
            <div class="card-body">
              <form id="update">
                <div class="form-group">
                  <label for="title">_id</label>
                  <input type="text" name="herbid" id="herbid" class="form-control" value="<?php echo $herbid; ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="title">Herb Name</label>
                  <input type="text" name="herbname" id="herbname" class="form-control" value="<?php echo urldecode($herbname); ?>">
                </div>
                
                
                <div class="form-group">
                  <label for="title">properties</label>
                  <?php
                  $i = 1;
                  foreach($properties as $value) {
                  echo  '<input type="text" name="properties" id="properties'.$i.'" class="form-control" value="'.urldecode($value).'"><label></label>';
                  $i++;
                  }
                  ?>
                </div>
                <div class="form-group">
                  <label for="title">warning</label>
                  <?php
                  $i = 1;
                  foreach($warning as $value) {
                  echo  '<input type="text" name="warning" id="warning'.$i.'" class="form-control" value="'.$value.'"><label></label>';
                  $i++;
                  }
                  ?>
                </div>
                <div class="col-md-3">
                <input type="submit" class="btn btn-success btn-block" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Mhunprai
          </p>
        </div>
      </div>
    </div>
  </footer>




  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/js/setup.js"></script>

  <script>
        $(function(){
            $("#update").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "id":$("#herbid").val(),
                    "herbname":$("#herbname").val(),
                    "properties":[
                          $("#properties1").val(),
                          $("#properties2").val()
                      
                    ],
                    "warning":[
                      $("#warning1").val(),
                      $("#warning2").val()
                    ]
                };
                $.post("http://localhost:8080/Mhunpris/api/herb/update", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }
                );
            });
        });
    </script>
</body>

</html>
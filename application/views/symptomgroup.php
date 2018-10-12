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
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/js/setup.js"></script>
  <title>Herb</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">Mhunprai</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="getherb" class="nav-link active">herb</a>
          </li>
          <li class="nav-item px-2">
            <a href="getsymptomgroup" class="nav-link">SymptomGroup</a>
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
  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-pencil-alt"></i> SymptomGroup</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- SEARCH -->
  <section id="search" class="py-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" id="myInput" placeholder="Search Herb...">
            <div class="input-group-append">
              <button class="btn btn-success">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-1 ml-auto">
          <div class="input-group">
            <div class="input-group">
              <a href="<?php echo base_url() ?>main/insertherb" class="btn btn-success">Insert</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Herb</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>SymtompgroupName</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="herbs">
              </tbody>
            </table>

            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
  <script>
        let herbs = $("#herbs");
        let i = 1;
        $.post("http://localhost:8080/Mhunpris/api/symtomgroup/findAll", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var listOfherb = data.data;
                var strHerb = "";
                $.each(listOfherb, function( index, value ) {
                    strHerb += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.SymtomGroupName+'</td>'
                            + '<td>'
                            + '<a href="editherb/'+value._id+'/'+value.herbname+'/'+value.properties+'/'+value.warning+'" class="btn btn-info">'
                            + '<i class="far fa-edit"></i> Edit'
                            + '</a> &nbsp;'
                            + '<a href="deleteherb/'+value._id+'" class="btn btn-danger">'
                            + '<i class="far fa-trash-alt"></i> Delete'
                            + '</a>'
                            + '</td>'
                            + '</tr>';
                            i++;            
                });
                herbs.html(strHerb);  
            }
        );
    </script>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>

</html>
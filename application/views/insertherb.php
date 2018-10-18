<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/setup.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
   
    <title>Herb Insert</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var str = "";
            $("#buttonproperties").click(function(){
                str = '<input type="text" class="properties form-control" id="properties" placeholder="กรอกสรรพคุณ..">';

                    $("#temp").append(str);
            });
            
            var str1 = "";
            $("#buttonwarning").click(function(){
                str1 = '<input type="text" class="warning form-control" id="warning" placeholder="กรอกคำเตือน..">';

                    $("#temp1").append(str1);
            });
            
            $("#submit").click(function(){
                var obj = {
                    "herbName" : $("#herbName").val(),
                    "properties" : null,
                    "warning" : null
                };

                var arr = [];
                $( ".properties" ).each(function( index ) {
                    arr[index] = $( this ).val();
                });
                obj.properties = arr;

                var arr1 = [];
                $( ".warning" ).each(function( index ) {
                    arr1[index] = $( this ).val();
                });
                obj.warning = arr1;

                console.log(obj);
                
                $.post("http://localhost:8080/Mhunpris/api/herb/insert", JSON.stringify(obj),//ติด
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                        
                    }
                );
                
                })

            });
    </script>
    
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" id="navlogin">
       
    </nav>



    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Herb
    <small>Insert</small>
    </h1>

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index2">Home</a>
    </li>
    <li class="breadcrumb-item active">Herb Insert</li>
    </ol>

    <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 ">
                <form>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="herbName">ชื่อสมุนไพร</label>
                            <input type="text" class="form-control" id="herbName" placeholder="กรอกชื่อสมุนไพร..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="properties">สรรพคุณ</label>
                            <input type="text" class="properties form-control" id="properties" placeholder="กรอกสรรพคุณ..">
                            <span id="temp"></span><br>
                            <button type="button" id="buttonproperties" class="btn btn-secondary btn-sm">เพิ่มสรรพคุณ</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="warning">คำเตือน</label>
                            <input type="text" class="warning form-control" id="warning" placeholder="กรอกคำเตือน..">
                            <span id="temp1"></span><br>
                            <button type="button" id="buttonwarning" class="btn btn-secondary btn-sm">เพิ่มคำเตือน</button>
                        </div>
                    </div>
                    <button type="button" id="submit" class="btn btn-primary">บันทึก</button>
                </form>
            </div>
          </div>
        </div>
        <!-- <div class="card-footer text-muted">
         อ้างอิงจากบัญชียาหลักแห่งชาติ
          
        </div> -->
      </div>

</div>
</div>
</div>
          <footer class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5><i class="fas fa-leaf"></i> Mhunprai</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="">Product</a></li>
                                    <li><a href="">Benefits</a></li>
                                    <li><a href="">Partners</a></li>
                                    <li><a href="">Team</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="">Documentation</a></li>
                                    <li><a href="">Support</a></li>
                                    <li><a href="">Legal Terms</a></li>
                                    <li><a href="">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fab fa-facebook fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-twitter fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-github fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-instagram fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-md-right">Contact Us</h5>
                        <hr>
                        <form>
                            <fieldset class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                            </fieldset>
                            <fieldset class="form-group text-xs-right">
                                <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url() ?>assets/js/navlogin.js"></script>
</body>
</html>
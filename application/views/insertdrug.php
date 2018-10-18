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
   
    <title>Insert Drug Formula</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var str = "";
    $("#create").click(function(){
          str = 
            '<p class="herb"><label>สมุนไพร*</label>'+
            '<input type="text" class="form-control herbname"  placeholder="กรอกสมุนไพร..">'+
            '<label >น้ำหนัก*</label>'+
            '<input type="text" class="form-control weight"  placeholder="กรอกน้ำหนักของสมุนไพร(กรัม)..">';

            $("#temp1").append(str);
            
    });       
    $("#removeHerb").click(function(){
            $('.herb').remove(); 
    });

    $("#createSuggestion").click(function(){
        str = '<label for="suggestion">สรรพคุณ*</label>'+
                '<input type="text" class="form-control suggestion" id="suggestion" placeholder="กรอกสรรพคุณของสูตรยา..">';

			$("#temp3").append(str);
    });
    $("#removeSuggestion").click(function(){
            $('.suggestion').remove(); 
    });

    $("#createUse").click(function(){
        str = '<label for="use">วิธ๊ใช้*</label>'+
                '<input type="text" class="form-control use" id="use" placeholder="กรอกวิธีใช้ของสูตรยา..">';

			$("#temp4").append(str);
    });
    $("#removeUse").click(function(){
            $('.use').remove(); 
    });

    $("#createWarning").click(function(){
        str = '<label for="warning">คำเตือน*</label>'+
                '<input type="text" class="form-control warning" id="warning" placeholder="กรอกคำเตือน..">'; 

			$("#temp5").append(str);
    });
    $("#removeWarning").click(function(){
            $('.warning').remove(); 
    });

    $("#insert").click(function(){
    	var obj = {
            "drugName" : $("#drugName").val(),
            "recipetype" : $("#recipetype").val(),
            "herb" : null,
            "suggestion":null,
            "use":null,
            "warning":null
        };

    	var arr = [];
        $( ".herb" ).each(function( index ) {
        	//arr[index] = $( this ).val();
            var herb = $( this ).children(".herbname").val();
            var weight = $( this ).children(".weight").val();
            arr.push({
            	"herb": herb,
                "weight": weight
            });
        });
        obj.herb = arr;

        var arr = [];
        $( ".suggestion" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.suggestion = arr;

        var arr = [];
        $( ".use" ).each(function( index ) {
        	arr[index] = $( this )  .val();
        });
        obj.use = arr;

        var arr = [];
        $( ".warning" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.warning = arr;

        console.log(obj); //ติด

        $.post("http://localhost:8080/Mhunpris/api/drugformula/insert", JSON.stringify(obj),//ติด
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
                            <label for="drugName">ชื่อสูตรยา</label>
                            <input type="text" class="form-control drugName" id="drugName" placeholder="กรอกชื่อสูตรยา..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="recipetype">ประเภทสูตรยา</label>
                            <input type="text" class=" form-control recipetype" id="recipetype" placeholder="กรอกประเภทสูตรยา..">
                           
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <p class="herb"><label>สมุนไพร</label>
                            <input type="text" class="form-control herbname"  placeholder="กรอกสมุนไพร..">
                            <label >น้ำหนัก</label>
                            <input type="text" class="form-control weight"  placeholder="กรอกน้ำหนักของสมุนไพร(กรัม)..">
                            <span id="temp1"></span><br>
                            <button type="button" id="create" class="btn btn-secondary btn-sm">เพิ่มสมุนไพร</button>
                            <button type="button" id="removeHerb" class="btn btn-secondary btn-sm">Remove</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="suggestion">สรรพคุณ</label>
                            <input type="text" class="form-control suggestion" id="suggestion" placeholder="กรอกสรรพคุณของสูตรยา..">
                            <span id="temp3"></span><br>
                            <button type="button" id="createSuggestion" class="btn btn-secondary btn-sm">เพิ่มสรรพคุณ</button>
                            <button type="button" id="removeSuggestion" class="btn btn-secondary btn-sm">Remove</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="use">วิธ๊ใช้</label>
                            <input type="text" class="form-control use" id="use" placeholder="กรอกวิธีใช้ของสูตรยา..">
                            <span id="temp4"></span><br>
                            <button type="button" id="createUse" class="btn btn-secondary btn-sm">เพิ่มวิธีใช้</button>
                            <button type="button" id="removeUse" class="btn btn-secondary btn-sm">Remove</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="warning">คำเตือน</label>
                            <input type="text" class="form-control warning" id="warning" placeholder="กรอกคำเตือน..">
                            <span id="temp5"></span><br>
                            <button type="button" id="createWarning" class="btn btn-secondary btn-sm">เพิ่มคำเตือน</button>
                            <button type="button" id="removeWarning" class="btn btn-secondary btn-sm">Remove</button>
                        </div>
                    </div>

                    <button type="button" id="insert" class="btn btn-primary">บันทึก</button>
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

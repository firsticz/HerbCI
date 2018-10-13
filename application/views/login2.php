<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
        <form id="loginform">
        <input type="text" name="username" id="username" value="">
        <input type="password" name="password" id="password">
        <input type="submit">
        </form>
        
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/js/setup.js"></script>
    <script>
        $("#loginform").submit(function (e) { 
            e.preventDefault();
            var formdata = {
                "username": $("#username").val(),
                "password": $("#password").val()
            }
            $.post("http://localhost:8080/Mhunpris/api/member/search", JSON.stringify(formdata),
            function (data, textStatus, jqXHR) {
                if(data.data.length == 0){
                    alert("เข้าสู่ระบบไม่สำเร็จ");
                    window.location.href = "<?php echo base_url() ?>main/login2";
                }
                else{
                    var username = data.data[0].username;
                    localStorage.setItem("usernamelocal", username);
                    alert("เข้าสู่ระบบสำเร็จ");
                    window.location.href = "<?php echo base_url() ?>main/index2";
                    
                    
                }  
            }
        );
        });
    </script>
</body>
</html>
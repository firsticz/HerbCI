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
                    var iduser = data.data[0]._id;
                    localStorage.setItem("usernamelocal", username);
                    localStorage.setItem("iduser", iduser);
                    alert("เข้าสู่ระบบสำเร็จ");
                    window.location.href = "<?php echo base_url() ?>main/index2";
                    
                    
                }  
            }
        );
        });
    </script>
    <center>
<h1>Login Page</h1>
<script>
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
console.log('statusChangeCallback');
console.log(response);
// The response object is returned with a status field that lets the
// app know the current login status of the person.
// Full docs on the response object can be found in the documentation
// for FB.getLoginStatus().
if (response.status === 'connected') {
// Logged into your app and Facebook.
testAPI();
} else if (response.status === 'not_authorized') {
// The person is logged into Facebook, but not your app.
document.getElementById('status').innerHTML = 'Login with Facebook ';
} else {
// The person is not logged into Facebook, so we're not sure if
// they are logged into this app or not.
document.getElementById('status').innerHTML = 'Login with Facebook ';
}
}
// This function is called when someone finishes with the Login
// Button. See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
FB.getLoginStatus(function(response) {
statusChangeCallback(response);
});
}
window.fbAsyncInit = function() {
FB.init({
appId : '2115097655418430',
cookie : true, // enable cookies to allow the server to access
// the session
xfbml : true, // parse social plugins on this page
version : 'v2.2' // use version 2.2
});
// Now that we've initialized the JavaScript SDK, we call
// FB.getLoginStatus(). This function gets the state of the
// person visiting this page and can return one of three states to
// the callback you provide. They can be:
//
// 1. Logged into your app ('connected')
// 2. Logged into Facebook, but not your app ('not_authorized')
// 3. Not logged into Facebook and can't tell if they are logged into
// your app or not.
//
// These three cases are handled in the callback function.

FB.getLoginStatus(function(response) {
statusChangeCallback(response);
});
};
// Load the SDK asynchronously
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Here we run a very simple test of the Graph API after login is
// successful. See statusChangeCallback() for when this call is made.
function testAPI() {
console.log('Welcome! Fetching your information.... ');
FB.api('/me?fields=name,email', function(response) {
console.log('Successful login for: ' + response.name);

document.getElementById("status").innerHTML = '<p>Welcome '+response.name+'! <a href=login.php?name='+ response.name.replace(" ", "_") +'&email='+ response.email +'>Continue with facebook login</a></p>'
});
}
</script>
<!--
Below we include the Login Button social plugin. This button uses
the JavaScript SDK to present a graphical Login button that triggers
the FB.login() function when clicked.
-->
<br><br>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<div id="status">
</div>
<script type="text/javascript">
</script>
</center>


</body>
</html>
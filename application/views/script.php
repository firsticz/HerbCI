<script>
    .$(document).ready(function () {
        $("#signup").submit(function (e) { 
        e.preventDefault();
        var register = {
          "email": $("#email").val();
          "firestname": $("#firstname").val();
          "lastname" : $("lastname").val();
          "username": $("username").val();
          "password": $("password").val();
        };

        $.post("url", JSON.stringify(register),
          function (data, textStatus, jqXHR) {
            alert(data.message);
          },

        );
      });
      $("#signin").submit(function (e) { 
        e.preventDefault();
        var login = {
          "username": $("username").val();
          "password": $("password").val();
        };

        $.post("url", JSON.stringify(login),
          function (data, textStatus, jqXHR) {
            alert(data.message);
          },

        );
      });
    });
</script>
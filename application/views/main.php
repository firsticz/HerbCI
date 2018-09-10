<body>

<div class="container">
  <h2>Insert Herb</h2>
  <form id="insert">
  <div class="form-group">
      <label for="email">ID:</label>
      <input type="text" class="form-control" id="ID" placeholder="ID" name="ID">
    </div>
    <div class="form-group">
      <label for="email">Herb Name:</label>
      <input type="text" class="form-control" id="herbname" placeholder="Herb Name" name="herbname">
    </div>
    <div class="form-group">
      <label for="email">Herb Type:</label>
      <input type="text" class="form-control" id="herbtype" placeholder="Herb Type" name="herbtype">
    </div>
    <div class="form-group">
      <label for="email">Group Type:</label>
      <input type="text" class="form-control" id="groupherb" placeholder="Group Type" name="groupherb">
    </div>
    <div class="form-group">
      <label for="email">Formula:</label>
      <input type="text" class="form-control" id="formula" placeholder="Formula" name="formula">
    </div>
    <div class="form-group">
      <label for="email">Help:</label>
      <input type="text" class="form-control" id="help" placeholder="Help" name="help">
    </div>
    <div class="form-group">
      <label for="email">Solution:</label>
      <input type="text" class="form-control" id="solution-seed" placeholder="Solution" name="solution">
      <input type="text" class="form-control" id="solution-water" placeholder="Solution" name="solution">
    </div>
    <div class="form-group">
      <label for="email">Warning:</label>
      <input type="text" class="form-control" id="warning" placeholder="Warning" name="warning">
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>

  <script>
    $(document).ready(function () {
      $("#insert").submit(function (e) { 
        e.preventDefault();
        var formdata = {
          "_id": $("#ID").val(),
          "name": $("#herbname").val(),
          "herbtype": $("#herbtype").val(),
          "grouptype": $("#grouptype").val(),
          "formula": $("#formula").val(),
          "help": $("#help").val(),
          "solution":[
              $("#solution-seed").val(),
              $("#solution-water").val()
          ],
          "warning": $("#warning").val()
        };

        $.post("http://localhost:8080/Mhumprai/api/herb/insert", JSON.stringify(formdata),
          function (data, textStatus, jqXHR) {
            alert(data.message);
          },

        );
      });
    });
    </script>
</div>

</body>
</html>
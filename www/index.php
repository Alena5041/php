<html>
<head>
  <title>Format JSON</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready (function () {
      $("select[name='country']").bind("change", function () {
        $("select[name='city']").empty();
        $.get("countryCheck.php", {country: $("select[name='country']").val()}, function(data) {
          data = JSON.parse(data);
          for(var id in data) {
            $("select[name='city']").append($("<option value='" + id + "'>" + data[id] + "</option>"));
          }
        });
      });
    });
  </script>
</head>
<body>
  <label>Your country</label>
  <select name="country">
    <option value="0" selected="selected"></option>
    <option value="1">America</option>
    <option value="2">Francie</option>
  </select>
  <label>Your city</label>
  <select name="city">
    <option value="0"></option>
  </select>
</body>
</html>

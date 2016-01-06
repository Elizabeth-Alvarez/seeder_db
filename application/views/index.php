<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $.get("/index.php/users/get_users", function(res) {
        for(var i = 0; i < res.length; i++){
          $("#show_data").append("<tr><td>"+ res[i]['full_name'] + "</td><td>"+ res[i]['email'] + "</td><td>" + res[i]['city'] + "</td></tr>");
        }
      }, "json");

      $.get("/index.php/users/filter", function(res) {
        for(var i = 0; i < res.length; i++) {
          $('#filtered_name').append("<tr><td>" + res[i]['full_name'] + "</td></tr>");
        }
      }, 'json');
  }) //End of document
</script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">CodeIgniter User Table</a>
       </div>
     </div> <!-- End of fluid -->
    </nav>
    <div class='container'>
      <div class='row'>
        <div class='col-md-5' style='overflow:scroll; height: 500px; border: 2px solid black'>
          <h3>Random Users (Scroll to see more)</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
              </tr>
            </thead>
            <tbody id='show_data'>
            </tbody>
          </table>
        </div>
      <div class='col-md-4 col-md-offset-2 text-center' style='overflow:scroll; height: 500px; border: 2px solid black'>
        <h3>Filtered Users</h3>
        <p>Showing all users that have 'john' within their name.</p>
        <table class="table table-striped text-left">
          <thead>
            <tr>
              <th>Name</th>
            </tr>
          </thead>
          <tbody id='filtered_name'>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </body>
</html>

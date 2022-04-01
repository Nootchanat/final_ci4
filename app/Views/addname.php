<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter Crud tutorial on codesource.io</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"><br>
<center><h1>Codeigniter ADD DATA </h1></center>
<style>

    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form id="add_create" method="post" id="addname" name="addname" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>First name</label>
        <input type="text" name="fname" class="form-control">
      </div>

      <div class="form-group">
        <label>Last name</label>
        <input type="text" name="lname" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Time</label>
        <input type="text" name="time" class="form-control">
      </div>

      <div class="form-group">
        <label>Time enter</label>
        <input type="text" name="time_n" class="form-control">
      </div>

      <div class="form-group">
        <label>Time of departure</label>
        <input type="text" name="time_d" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add Name & email</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          fname: {
            required: true,
          },

          lname: {
            required: true,
          },

          email: {
            required: true,
            maxlength: 60,
            email: true,
          },

          time: {
            required: true,
          },

          time_n: {
            required: true,
          },

          time_d: {
            required: true,
          },


        },
        messages: {
          fname: {
            required: "First name is required.",
          },
          lname: {
            required: "Last name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
          time: {
            required: "Please specify the period of use.",
          },
          time_n: {
            required: "Please specify the time of entry.",
          },
          time_d: {
            required: "Please specify the time of departure.",
          },
        },
      })
    }
  </script>
</body>

</html>
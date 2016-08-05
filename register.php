
<!DOCTYPE html>
<html>
<head>
    <title>Login with LinkedIn using PHP by CodexWorld</title>
<!--    <link rel="stylesheet" href="css/style.css"/>-->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.js"></script>

</head>

<body>



<div class="container" style="margin-top: 45px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
    <div class="login-form col-md-12">

        <form role="form" method="post">

            <div class=" col-md-6">
                <label class="control-label">First name</label>
            <input id="fname" type="text" placeholder="first name" class="form-control" name="fname" value="">

            </div>

            <div class=" col-md-6">
            <label  class="col-md-4 control-label">Last name</label>
            <input id="lname" type="text" placeholder="last name"  class="form-control" name="lname" value="">
            </div>

            <div class=" col-md-6">
                <label  class="col-md-4 control-label">email</label>
            <input id="email" type="email" placeholder="email" class="form-control" name="email" value="">
                </div>

            <div class=" col-md-6">
                <label  class="col-md-4 control-label">Password</label>
            <input id="Password" type="password" class="form-control" name="Password" value="">
                    </div>

            <div class=" col-md-6">
                <label class="col-md-4 control-label">Confirm Password</label>
            <input id="Confirm_Password" placeholder="Confirm_Password" type="password" class="form-control" name="Confirm_Password" value="">

                        </div>



                <div style="margin-top: 45px" class="col-md-6">


                    <button class="btn btn-success" id="btn"  type="submit">
                        <i class="fa fa-btn fa-user"></i>
                        User Register
                    </button>
                </div>


        </form>

        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>


   $('button').click(function () {
        alert('you are Registerd!!!');

            $.ajax({
                url: 'userlist.php',
                type: 'post',
                data:{},
              dataType:{},

                success: function (x) {
                    alert("success");

                },
                error: function () {
                    alert("error");


                }
            });
   });

</script>



</body>

</html>
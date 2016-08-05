<!DOCTYPE html>
<html>
<head>
    <title>Login with LinkedIn using PHP by CodexWorld</title>
    <!--    <link rel="stylesheet" href="css/style.css"/>-->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>


<div class="container" style="margin-top: 45px">
    <div class="panel panel-primary" >

        <div class="panel-heading"><h3>ADMIN Panel</h3> <a href="register.php" class="btn btn-success ">Add New !!!</a> Inert New Data..</div>
        <div class="panel-body">





<table id="dt" class="table table-bordered table-hover table table-condensed" align="center">

    <thead >
    <tr style="background-color:#a1aec7">

        <th><input type="checkbox" name="check "> </th>
        <th> id &nbsp;</th>
        <th> Name &nbsp;</th>
        <th> email_ID &nbsp;</th>
        <th> Password &nbsp;</th>
        <th> Permission &nbsp;</th>


    </tr>

<!--    <tr >-->
<!---->
<!--        <th></th>-->
<!--        <th> <input class="form-control" style="width: 50px" type="text" name="search" ></th>-->
<!--        <th> <input class="form-control"  type="text" name="Name"></th>-->
<!--        <th> <input class="form-control"  type="text" name="email" ></th>-->
<!--        <th> <input class="form-control" type="text" name="Password" ></th>-->
<!--        <th></th>-->
<!---->
<!---->
<!--    </tr>-->


<!--    @foreach($show_data as $key)-->
    <tr>

        <td><input type="checkbox"> </td>
        <td> {{ $key->id}}</td>
        <td> {{ $key->name}}</td>
        <td> {{ $key->email}}</td>
        <td> {{ $key->password}}</td>
        <td> {{ $key->permission}}</td>


    </tr>

<!--    @endforeach-->
    </thead>


</table>

        </div>
    </div>
</div>



</body>
</html>
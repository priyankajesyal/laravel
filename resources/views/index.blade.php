<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form method="POST" action="/formdata">
    @csrf

        <div class="container">
            <h2 text-center>Student Information</h2>
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <br><label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    <br><label>Data</label>
                    <input type="text" name="data" class="form-control" placeholder="Enter Data" required>
                </div>
            </div>


            <input type="submit" name="submit" class="btn btn-primary">


</body>

</html>
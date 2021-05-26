<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .box
        {
            background-color: #f2f2f2;
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>
    <form method="post" action="/update/<?php echo $get->id; ?>">
        @csrf

        <div class="container mt-5">
            <div class="box py-1">
                <h2 class="text-center my-5">Update Data</h2>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value='<?php echo $get->name; ?>'>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label class="mt-4">Data</label>
                        <input type="text" name="data" class="form-control" value='<?php echo $get->data; ?>'>
                    </div>
                </div>

                <div class="text-center my-3">
                    <input type="submit" name="submit" class="btn btn-primary my-3">
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <form method="POST" action="/formdata">
        <?php echo csrf_field(); ?>

        <div class="container mt-5">
            <div class="box py-5">
            <h2 class="text-center">Student Information</h2>
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <br><label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <br><label class="mt-2">Data</label>
                    <input type="text" name="data" class="form-control" placeholder="Enter Data" required>
                </div>
            </div>

            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-primary my-3">
            </div>
            </div>
</body>

</html><?php /**PATH C:\laravel\resources\views/index.blade.php ENDPATH**/ ?>
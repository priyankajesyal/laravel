<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h1 class="text-center my-5">View Student Data</h1>
<table class="table table-striped w-50 m-auto ">
<tr>
<th>Id</th>
<th>Name</th>
<th>Data</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<tbody>
<?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($value->id); ?></td>
		<td><?php echo e($value->name); ?></td>
        <td><?php echo e($value->data); ?></td>
        <td><a class="btn btn-success" href = 'edit/<?php echo e($value->id); ?>'>Edit</a></td>
        <td><a class="btn btn-danger" href = 'delete/<?php echo e($value->id); ?>'>Delete</a></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>


</body>
</html><?php /**PATH C:\laravel\resources\views/viewdata.blade.php ENDPATH**/ ?>
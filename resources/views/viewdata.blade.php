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
@foreach($get as $value)
	<tr>
		<td>{{$value->id}}</td>
		<td>{{$value->name}}</td>
        <td>{{$value->data}}</td>
        <td><a class="btn btn-success" href = 'edit/{{ $value->id }}'>Edit</a></td>
        <td><a class="btn btn-danger" href = 'delete/{{ $value->id }}'>Delete</a></td>
	</tr>
	@endforeach
</tbody>
</table>


</body>
</html>
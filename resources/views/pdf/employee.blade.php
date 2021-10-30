<!DOCTYPE html>
<html>
<head>
	<title>Employee Summary</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<table class='table table-bordered'>
		<thead class="table-primary">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Salary</th>
				<th>Bonus</th>
				<th>Role</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($employees as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->email}}</td>
				<td>Rp. {{$p->salary}}</td>
				<td>Rp. {{$p->bonus}}</td>
				<td>{{$p->role}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>

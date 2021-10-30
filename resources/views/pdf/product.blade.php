<!DOCTYPE html>
<html>
<head>
	<title>Product Summary</title>
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
				<th>Name</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Category</th>
				<th>Supplier</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($products as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name}}</td>
				<td>Rp. {{$p->price}}</td>
				<td>{{$p->stock}}</td>
				<td>{{$p->category}}</td>
				<td>{{$p->supplier}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>

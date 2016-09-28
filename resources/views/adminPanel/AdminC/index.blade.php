<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Admin Table Crud</h1>
		<table border="1px">
			<thead>
				<td>ID</td>
				<td>Name</td>
				<td>Surname</td>
				<td>Mail</td>
				<td>Password</td>
				<td>Action</td>
			</thead>
			<tbody>
				@foreach($admins as $admin)
				<tr>
					<td>{{ $admin->id }}</td>
					<td>{{ $admin->name }}</td>
					<td>{{ $admin->surname }}</td>
					<td>{{ $admin->email }}</td>
					<td>{{ $admin->password }}</td>
					<td>
						<form action="{{url('/admin/'.$admin->id)}}" method="post">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE">
							<input type="submit" name="sub" value="DELETE">
						</form>		

						<a href="{{url('/admin/'.$admin->id)}}">SHOW</a>	
						<a href="{{ route('admin.edit',$admin->id) }}">UPDATE</a>			
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{url('create')}}">Create</a>
	</body>
</html>
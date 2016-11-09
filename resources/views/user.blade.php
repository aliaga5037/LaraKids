<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <h1>Test</h1>
        <table>
        	<thead>
        		<tr>
        			<th>User Name</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach ($user as $us)
        			<tr>
        				<td>{{ $us->name }}</td>
        			</tr>
        		@endforeach
        	</tbody>
        </table>
        <script src="js/main.js"></script>
    </body>
</html>
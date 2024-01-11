<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 2px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            height: 50px; /* Adjust the height as needed */
        }
    </style>
</head>

<body>
    <a href="/">Return Home</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>{{ $image->first_name." ".$image->last_name }}</td>
                <td>{{ $image->type == 1 ? "Block Storage" : "Spaces Object Storage" }}</td>
                <td><a href="{{$image->img_src}}" target="_blank"><img src="{{$image->img_src}}"/></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

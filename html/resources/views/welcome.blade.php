<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding-top: 50px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 15px;
        }

        form div label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form div input[type="text"],
        form div input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group-radio {
            display: flex;
            align-items: center;
        }

        .form-group-radio label {
            margin-left: 10px;
            font-weight: normal;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Registration</h1>
        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" />
            </div>

            <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" />
            </div>

            <div>
                <input type="file" name="file" accept="image/png, image/jpeg" />
            </div>

            <div class="form-group-radio">
                <input type="radio" name="type" value="2" id="spaces" />
                <label for="spaces">Spaces Object Storage</label>
            </div>

            <button type="submit">Upload</button>
        </form>

        <a href="/list">View All Images</a>
    </div>
</body>

</html>

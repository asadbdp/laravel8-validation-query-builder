<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View HTML Test</title>
</head>
<body>
    <h1>Student Information</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['roll'] }}</td>
                <td>{{ $data['class'] }}</td>
            </tr>
        </tbody>
    </table>
    <h1><?php //echo $data['class_name'], $data['roll_number'] //$key['name'] ?></h1>
</body>
</html>

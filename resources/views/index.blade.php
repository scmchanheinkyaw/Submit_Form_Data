<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 600px;
            border: 1px solid #000;
            border-collapse: collapse;
            margin-top: 50px;
        }
        table th,td{
            border: 1px solid #000;
            padding: 10px 50px;
        }
    </style>
</head>
<body>
    <form action="{{ url('/') }}" method="POSt">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <br><br>
        <label>Hobbie</label>
        <input type="checkbox" name="hobbie[]" value="reading">Reading
        <input type="checkbox" name="hobbie[]" value="writing">Writing
        <input type="checkbox" name="hobbie[]" value="listening">Listening
        <input type="checkbox" name="hobbie[]" value="eating">Eating
        <br><br>
        <label>Gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br><br>
        <label>Favourite</label>
        <select name="favourite[]" multiple>
            <option value="football">Football</option>
            <option value="watching">Watching</option>
            <option value="learning">Learning</option>
        </select>
        <br><br>
        <label>Marital Status</label>
        <select name="marital">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <th>Name</th>
            <th>Hobbie</th>
            <th>Gender</th>
            <th>Favourite</th>
            <th>Marital Status</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $name }}</td>
                <td>
                    @foreach ($hobbies as $hobbie)
                    {{ $hobbie . "," }}
                    @endforeach
                </td>
                <td>{{ $gender }}</td>
                <td>
                    @foreach ($favourites as $favourite)
                    {{ $favourite . "," }}
                    @endforeach
                </td>
                <td>{{ $marital }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,th,tr td{
            border: 1px solid #000;
            padding: 10px;
        }
        td{
            background-color: #ffc0cb;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $infor)
                <tr>
                    <td>{{$infor['title']}}</td>
                    <td>{{$infor['body']}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
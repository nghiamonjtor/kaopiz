<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        h2{
            color: red;
        }
    </style>
</head>
<body>
    <h2>Hello</h2>
    {{$test['name']}} - {{$test['age']}}
    <br>
    @if($test['age']>18)
    <h3>Đủ tuổi đi tù</h3>
    @else
    <h3>Chưa đủ tuổi đi tù</h3>
    @endif
</body>
</html>

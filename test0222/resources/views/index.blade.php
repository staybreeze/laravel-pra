<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $myArr=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat',
];
dump($myArr);

    $text="Hello $name - Tel $tel";
    echo $text;      
    $url=route('route.f3');
    dd($url);
    ?>
    <br>
    <a href="{{route('route.f1')}}">go_f1</a><br>
    <a href="{{route('route.f2')}}">go_f2</a><br>
    <a href="{{route('route.f3')}}">go_f3</a>
</body>
</html>
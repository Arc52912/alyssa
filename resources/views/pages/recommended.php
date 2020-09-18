<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo | Profile</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>Fastfoods</h1>
    <a href="{{url('/')}}">Home</a> | <a href="{{url('/popularity')}}">Popularity</a>  | Most Recommended
    <h4 style="margin-top:3%">Most Recommended Fastfoods</h4>
    <li>McDonald's</li>
    <li>Starbucks</li>
    <li>Subway</li>
    <li>Taco Bell</li>
    <li>Burger King</li>
</body>
</html>
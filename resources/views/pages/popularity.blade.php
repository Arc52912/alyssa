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
    <a href="{{url('/')}}">Home</a> | Popularity | <a href="{{url('/recommended')}}">Most Recommended</a> 
    <h4 style="margin-top:3%">Popular Fastfoods</h4>
    <li>Subway</li>
    <li>McDonald's</li>
    <li>Starbucks</li>
    <li>Dunkin' Donuts</li>
    <li>Pizza Hut</li>
</body>
</html>
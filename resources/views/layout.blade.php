<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <style>
 
        ul>li{
            border-style: dotted;
            border: 5px ;
            border-width: 10px;
            margin-right: 10px;
            border-height: 5px;
            display: inline;
        }
    </style>

    
    <ul>
        <li>
            <a href="/">Home</a>       
        </li>
        <li>
            <a href="/contact">Contact</a>       
        </li>
        <li>
            <a href="/aboute">Aboute</a>       
        </li>
    </ul>
    @yield('content')    

    
</body>
</html>
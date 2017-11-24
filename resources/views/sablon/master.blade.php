<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MuhasebeMirzam Basit Gelir Gider Tablosu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="//{{@$_SERVER['HTTP_HOST']}}/asset/images/favicon.ico">
    <link href="//{{@$_SERVER['HTTP_HOST']}}/asset/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="//{{@$_SERVER['HTTP_HOST']}}/asset/css/font-awesome.css" rel="stylesheet">
    <link href="//{{@$_SERVER['HTTP_HOST']}}/asset/css/style.css" rel="stylesheet">
</head>

@includeIf('sablon.header')
@stack('content')
@includeIf('sablon.footer')


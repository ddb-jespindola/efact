<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DDB-Facturacion Electronica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <style>
            .bg-gray{
                
            }
            body{
                font-family: 'Roboto', sans-serif;
            }
            .hvh{
                min-height: 80vh;
            }
            #ddbsuccess{
                display: none;
            }
            #ddberror{
                display: none;
            }
        </style>
    </head>
    <body  class="d-block">
    <section class="hvh">
    <div class="pt-3">
        <div class="row mx-auto">
            <img class="d-block w-auto mx-auto" src="https://ddb.com.co/wp-content/uploads/2020/07/deposito-de-drogas-boyaca-logo.png" height="100px">
        </div>
    </div>
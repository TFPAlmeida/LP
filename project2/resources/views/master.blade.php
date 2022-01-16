<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProject</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}<!--importar header-->
    @yield('content') <!--é usada para exibir o conteúdo de uma determinada seção, que é definido por-->
    

</body>
<style>
    .custom-login{
        width: 900px;
        padding: 40px;
        margin: auto;
        margin-top: 5%;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-announcement{      
        margin-top: 5%;
        width: 450px;
        color: white;
        background-color: rgba(0, 0, 0, 0.6);
        margin: auto;
        text-align: center;
        
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        
    }
    .title-card-list{
        margin: 30px;
    }
    .trending-wrapper{
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    
    .search-box{
        width: 500px !important;
    }
    
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .about{
        width: 400px;
        background: rgba(0, 0, 0, 0.4);
        padding: 40px;
         margin: auto;
        margin-top: 5%;
        color: white;
        font-family: 'Century Gothic',sans-serif;
    }

    .container{
        margin-top: 5%;
        width: 450px;
        color: white;
        background-color: rgba(0, 0, 0, 0.6);
        margin: auto;
        text-align: center;
    }

    .custom-product{
        margin-top: 5%;
       
        
       
        margin: auto;
        
    }

</style>
</html>
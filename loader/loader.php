<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>
    <link rel="shortcut icon" href="imgs/logo.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../sistema/css/loader.css">
    <script src="ld.js"></script>
    
</head>
<body>
    <div class="loader">
        <div></div>
    </div>

    <script>
    $(window).on('load',function(){
        $('.loader').fadeOut(20000);
        $('.content').fadeIn(20000);
    });
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Canvas Ripoff</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    
        <link rel="stylesheet" href="css/styles.css">

        <style type="text/css">
            body { 
                background-image:url("images/canvas_bg.gif");
                background-color: #cccccc;
                background-attachment: fixed;
                background-position: center;
                background-clip: padding-box;
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .canvas-green {
                background:#04592a;
            }
        </style>
    </head>
    
    <body>
        <div class="card center-register canvas-green text-white">
            <div class="container">
              
                <h1 class="horizontal-text-center display-1"><strong>USLS</strong></h1>
              
                <h4 class="horizontal-text-center display-4"><strong>REGISTER</strong></h4>
                <div class="container horizontal-center">
                    <br><br><br>
                    <input type="text" name="ID" placeholder="Enter Student/Faculty ID" class="horizontal-center">
                    <br><br>
                    <input type="password" name="ID" placeholder="Password" class="horizontal-center">
                    <br><br>
                    <input type="password" name="ID" placeholder="Confirm Password" class="horizontal-center">           
                    <div class="dropdown">
                        <br>
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose your Role
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Student</a>
                            <a class="dropdown-item" href="#">Teacher</a>
                        </div>
                     </div>        
                                            <div class="container horizontal-center">
                        <br>
                            <a href="index.php" class="btn mx-auto mb-4 text-white btn-outline-light a-white" style="float:left;">Cancel</a>
                            <a href="index.php" class="btn mx-auto mb-4 text-white btn-outline-light a-white" style="float:right;">Confirm</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
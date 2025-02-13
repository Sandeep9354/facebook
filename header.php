<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <style>
        .bg-body-tertiary{
            background-color: #fff !important;
        }
        .navbar-brand span{
            font-size: 30px;
            color:#0165E1 !important;
            font-weight: bold;
            font-family: Roboto !important;

        }
      .logo_pc{
        display: none;
          width: 50px;
          height: 50px;
      }
        @media (min-width: 768px){
            .logo_pc{
            display: block;
            }
          
        }
        .right-nav{
          
            position: absolute;
            right: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .collapse .navbar-collapse{
            justify-content: space-between;
        }
       .main-box{
              background-color: rgb(240, 242, 245);
              color: #000;
              width: 50px;
              height: 50px;
              border-radius: 50%;
              display: flex;
              justify-content: center;
              align-items: center;
              margin-left: 10px;
                cursor: pointer;
                font-size: 25px;
                font-weight: 900;
       }
       .navbar-toggler{
        border: none !important;
       }
       .main_container{
        padding-bottom: 15px;
        margin-top: 6px;
        display: flex;
       justify-content: space-between;
    }
    .container{
        margin: 0px !important;
        width: auto;
    padding-left: 0px;
    padding-right: 0px;
    font-size: 20px;

    }
    .container:active{
        color:#0165E1 ;
    }
    .container:hover{
        color:#0165E1 ;
    }
    .container:focus{
        color:#0165E1 ;
    }
    .hero_container{
        border-bottom: 2.5px solid #f5f5f5;
    }
    </style>
</head>
<body>
    <div class="hero_container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span>facebook</span>
</a>
    
    <div class="right-nav">
        <div class="main-box">
        <i class="fa-solid fa-plus"></i>
        </div>
        <div class="main-box">
        <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="main-box">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        </div>
    </div>
  
  </div>
  
</nav>

    <div class="container-fluid main_container">
        <div class="container">
        <i class="fa-solid fa-house"></i>
        </div>

        <div class="container">
        <i class="fa-solid fa-user-group"></i>
        </div>


        <div class="container">
        <i class="fa-brands fa-facebook-messenger"></i>
        </div>

        
        <div class="container">
        <i class="fa-solid fa-bell"></i>
        </div>

        
        <div class="container">
        <i class="fa-brands fa-youtube"></i>
        </div>

    </div>
    </div>
</body>
</html>
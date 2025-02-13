<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <style>
        .container-sm {
           
            height: 60px;
        
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .profile_image {
            position: relative;
            left: -11px;
            padding: 2px !important;
            max-height: 90%;
            width: 55px;
            object-fit: cover;
            border-radius: 50% !important;
            border: none !important;
            margin-left: 0px !important;
        }

       .form_input_box{
   width: auto;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #000 !important;
    background-color: rgb(240, 242, 245);;
    background-clip: padding-box;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    border-radius:50px;
    height: 45px;
       }
.form_input_box::placeholder{
    font-size: 16px;
    color: #000;
}
.photo_image{
    position: relative;
    top: -5px;
border: none !important;
}
.card{
    justify-content: space-between;
    height: auto;
    display: flex
;
    height: 40px;
    border: none;
    align-items: center;
}
    </style>
</head>

<body>
    <?php
    include('header.php'); ?>

</body>
<div style="border-bottom:5px solid #f5f5f5;">
<div class="container-sm" style="margin-bottom: 10px;">
    <img src="images/sandeep_3.jpg" class="img-thumbnail profile_image" alt="...">
  <input type="email" class="form_input_box" id="floatingInput" placeholder="What's on your mind?">
  <div class="card "style="justify-content: space-between;
    height: auto;
    display: flex
;
    height:40px;
    border: none;
    align-items: center;" >
  <img src="https://static.xx.fbcdn.net/rsrc.php/v4/y7/r/Ivw7nhRtXyo.png" class="img-thumbnail photo_image" alt="Photo">
  <div class="card-body">
    <p class="card-text" style="    position: relative;
    margin-top: 0px;
    top: -25px;
    font-size:12px;
    
    ">Photo</p>
  </div>
</div>

</div>
</div>
</html>
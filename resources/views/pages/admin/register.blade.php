<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/>
    <title>User_Register</title>
</head>
<body>
    <x-flash/>
    <x-nav1/>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-6 d-flex flex-column justify-content-center">

        <form action="/admin/register" method="post" enctype="multipart/form-data">
            @csrf
            <label style="color: rgba(155, 222, 20, 0.785); border-bottom:2px dotted black; font-size: 32px; font-weight:bold"  for="">User_Name:</label> 
            <input class="form-control my-3" type="text" name="username" id="" placeholder="Enter Your Name"> @error('username')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                </p>
            @enderror
            <label style="color: rgb(171, 236, 42); border-bottom:2px dotted black; font-size:32px; font-weight:bold"  for="">Email:</label> 
            <input class="form-control my-3" type="email" name="email" id="" placeholder="Enter Your Email">     @error('email')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                </p>
            @enderror    
            <label style="color: rgb(171, 235, 43); border-bottom:2px dotted black; font-size:32px; font-weight:bold"  for="">PassWord:</label> 
            <input class="form-control my-3" type="password" name="password" id="" placeholder="Enter Your PassWord"> 
            @error('password')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                </p>
            @enderror
            <label style="color: rgb(166, 225, 47); border-bottom:2px dotted black; font-size: 32px; font-weight: bold"  for="">Profile_Image:</label> 
            <input class="form-control my-3" type="file" name="image" id="">
            @error('image')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                </p>
            @enderror    
            <input class="form-control my-3" type="submit" value="Register" style="background: yellowgreen">
        </form>
            </div>
            <div class="col-lg-6">
                <img width="100%" src="https://img.freepik.com/free-vector/fashion-business-man-accessories-set_1284-16521.jpg?size=626&ext=jpg&ga=GA1.1.505555653.1683209373&semt=sph" alt="" srcset="">
            </div>
        </div>
    </div>
















    <x-boot_js/>
</body>
</html>
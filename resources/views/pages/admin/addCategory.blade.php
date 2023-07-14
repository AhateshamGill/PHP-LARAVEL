<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/>
    <title>Add_Catagory</title>
</head>
<body>
    <x-flash/>
    <div class="row">   
        <div class="col-lg-3">  
            <x-adminSidebar/>
        </div>
        <div class="col-lg-9 my-3"> 
            <h1 class="display-4 text-center fw-bolder" style="color: chartreuse">
            Add_Catagory
            </h1>
    
        <form action="/add-category" method="POST" enctype="multipart/form-data" class="w-75 m-auto p-3" style="border: 1px solid #45cd32; border-radius:10px;">
        @csrf
        <label for="">Product_Category</label>
        <input type="text" name="category_name" id="" class="form-control my-3">
        @error('name')
            <p class="text-danger fw-bolder">
                {{ $message }}
            </p>
        @enderror
        <input type="file" name="category_image" id="" class="form-control">
        <input type="submit" value="Submit" id="" class="form-control my-3 btn btn-success" style="color: #fff; background:#45cd32">
        </form>
            </div>
    </div>


















    <x-boot_js/>
</body>
</html>
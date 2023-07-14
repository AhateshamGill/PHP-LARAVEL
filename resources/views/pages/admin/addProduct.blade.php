<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/>
    <title>Add_Product</title>
</head>
<body>
    <x-flash/>
    <div class="row">
        <div class="col-lg-3">
            <x-adminSidebar/>
        </div>
        <div class="col-lg-9">
            <h1 class="display-1 text-center" style="color: yellowgreen">
                ADD_PRODUCT
            </h1>
            <form action="/add-product" method="post" enctype="multipart/form-data" class="col-lg-6 m-auto p-3"  style="border: 1px solid yellowgreen; border-radius:10px;">
                @csrf
                <label for="">Product_Name</label>
                <input class="form-control my-3"  type="text" name="name" id="" placeholder="e.g Computer Assessries">
                @error('name')
                    <p class="text-danger fw-bolder">
                        {{ $message }}
                    </p>
                @enderror
                <label for=""> Product_Price</label>
                <input class="form-control my-3"  type="number" name="price" id="" placeholder="e.g 3333">
                @error('price')
                    <p class="text-danger fw-bolder">
                        {{ $message }}
                    </p>
                    @enderror
                <label for="">Product_category</label>
            <select class="form-control"  name="category" id="">
                    @foreach
                <option value="{{ $item->category_name }}">
                        {{ $item->category_name }}
                    @endforeach
                </select>
                <label for="">Info</label>
                <input class="form-control"  type="text" name="info" id="" placeholder="Product Description">
                @error('info')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                @enderror
                </p>
                @error('category')
                <p class="text-danger fw-bolder">
                    {{ $message }}
                </p>
                @enderror
    <input class="form-control my-3"  type="file" name="image" placeholder="Add your Image">
                @error('image')
                <p class="text-danger fw-bolder">
                    {{ $message }}    
            </p> 
            @enderror
                
                
                <input class="form-control my-3"  type="submit" value="Add_Product" class="btn" style="background: yellowgreen">
            </form>
        </div>
    </div>





<x-boot_js/>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product_details</title>
    <x-boot_css/>
    <x-boot_icons/>
</head>
<body>
    <x-flash/>
    <x-nav1/>
    <div class="container"> 
        <h1 class="display-3 fw-bold text-center" style="color: limegreen">
            Your_Product
        </h1>
        <div class="row">
            <div class="col-lg-6">
        <img width="396px" height="220px" src="{{ asset('storage/' . $product->image) }}" alt="">
            </div>
            <div class="col-lg-6">  
            <form action="/add-to-cart" method="POST">
                @csrf
            <h3>Product_Name: <span style="color: #92FD2F">{{ $product->name }} </span></h3>
            <input type="hidden" name="Item_name" value="{{ $product->name }}">
                <h3>Product_Price:<span style="color: #92FD2F">{{ $product->price }} </span></h3>
                <input type="hidden" name="Item_price"  value="{{ $product->price }}">
            <h3>Product_Category: <span style='color: #92FD2F'>{{ $product->category }}</span></h3>
                <input type="hidden" name="Item_category" value="{{ $product->category }}">
                <h3>Product_Info: <span style="color: #92FD2F"> {{ $product->info }} </span></h3>
                <input type="hidden" name="Item_info" value="{{ $product->info }}">
                <input type="hidden" name="Item_image" value="{{ $product->image }}">
            <div class="d-flex">
        <button class="btn btn-success">
        +
        </button>
    <input type="number"  name="Item_quantity" class="quantity form-control" style="width: 9%;">
        <button class="btn btn-danger">
        -
        </button>
            </div>  
        <button type="submit" class="btn w-100 text-success my-1" style="background-color: #a0a607">Add To Cart</button>
        <button type="submit" class="btn w-100 text-success my-1" style="background-color: #a4e50d">Check Out</button>
                </form>
            </div>
        </div>
    </div>
        <x-boot_js/>
</body>

    <script>
        let increase = document.querySelector('.btn-success');
        let decrease = document.querySelector('.btn-danger');
        let quantity = document.querySelector('.quantity');
        count = 0
        quantity.value = count
        increase.addEventListener('click',(e)=>{
            e.preventDefault();
            count++;
            quantity.value = count
        })
        decrease.addEventListener('click',(e)=>{
            e.preventDefault();
            count--;
            if(count < 0){
                count = 0;
                quantity.value = count
            }
            quantity.value = count
        })
    </script>

</html>
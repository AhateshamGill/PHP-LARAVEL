<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce_App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/>
</head>
<body>
    <x-flash/>
<div class="sidebar" style="background: rgba(55, 183, 24, 0.2); z-index:2;  position:fixed; top:56px;">
            <x-adminSidebar/>
                </div>
    <x-nav1/>
            <div class="col-lg-12">
                <x-slider/>
                <h1 class="display-6 text-center fw-bolder" style="color: chartreuse">Our_Products</h1>
            <div class="row" style="gap: 1rem">
    @foreach ($products as $product)
        <div class="col-lg-5 p-2 shadow border rounded-5 m-auto">
        <img width="396px" height="220px" class="rounded-4"  src="{{ asset('storage/' . $product->image) }}" alt="">   
        <h3>
            Product_Name: <span class="display-6" style="color: lawngreen"> {{ $product->name }} </span>
        </h3>
        <h3>
            Product_Price: <span class="display-6" style="color: lawngreen"> {{ $product->price }} </span>
            </h3>
        <h3>
            Product_Category: <span class="display-6" style="color: lawngreen"> {{ $product->category }} </span>
            </h3>
        <h3>
            Product_Info: <span class="display-6" style="color: lawngreen"> {{ $product->info }} </span>
            </h3>  <a href="/admin/single-product/{{ $product->id }}" class="btn btn-success w-50 m-auto text-center d-flex justify-content-center rounded-4" style="background: #92FD2F" >Show_More</a>
        </div>
    @endforeach
        {{ $products->links("pagination::bootstrap-5") }}
    </div>
            </div>
        </>
    <>




    <x-boot_js/>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View_Datails</title>
    <x-boot_css/>
    <x-boot_icons/>
</head>
<body>
    <x-flash/>
    <x-nav1/>
    <div class="container"> 
        <h1 class="display-1 text-center text-success">
            Your_Product
        </h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-success">Product_ID</th>
                <th class="text-success">Product_Name</th>
                <th class="text-success">Product_Price</th>
                <th class="text-success">Product_quantity</th>
                <th class="text-success">Product_Category</th>
                <th class="text-success">Product_Info</th>
                <th class="text-success">Product_image</th>
                <th class="text-success">Update_Details</th>
                <th class="text-success">Delete_Details</th>
            </tr>
        </thead>
        <tbody> 
        <form action="/send-mail" method="post"> 
        @csrf
            @foreach ($cartItems as $item)
                
            <tr>
                <td>{{ $item->user_id }} 
            <input type="hidden" name="id" value="{{ $item->user_id }}">
                </td>
                <td>{{ $item->Item_name }} 
            <input type="hidden" name="name" value="{{ $item->Item_name }}">
                </td>
                <td>{{ $item->Item_price }} 
            <input type="hidden" name="price" value="{{ $item->Item_price }}">
                </td>
                <td>{{ $item->Item_quantity }} 
            <input type="hidden" name="quantity" value="{{ $item->Item_quantity }}">
                </td>
                <td>{{ $item->Item_category }} 
            <input type="hidden" name="category" value="{{ $item->Item_category }}">
                </td>
                <td>{{ $item->Item_info }} 
            <input type="hidden" name="info" value="{{ $item->Item_info }}">
                </td>
                <td>
        <img width="69px" height="29px" src="{{ asset('storage/' . $item->Item_image) }}" alt="">
        <input type="hidden" name="image" value="{{ $item->Item_image }}">
                </td>
                <td>
                    <button class="btn btn-success">Update</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <button type="submit"  class="btn btn-primary d-flex ms-auto justify-content-center w-25">
        Check_Out
        </button>
        </form>

    <x-boot_js/>
</body>
</html>
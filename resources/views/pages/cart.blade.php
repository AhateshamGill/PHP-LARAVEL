<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>send-mail</title>
    <x-boot_css/>
    <x-boot_icons/>
</head>
<b>
    <x-flash/>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>CATEGORY</th>
            <th>INFO</th>
            <th>IMAGE</th>
            <th>BUYER</th>
            <th>EMAIL</th>
        </thead>
    <tbody>
    <td>{{ $cartData['id'] }}</td>
    <td>{{ $cartData['name'] }}</td>
    <td>{{ $cartData['price'] }}</td>
    <td>{{ $cartData['quantity'] }}</td>
    <td>{{ $cartData['category'] }}</td>
    <td>{{ $cartData['info'] }}</td>
    <td><img width="39px" height="29px"  src="{{ asset('storage/' .  $cartData['image']) }}" alt=""></td>
    <td>{{ $details['name'] }}</td>
    <td>{{ $details['email'] }}</td>
    </tbody>
    </table>


    <x-boot_js/>
</body>
</html>
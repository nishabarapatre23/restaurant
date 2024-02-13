<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss');

  </head>
  <body>

    <div class="container-scroller">


    @include('admin.navbar');

<div class="container">

    <h1>Customer Orders</h1>

<form action="{{url('/search')}}" method="GET">
    @csrf
    
    <input type="text" name="search" style="color: blue">

    <input type="submit" value="Search" class="btn btn-success">

</form>

    <table>
        <tr align="center">
            <td style="padding: 20px;">Name</td>
            <td style="padding: 20px;">Phone</td>
            <td style="padding: 20px;">Address</td>
            <td style="padding: 20px;">Foodname</td>
            <td style="padding: 20px;">Price</td>
            <td style="padding: 20px;">Quantity</td>
            <td style="padding: 20px;">Total Price</td>
        </tr>

        @foreach ($data as $order)
            <tr align="center" style="background-color: black;">
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->foodname}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price * $order->quantity}}Rs</td>
            </tr>
        @endforeach
    </table>

</div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript');


  </body>
</html>

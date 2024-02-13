<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

<base href="/public">

    <!-- Required meta tags -->
    @include('admin.admincss');

  </head>
  <body>

    <div class="container-scroller">


    @include('admin.navbar');


<form action="{{url('/updateweekmenu',$menu->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Food Name</label>
        <input style="color: blue" type="text" name="name" value="{{$menu->name}}">
    </div>
    <div>
        <label>Price</label>
        <input style="color: blue" type="text" name="price" value="{{$menu->price}}">
    </div>
    <div>
        <label>Old Image</label>
        <img height="300" width="200" src="/specialmenuimage/{{$menu->image}}">
    </div>
    <div>
        <label>New Image</label>
        <input type="file" name="image">
    </div>
<div>
    <input style="color: blue" type="submit" value="Update Food">
</div>
</form>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript');


  </body>
</html>

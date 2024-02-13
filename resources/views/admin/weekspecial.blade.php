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

    <form action="{{url('/uploadweekspecial')}}" method="post" enctype="multipart/form-data">
@csrf
        <div>
            <label>Food Name</label>
            <input style="color: blue " type="text" name="name" placeholder="Enter Name" required>
        </div>

        <label for="category">Select a Category:</label>
<select id="category" name="category">
    <option>Breakfast</option>
    <option>Lunch</option>
    <option>Dinner</option>
</select>

        <div>
            <label>Price</label>
            <input style="color: blue " type="text" name="price" placeholder="Food Price" required>
        </div>
        <div>
            <input type="file" name="image" required>
        </div>
        <div>
            <input  style="color: blue " type="submit" value="Save">
        </div>

    </form>
<div>
<table bgcolor="black">
    <tr>
        <th style="padding:30px; ">Food Name</th>
        <th style="padding:30px; ">Price</th>
        <th style="padding:30px; ">Image</th>
        <th style="padding:30px; ">Action</th>
        <th style="padding:30px; ">Action</th>

    </tr>
@foreach ($menu as $menuitems)

<tr align="center">
    <td>{{$menuitems->name}}</td>
    <td>{{$menuitems->price}}</td>
    <td><img src="specialmenuimage/{{$menuitems->image}}" width="100"></td>
    <td><a href="{{url('/updateweek',$menuitems->id)}}">Update</a></td>
    <td><a href="{{url('/deleteweek',$menuitems->id)}}">Delete</a></td>

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

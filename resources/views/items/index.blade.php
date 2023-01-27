<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

    <form action="">
        <input type="text" name="search">
        <button>Search</button>
    </form>

    <div class="container">
        <h1>Items</h1>
        <table class="table" border="4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>


                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                    <td>{{$item->name}} </td>
                    <td>{{$item->email}} </td>
                    <td>{{$item->country}} </td>
                    <td>{{$item->state}} </td>
                    <td>{{$item->address}} </td>
                    <td>{{$item->gender}} </td>
                    <td>{{$item->dob}} </td>
                    <td>



                 <button> <a href = "{{ route('items.edit',$item->id)}}">Edit</a>
                 </button>

                  <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="form-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            {{$items->links()}}
        </div>
        <a href="{{ route('items.create') }}" class="btn btn-success">Create New Item</a>
    </div>
</body>
</html>

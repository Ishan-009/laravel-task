<!-- resources/views/items/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Show Item</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->description }}</p>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="form-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
</body>
</html>

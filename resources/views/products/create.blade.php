<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Creating Products</h1>


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
    @endforeach
    @endif


    <form action="{{ route('product.store') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="qty" placeholder="Quantity">
        <input type="text" name="price" placeholder="Price">
        <input type="file" name="image" placeholder="Image">
        <input type="text" name="desc" placeholder="Desc">
        <div>
            <button type="submit">Save The Data</button>
        </div>
    </form>

</body>

</html>

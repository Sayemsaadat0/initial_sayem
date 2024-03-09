<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Products</h1>
    


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
    @endforeach
    @endif


    <form action="{{ route('product.update', ['product'=> $product]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        <input type="number" name="qty" placeholder="Quantity" value="{{$product->qty}}">
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        <input type="file" name="image" placeholder="Image" value="{{$product->image}}">
        <input type="text" name="desc" placeholder="Desc" value="{{$product->desc}}">
        <div>
            <button type="submit">update The Data</button>
        </div>
    </form>

</body>

</html>

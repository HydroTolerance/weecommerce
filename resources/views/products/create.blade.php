<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        
    </div>
    <h1>Create Products</h1>
    <form action="{{route('products.store')}}" method="post">
        @csrf
        @method('post')
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id"/>
        <label for="">Product Name</label>
        <input type="text" name="product_name"><br>
        <label for="">Price</label>
        <input type="number" name="price"><br>
        <label for="">Quantity</label>
        <input type="number" name="qty"><br>
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>
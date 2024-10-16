<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;font-family:'Comic-Neue',cursive;font-weight:bolder;">Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.update',['product' => $product])}}">
        @csrf
        @method('PUT')
        <div style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}" 
               style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" />
    </div>
    <div style="margin-bottom: 15px;">
        <label for="qty" style="display: block; margin-bottom: 5px; font-weight: bold;">Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" 
               style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" />
    </div>
    <div style="margin-bottom: 15px;">
        <label for="price" style="display: block; margin-bottom: 5px; font-weight: bold;">Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}" 
               style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" />
    </div>
    <div style="margin-bottom: 15px;">
        <label for="description" style="display: block; margin-bottom: 5px; font-weight: bold;">Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$product->description}}" 
               style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" />
    </div>
    <div style="text-align: center;">
        <input type="submit" value="Update" 
               style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" />
    </div>
</div>

    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;font-family:system-ui;color:red;">Product</h1>
    <div>
        @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}" style="text-decoration:none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px;font-family:system-ui;">Create a Product</a>
        </div>
        <table  border="1" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
           <tr style="background-color: #f2f2f2; text-align: left;">
           <th style="padding: 12px;">ID</th>
        <th style="padding: 12px;">Name</th>
        <th style="padding: 12px;">Qty</th>
        <th style="padding: 12px;">Price</th>
        <th style="padding: 12px;">Description</th>
        <th style="padding: 12px;">Edit</th>
        <th style="padding: 12px;">Delete</th>
           </tr>
           @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}" style="text-decoration:none;font-family:system-ui;color:black;font-weight:bolder;margin-left:1rem;">Edit</a>
                </td>
                <td>
                    <form action="{{route('product.destroy',['product'=>$product])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" style="background-color: #ff4d4d; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;"/>
                    </form>
                </td>
            </tr>
           @endforeach
        </table>
    </div>
    <!-- Optional: Add a hover effect -->
<script>
document.querySelector('input[type="submit"]').addEventListener('mouseover', function() {
    this.style.backgroundColor = '#ff1a1a';  // Darker red on hover
});
document.querySelector('input[type="submit"]').addEventListener('mouseout', function() {
    this.style.backgroundColor = '#ff4d4d';  // Original color
});
</script>
</body>
</html>
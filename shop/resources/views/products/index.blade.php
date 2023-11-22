<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    @foreach($products as $product)
    <main>
        <article>
            <h2>{{$product->name}}</h2>
            <img style='width: 750px; height: 400px;' src={{$product->imageURL}} alt="ja"/>
            <p>{{$product->description}}</p>
            <p>{{$product->price}}</p>
        </article>
    </main>
    @endforeach
</body>
</html>
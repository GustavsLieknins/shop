<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}}</title>
</head>
<body>
    <h1>Product</h1>
    <main>
        <article>
            <h2>{{$product->name}}</h2>
            <img  style='width: 750px; height: 400px;' src={{$product->imageURL}} alt="ja"/>
            <p>{{$product->description}}</p>
            <p>{{$product->price}}</p>
        </article>
    </main>
</body>
</html>
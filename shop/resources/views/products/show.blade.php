<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$products->name}}</title>
</head>
<body>
    <h1>Products</h1>
    <main>
        <article>
            <h2>{{$products->name}}</h2>
            <img  style='width: 750px; height: 400px;' src={{$products->imageURL}} alt="ja"/>
            <p>{{$products->description}}</p>
            <p>{{$products->price}}</p>
        </article>
    </main>
</body>
</html>
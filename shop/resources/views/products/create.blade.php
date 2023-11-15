<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create productts</title>
    <link rel="stylesheet" href="/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf
        <h1>Create</h1>
        <label>
            Product name:
            <textarea name="ProductName"></textarea>
        </label>
        <label>
            Img url:
            <input name="Imgurl" type="file" accept="image/*" />
        </label>
        <label>
            Product deskription:
            <textarea name="Deskription"></textarea>
        </label>
        <label>
            Product price:
            <input type="number" step="0.01" min="0.01" name="Price">
        </label>
        <button>Create!</button>
    </form>
</body>
</html>
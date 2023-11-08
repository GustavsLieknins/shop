<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create productts</title>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <form method="POST" action="/create">
        @csrf
        <h1>Create</h1>
        <label>
            Product name:
            <textarea name="ProductName"></textarea>
        </label>
        <label>
            Img url:
            <textarea name="Imgurl"></textarea>
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
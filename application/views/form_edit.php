<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Artikel</title>
</head>
<body>
    <h1>Form Edit Artikel</h1>
    <form method="POST">
        <div>
            <label for="title">Judul</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="url">URL</label>
            <input type="text" name="url" id="url">
        </div>
        <div>
            <label for="content">Konten</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Simpan Artikel</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codepolitan CI</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>

    <?php foreach ($blogs as $key => $blog): ?>
        <div class="blog">
            <h2><?= $blog['title']; ?></h2>

            <?= $blog['content']; ?>
        </div>
    <?php endforeach;  ?>
</body>
</html>
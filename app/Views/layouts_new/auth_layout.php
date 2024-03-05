<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - <?= $title; ?></title>
    </head>
<body>
    <header>
        </header>

    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <footer>
        </footer>

    </body>
</html>
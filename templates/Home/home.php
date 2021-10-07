<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>
                Welcome to Morten Oleander Nielsen's portfolio
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container jumbotron">
            <p>
                I am a 23 year old datatechnician graduate based in Denmark. I enjoy a lot of aspects of programming but I specialize in web development. This website serves as an introduction to me and my projects. You can find information about my projects and will be provided with their respective GitHub links. Furthermore you can download my CV if you desire.
            </p>
        </div>
    </main>
</body>
</html>
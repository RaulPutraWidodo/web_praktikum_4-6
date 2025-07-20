<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="fa.jpg" title="FadilAdz" width="200" style="float: left; border: 1px solid black;">
            <h1>Hey !</h1>
            <p>SI'm Fadil, I'm a freelancer UI/UX Designer. Currently I am Studying at Pelita Bangsa University <br> I’m currently learning <b>Cybersecurity and Kali Linux.</b></p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
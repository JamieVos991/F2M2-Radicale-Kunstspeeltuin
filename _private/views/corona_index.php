<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/coronaAPI.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <title>Corona</title>
</head>
<body>
    <div class="wrapper">
        <header>
                <a href="" class="logo">Logo</a>
                <div class="menu-toggle"></div>
                    <nav>
                        <ul>
                            <li><a href="<?php echo url('home') ?>" class="active">Home</a></li>
                            <li><a href="<?php echo url('corona.index') ?>">Corona</a></li>
                            <li><a href="<?php echo url('contact.form') ?>">Contact</a></li>
                            <li><a href="<?php echo url('register.form') ?>">Aanmelden</a></li>
                            <li><a href="<?php echo url('login.form') ?>">Inloggen</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
            </header>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    $(document).ready(function(){
                        $('.menu-toggle').click(function(){
                            $('.menu-toggle').toggleClass('active')
                            $('nav').toggleClass('active')
                        })
                    })
                })
            </script>
    </div>
    <h3>Corona landen overzicht</h3>

    <p> Kies het land waarover u info wilt. </p>

    <section class="corona-stats">
        <?php foreach ($countries as $country) : ?>
            <a href="<?php echo url('corona.details', ['country' => $country['Slug']])?>" class="corona-stats__country"><?php echo $country['Country']?> (<?php echo $country['ISO2']?>) </a>
        <?php endforeach; ?>
    </section>
</body>
</html>


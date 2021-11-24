<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/coronaAPI.css">
    <title>Corona</title>
</head>
<body>
    <?php if (count($stats) > 0):?>
        <h3><?php echo $stats['0']['Country'] ?></h3>
        <section class="corona-stats">
            <?php foreach ($stats as $info): ?>
                <div class="stat">
                    <ul>
                        <li><strong>Bevestiged:</strong> <?php echo $info['Confirmed'] ?></li>
                        <li><strong>Overleden:</strong> <?php echo $info['Deaths'] ?></li>
                        <li><strong>Hersteld:</strong> <?php echo $info['Recovered'] ?></li>
                        <li><strong>Actief:</strong> <?php echo $info['Active'] ?></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </section>
    <?php else:?>
        <p>Er zijn geen gegevens gevonden</p>
    <?php endif;?>    
    </body>
</html>

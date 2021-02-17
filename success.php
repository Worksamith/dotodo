<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="success/success.css">
    <title>Ďakujeme za Vašu objednávku!</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-title" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Ads: 442477510 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_GET['gp1']); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo htmlspecialchars($_GET['gp1']); ?>');
</script>
<!-- Event snippet for Website lead conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': '<?php echo htmlspecialchars($_GET['gp1']); ?>/<?php echo htmlspecialchars($_GET['gp2']); ?>'});
</script>

</head>
<body>
<div class="wrap">
    <div class="blink"></div>
    <div class="step1 step2">
        <h1 class="step1__title">Úspech!</h1>
        <h2 class="step1__subtitle">Vaša objednávka bola odoslaná do obchodu!</h2>
    </div>
</div>

</body>
</html>

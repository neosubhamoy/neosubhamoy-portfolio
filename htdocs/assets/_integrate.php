<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright&family=Lexend+Deca:wght@100;300;400&family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/extra-style.css">
<link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/shift-away.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_ENV['ANALYTICS_ID'] ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $_ENV['ANALYTICS_ID'] ?>');
</script>
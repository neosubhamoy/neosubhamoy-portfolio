<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore my Blog Posts about the evolving Tech">
    <meta property="og:title" content="<?php echo fetch_page_title("Blog");?>">
    <meta property="og:description" content="Blog of Subhamoy Biswas (@neo_subhamoy) - Full-Stack Web, Android Developer and UI/UX Designer">
    <meta property="og:image" content="https://<?php echo $domain ?>/assets/images/neosubhamoy.jpg">
    <title><?php echo fetch_page_title("Blog");?></title>
    <?php require __DIR__ . '/../partials/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include __DIR__ . '/../partials/_preloader.php';?>
    <?php include __DIR__ . '/../partials/_floatingbar.php';?>
    <?php require __DIR__ . '/../partials/_header.php';?>
    <div class="blogbox w-full px-4 lg:px-[4.5rem] flex flex-col items-center text-center">
        <div class="mt-[30vh] mb-[60vh]">
            <h1 class="text-2xl font-bold"><i class="fa-regular fa-clock fa-spin text-accent_primary"></i>&nbsp; Coming Soon</h1>
            <p class="text-base text-accent_three mt-3">Please be patience, Something intresting is cooking up...!!</p>
        </div>
    </div>
    <?php require __DIR__ . '/../partials/_footer.php';?>
    <?php require __DIR__ . '/../partials/_commonjs.php';?>
</body>
</html>
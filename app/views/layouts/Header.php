<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>

    <script src="<?= $root; ?>/js/min/vendor/modernizr.min.js" type="text/javascript"></script>
    <script src="<?= $root; ?>/js/min/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="<?= $root; ?>/js/min/vendor/foundation.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?= $root; ?>/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?= $root; ?>/css/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $root; ?>/css/app.css" type="text/css">

</head>
<body>
<!-- Top Bar Section -->
<div class="contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name"><h1><a href="<?= $home_url; ?>">Todo App</a></h1></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="<?= $home_url; ?>/todo">Todo List</a></li>
            </ul>
        </section>
    </nav>
</div>
<!-- Main Site Header -->
<div class="row">
    <header id="main-header" class="small-12 large-12 columns">
    </header>
</div>
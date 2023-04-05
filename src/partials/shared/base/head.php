<?php

$title_tag = $title_tag ?? "";
$meta_desc = $meta_desc ?? "";
$og_url = $meta_desc ?? "";
$og_image = $meta_desc ?? "";

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title_tag; ?></title>
        <meta name="description" content="<?php echo $meta_desc; ?>">
        <meta property="og:title" content="<?php echo $title_tag; ?>">
        <meta property="og:description" content="<?php echo $meta_desc; ?>">
        <meta property="og:image" content="<?php echo $og_image; ?>">
        <meta property="og:url" content="<?php echo $og_title; ?>">
        <meta property="og:type" content="website">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../build/css/reset.min.css">
        <link rel="stylesheet" href="../build/css/main.min.css">
    </head>
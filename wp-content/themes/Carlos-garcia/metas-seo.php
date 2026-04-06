<?php 
$term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$canonical_url = get_field('canonical', $term) ?: $url_sin_string;
$main_title = get_field('title', $term);
?>

<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="UTF-8" />

<?php 
$metarobots_checked_values = get_field('metarobots', $term); 
if ( $metarobots_checked_values ) : ?>
<meta name="robots" content="<?php the_field( "metarobots", $term); ?>">
<?php endif; ?>

<meta name="description" content="<?php the_field( 'metadescription', $term ); ?>">

<meta property="og:description" content="<?php 
    if ( get_field( 'og_description', $term ) ) {
        the_field( 'og_description', $term );
    } else {
        the_field( 'metadescription', $term );
    } 
?>">

<meta property="twitter:description" content="<?php 
    if ( get_field( 'og_description', $term ) ) {
        the_field( 'og_description', $term );
    } else {
        the_field( 'metadescription', $term );
    } 
?>">

<link rel="canonical" href="<?php echo $canonical_url; ?>">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="twitter:url" content="<?php echo $canonical_url; ?>">

<?php $og_image = get_field( 'og_image', $term ); ?>
<meta property="og:image" content="<?php echo $og_image; ?>">
<meta property="og:image:secure_url" content="<?php echo $og_image; ?>">
<meta property="og:image:alt" content="<?php echo $main_title; ?>">
<meta property="twitter:image" content="<?php echo $og_image; ?>">

<meta property="og:type" content="website">
<meta property="twitter:card" content="summary_large_image">

<?php the_field('custom_meta', $term); ?>

<meta name="title" content="<?php echo $main_title; ?>">
<meta property="og:title" content="<?php 
    if (get_field('og_title', $term )){
        the_field( 'og_title', $term );
    } else {
        echo $main_title;
    }
?>">
<meta property="twitter:title" content="<?php 
    if (get_field('og_title', $term )){
        the_field( 'og_title', $term );
    } else {
        echo $main_title;
    }
?>">
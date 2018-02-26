<?php
require_once('inc/content.php');
if( isset($_GET['blog_item']) && $_GET['blog_item']!='' ) {
  $blog_item = $_GET['blog_item'];
  $url_title = str_replace('_', ' ', $blog_item);
  //PAGE CONTENT
  $title = $url_title;
  $img = $php_blog['items'][$url_title]['img'];
  $description = $php_blog['items'][$url_title]['description'];
  if ($description=="") {header("Location: index.php");die();}
} else {
  header("Location: index.php");
  die();
}
//variables
$meta_title = $title;
$is_single = true;
?>
<?php require_once('inc/header.php'); ?>


<div class="container-fluid">
  <a href="index.php">< Back</a>
  <div class="image" style="background-image: url(../img/<?php echo $img; ?>)"></div><!-- .image -->
  <div class="content">
    <p class="title"><?php echo $title; ?></p>
    <p class="description"><?php echo $description; ?></p>
  </div>
  <div class="arrow_nav">
    <?php
    //See if key is the first/last key in array, if so hides arrow so user cannot click forward/back
    reset($php_blog['items']);
    $first=key($php_blog['items']);
    end($php_blog['items']);
    $last=key($php_blog['items']);
    //Finds the Next/Prev array key to generate link for next/prev buttons
    $members_key = array_keys($php_blog['items']);
    $next = $members_key[array_search($url_title, $members_key)+1];
    $prev = $members_key[array_search($url_title, $members_key)-1];
    $next_link = str_replace(' ', '_', $next);
    $prev_link = str_replace(' ', '_', $prev);
    //Hide/Show arrows if $url_title meets if statment criteria
    if ($url_title != $last) { ?>
      <a class="next" title="<?php echo $next; ?>" href="single.php?blog_item=<?php echo $next_link; ?>"><i class="fa fa-angle-right"></i></a>
    <?php }
    if ($url_title != $first) { ?>
      <a class="prev" title="<?php echo $prev; ?>" href="single.php?blog_item=<?php echo $prev_link; ?>"><i class="fa fa-angle-left"></i></a>
    <?php } ?>
  </div>
</div><!-- .content-container -->
<?php require_once('inc/footer.php'); ?>

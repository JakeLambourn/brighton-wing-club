<!-- Social/Share Links -->
<?php $url = get_the_permalink(); ?> 
<ul class="social-share-icons">
    <li><a target="_blank" href="<?php echo "https://twitter.com/intent/tweet?url=" . $url; ?>"><i class="fa fa-twitter"></i></a>
    <li><a target="_blank" href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=" . $url; ?>"><i class="fa fa-facebook"></i></a>
    <li><a target="_blank" href="<?php echo "https://www.linkedin.com/shareArticle?mini=true&url=" . $url; ?>"><i class="fa fa-linkedin"></i></a>
<!--     <li><a href="#"><i class="fa fa-google-plus"></i></a> -->
<!--     <li><a href="#"><i class="fa fa-envelope"></i></a> -->
</ul>
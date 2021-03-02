<?php
$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<section class="navbar">
    <div class="container">
        <div class="logo">
            <a href="#" title="Logo">
                <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
            </a>
        </div>

        <div class="menu text-right">
            <ul>
                <li>
                    <a href="index.php" class="<?php echo('index' == $page ? 'btn-action':'')?>">Home</a>
                </li>
                <li>
                    <a href="categories.php" class="<?php echo('categories' == $page ? 'btn-action':'')?>">Categories</a>
                </li>
                <li>
                    <a href="foods.php" class="<?php echo('foods' == $page ? 'btn-action':'')?>">Foods</a>
                </li>
                <li>
                    <a href="contact.php" class="<?php echo('contact' == $page ? 'btn-action':'')?>">Contact</a>
                </li>
            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Navbar Section Ends Here -->

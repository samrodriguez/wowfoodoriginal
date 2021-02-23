<?php include 'lib/entity/CategoryModel.php'; ?>
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>

        <a href="#">
            <?php $categoria = new CategoryModel(); ?>

            <?php foreach ($categoria->Listar() as $row):?>
                <div class="box-3 float-container">
                    <img src="images/<?php echo $row->img ?>" alt="<?php echo $row->name ?>" class="img-responsive img-curve">
                    <h3 class="float-text text-white"><?php echo $row->name ?></h3>
                </div>
            <?php endforeach; ?>
        </a>
        <div class="clearfix"></div>
    </div>
</section>
<!--
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>
        <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
        </a>

        <div class="clearfix"></div>
    </div>
</section>
-->
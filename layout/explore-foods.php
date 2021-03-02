<?php include 'lib/entity/CategoryModel.php'; ?>
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>
        <a href="#">
            <?php $categoria = new CategoryModel(); ?>

            <?php foreach ($categoria->Listar() as $row):?>
                <div class="box-3 float-container">
                    <img src="images/<?php echo $row->getImg() ?>" alt="<?php echo $row->getName() ?>" class="img-responsive img-curve">
                    <h3 class="float-text text-white"><?php echo $row->getName() ?></h3>
                </div>
            <?php endforeach; ?>
        </a>
        <div class="clearfix"></div>
    </div>
</section>

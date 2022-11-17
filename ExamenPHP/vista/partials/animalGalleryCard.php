<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>

        <div class="profile mt-auto">
            <img src="<?php echo $animal['foto'] ?>" class="testimonial-img" alt="">
            <h3><?php echo $animal['nombre'] ?></h3>
            <h4><?php echo $animal['nombre_cientifico'] ?></h4>
        </div>
        <p class="mt-2">
        <?php echo $animal['descripcion'] ?>
        </p>
    </div>
</div>
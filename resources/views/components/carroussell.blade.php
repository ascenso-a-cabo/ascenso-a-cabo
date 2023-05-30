<div id="carouselExampleIndicators" class="carousel slide p-5" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active rounded">
            <img src="img/leopard1425x800.jpg" class="d-block w-100" alt="leopard">
        </div>
        <div class="carousel-item rounded">
            <img src="img/tiger1425x800.jpg" class="d-block w-100" alt="tiger">
        </div>
        <div class="carousel-item rounded">
            <img src="img/ume1425x800.jpg" class="d-block w-100" alt="UME">
        </div>
        <div class="carousel-item rounded">
            <img src="img/czm1425x800.jpg" class="d-block w-100" alt="CZM">
        </div>
        <div class="carousel-item rounded">
            <img src="img/millan1425x800.jpg" class="d-block w-100" alt="Millan">
        </div>
        <div class="carousel-item rounded">
            <img src="img/paraca1425x800.jpg" class="d-block w-100" alt="paraca">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<script>
    // Agregar funcionalidad de pausa automática al pasar el cursor por encima
    var carousel = document.getElementById('carouselExampleIndicators');
    carousel.addEventListener('mouseover', function () {
        carousel.carousel('pause');
    });
    carousel.addEventListener('mouseout', function () {
        carousel.carousel('cycle');
    });
</script>

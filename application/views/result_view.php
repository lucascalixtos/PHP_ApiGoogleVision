<div class="container mt-5">
    <div class="jumbotron text-center hoverable p-4">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 offset-md-1 mx-3 my-3">

        <!-- Featured image -->
        <div class="view overlay">
            <img src=<?php echo base_url('assets/images/'.$imagem) ?> class="img-fluid" alt="Sample image for first version of blog listing">
            <a>
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-7 text-md-left ml-3 mt-3">

        <!-- Excerpt -->
        <h4 class="h4 mb-4">Possíveis resultados:
        </h4>

        <p class="font-weight-normal"><?php echo $dados?></p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- News jumbotron -->
</div>
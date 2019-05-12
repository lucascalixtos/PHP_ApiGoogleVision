<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Histórico</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto wow slideInUp">
            <table class="table mx-auto justify-content-center">
                <tr>
                    <th scope="col" class="justify-content-center">Imagem</th>
                    <th scope="col">Resultado</th>
                    <th scope="col">ID</th>
                </tr>
                <?php foreach ($resultado as $item): ?>
                <tr>
                    
                    <th scope="col"><img src="<?= base_url('assets/images/'.$item->img) ?>" width="300px"></th>
                    <th scope="col"><?= $item->resultado ?></th>
                    <th scope="col"><?= $item->id ?></th>
                    
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->extend('layouts\app') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row p-3">
        <div class="card col-6">
            <div class="card-body">
                <h2 class="card-title">Leer informacion</h2>
                <p class="card-text">Acontinuacion se brindan dos opciones: crear un contacto y mostrar el listado de contactos registrados en la base de datos. Haga clic en la imagen</p>
            </div>
        </div>
    </div>
    <div class="row p-3">
        <div class="card col-4" style="width: 6rem;">
            <a href="<?= base_url('/contact/create') ?>">
                <img src="<?= base_url('/img/crearContacto.png'); ?>" class="card-img-top">
            </a>
        </div>
        <div class="card col-4 ml-4" style="width: 6rem;">
            <a href="<?= base_url('/contact') ?>">
                <img src="<?= base_url('/img/verContacto.png'); ?>" class="card-img-top">
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
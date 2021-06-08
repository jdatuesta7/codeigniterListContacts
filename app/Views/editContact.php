<?= $this->extend('layouts\app') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="card col-md-8">
        <h1>Editar Contacto</h1>
        
        <form action="<?= base_url() ?>/contact/update" method="post">
            <input type="hidden" id="idcontact" name="idContact" value="<?= $contacto['id']; ?>">
            <div class="form-group">
                <label for="NombreCompleto">Nombre Completo</label>
                <input type="text" name="nombre" value="<?= $contacto['fullname']; ?>" class="form-control" id="NombreCompleto" placeholder="Ingresa el nombre completo">
            </div>
            <div class="form-group">
                <label for="Telefono">Telefono</label>
                <input type="text" name="telefono" value="<?= $contacto['phone']; ?>" class="form-control" id="Telefono" placeholder="Ingresa el telefono">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" value="<?= $contacto['email']; ?>" class="form-control" id="email" placeholder="Ingresa el email">
            </div>
            
            <button class="btn btn-info mb-3" type="submit">Actualizar</button>
        </form>
        
    </div>
</div>

<?= $this->endSection() ?>
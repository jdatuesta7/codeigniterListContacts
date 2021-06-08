<?= $this->extend('layouts\app') ?>

<?= $this->section('content') ?>

<a class="btn btn-primary mb-2" href="/fprueba/public/contact/create"> Crear Contacto</a>
<h1>Lista de Contactos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contacts as $contact) : ?>
      <tr>
        <th scope="row"><?= $contact['id'] ?></th>
        <td><?= $contact['fullname'] ?></td>
        <td><?= $contact['phone'] ?></td>
        <td><?= $contact['email'] ?></td>
        <td>
        <a href="<?= base_url('contact/edit/'.$contact['id']) ?>" class="btn btn-warning mr-5">Editar</a>
        <a href="<?= base_url('contact/delete/'.$contact['id']) ?>" class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>
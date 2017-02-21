<!DOCTYPE html>
<!-- FICHIER APPELÉ DEPUIS le fichier controlleur -->
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $this->table->set_template(['table_open' => '<table class="table">']) ?>
    <?php $this->table->set_heading('Prénom', 'Nom', 'Badge'); ?>
    <?php foreach ($users as $user): ?>
      <?php $this->table->add_row($user->Prenom,$user->Nom,$user->Badge) ?>
    <?php endforeach; ?>
    <?php echo $this->table->generate() ?>
  </body>
</html>

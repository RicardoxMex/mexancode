
<h1>Holasaaaa uwu</h1>

<a href="<?php echo url('home'); ?> ">Holas</a>


<form method="post" action="<?= url('/users') ?>">
    <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
    <input type="text" name="username">
    <button>Enviar</button>
</form>
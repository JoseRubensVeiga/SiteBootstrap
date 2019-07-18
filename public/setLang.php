
<h1 class="text-center mt-5">Estamos configurando o idioma! Aguarde!</h1>
<div class="text-center">
    <div class="spinner-border text-<?php e(config('theme')); ?>" role="status">
    <span class="sr-only">Loading...</span>
    </div>
</div>

<?php

setLaguageSession($_GET['lang']);

header('location: ' . $_SERVER['HTTP_REFERER']);
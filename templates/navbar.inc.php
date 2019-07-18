<nav class="navbar navbar-expand-lg navbar-<?php echo navbar('type'); ?> bg-<?php echo navbar('bg'); ?> shadow">
    <a class="navbar-brand" href="#">
        <?php if(navbar('logo')['type'] == 'imagem'): ?>
        <img class="navbar-logo" src="<?php echo navbar('logo')['content']; ?>" alt="<?php echo navbar('logo')['alt']; ?>">
        <?php else: ?>
        <?php echo navbar('logo')['content']; ?>
        <?php endif ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop"
        aria-controls="navbarTop" aria-expanded="false" aria-label="Alternar Navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav ml-auto">
            <?php foreach(navbar('itens') as $navLink): ?>
                <?php if(isset($navLink['children'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?php echo $navLink['title']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach($navLink['children'] as $sub): ?>
                                <a class="dropdown-item"  href="<?php echo $sub['url']; ?>"><?php echo $sub['title']; ?></a>
                            <?php endforeach ?>
                        </div>
                    </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo navLinkActive($navLink['url']); ?>" href="<?php echo $navLink['url']; ?>">
                        <?php echo $navLink['title']; ?>
                        <?php if(isNavLinkActive($navLink['url'])): ?>
                        <span class="sr-only">(Página atual)</span>
                        <?php endif ?>
                    </a>
                </li>
                <?php endif ?>
            <?php endforeach ?>
            <li class="nav-item mt-1 mx-2">
                <a href="/setLang.php?lang=pt-BR">
                    <img class="img-fluid" src="<?php e(asset('images/flags/br.jpg')); ?>" alt="Bandeira do Brasil, em primeiro plano um circulo azul com estrelas e uma faixa transversal escrito a frase 'Ordem e progresso', em segundo plano um losango amarelo e, em último plano, um fundo verde.">
                </a>
                <a href="/setLang.php?lang=en">
                    <img class="img-fluid" src="<?php e(asset('images/flags/us.jpg')); ?>" alt="Bandeira dos Estados Unidos, em primeiro plano um retângulo azul com estrelas na parte superior esquerda, em segundo plano um fundo listrado horizontalmente em vermelho e branco.">
                </a>
            </li>
        </ul>
    </div>
</nav><!--  End navbar -->
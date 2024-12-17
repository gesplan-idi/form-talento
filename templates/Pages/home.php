<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @var \App\View\AppView $this
 */
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to My CakePHP Application</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>Formulario Talento</h1>
            <p>¡Este es tu panel de inicio!</p>
            <p>Aquí puedes navegar a las principales funcionalidades de la aplicación.</p>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <h3>Accede a las siguientes secciones:</h3>
                        <ul>
                            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">Tu perfil</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Educations', 'action' => 'index']); ?>">Formación académica</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Languages', 'action' => 'index']); ?>">Idiomas</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Experiences', 'action' => 'index']); ?>">Experiencias</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Skills', 'action' => 'index']); ?>">Habilidades</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Aspirations', 'action' => 'index']); ?>">Aspiraciones</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'SkillCategories', 'action' => 'index']); ?>">Categorías de habilidades</a></li>
                            <!-- Agrega más enlaces según las secciones de tu aplicación -->
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="column">
                        <h4>Estado de la Aplicación</h4>
                        <ul>
                            <?php if (version_compare(PHP_VERSION, '7.4.0', '>=')) : ?>
                                <li class="bullet success">PHP versión <?= PHP_VERSION ?> detectada. Todo listo.</li>
                            <?php else : ?>
                                <li class="bullet problem">Tu versión de PHP es demasiado baja. Se necesita PHP 7.4.0 o superior.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

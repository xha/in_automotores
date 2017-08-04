<aside class="main-sidebar">

    <section class="sidebar">
    <?php
       if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Registrarse', 'icon' => 'file-o', 'url' => ['../../backend/web/site/register']];
            $menuItems[] = ['label' => 'Login', 'icon' => 'circle-o', 'url' => ['../../backend/web/site/login']];
            $menuItems[] = ['label' => 'Recuperar Usuario', 'icon' => 'unlock', 'url' => ['../../backend/web/site/recuperar']];
        } else {
            $menuItems[] = ['label' => 'Configuración', 'icon' => 'circle-o', 'url' => '#',
                                'items' => [
                                    ['label' => 'Accion', 'icon' => 'check', 'url' => ['../../backend/web/accion']],
                                    ['label' => 'Rol', 'icon' => 'check', 'url' => ['../../backend/web/rol']],
                                    ['label' => 'Rol - Accion', 'icon' => 'check', 'url' => ['../../backend/web/rol-accion']],
                                    ['label' => 'Recuperar Usuario', 'icon' => 'check', 'url' => ['../../backend/web/site/recuperar']],
                                    ['label' => 'Activar Usuario', 'icon' => 'check', 'url' => ['../../backend/web/site/activar']],
                            ],];
            $menuItems[] = ['label' => 'Modelo', 'icon' => 'folder-o', 'url' => ['../../frontend/web/modelo']];
            $menuItems[] = ['label' => 'Tipo de Vehículo', 'icon' => 'gear', 'url' => ['../../frontend/web/tipo-vehiculo']];
            $menuItems[] = ['label' => 'Alianza', 'icon' => 'star-o', 'url' => ['../../frontend/web/alianza']];
        }
    ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuItems,
            ]
        ) ?>

    </section>

</aside>

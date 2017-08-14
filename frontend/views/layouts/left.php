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
            $menuItems[] = ['label' => 'Tablas Básicas', 'icon' => 'folder-o', 'url' => '#',
                                'items' => [
                                    ['label' => 'Marca', 'icon' => 'check', 'url' => ['../../frontend/web/marca']],
                                    ['label' => 'Modelo', 'icon' => 'check', 'url' => ['../../frontend/web/modelo']],
                                    ['label' => 'Tipo de Vehículo', 'icon' => 'check', 'url' => ['../../frontend/web/tipo-vehiculo']],
                                    ['label' => 'Cliente', 'icon' => 'check', 'url' => ['../../frontend/web/cliente']],
                                    ['label' => 'Proveedor', 'icon' => 'check', 'url' => ['../../frontend/web/site/proveedor']],
                                    ['label' => 'Alianza', 'icon' => 'check', 'url' => ['../../frontend/web/alianza']],
                            ],];
            $menuItems[] = ['label' => 'Vehículo', 'icon' => 'car', 'url' => ['../../frontend/web/vehiculo']];
            $menuItems[] = ['label' => 'Generar Orden', 'icon' => 'gear', 'url' => ['../../frontend/web/transaccion']];
            $menuItems[] = ['label' => 'Almacen', 'icon' => 'inbox', 'url' => ['../../frontend/web/transaccion']];
            $menuItems[] = ['label' => 'Taller', 'icon' => 'wrench', 'url' => ['../../frontend/web/transaccion']];
            $menuItems[] = ['label' => 'Caja', 'icon' => 'credit-card', 'url' => ['../../frontend/web/transaccion']];
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

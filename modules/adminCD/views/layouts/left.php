<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->getUser()->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <?php
//        echo \webvimark\modules\UserManagement\components\GhostMenu::widget([
//            'encodeLabels'=>false,
//            'activateParents'=>true,
//            'options' => ['class' => 'sidebar-menu'],
//            'items' => [
//                [
//                    'label' => 'Backend routes',
//                    'items'=>\app\modules\UserManagement\UserManagementModule::menuItems()
//                ],
//                [
//                    'label' => 'Frontend routes',
//                    'items'=>[
//                        ['label'=>'Login', 'url'=>['/user-management/auth/login']],
//                        ['label'=>'Logout', 'url'=>['/user-management/auth/logout']],
//                        ['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
//                        ['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
//                        ['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
//                        ['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
//                    ],
//                ],
//            ],
//        ]);
        ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    /* ------ UserManagement ------ */
                    ['label' => 'User Management', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Backend routes',
                        'items'=>app\modules\UserManagement\UserManagementModule::menuItems()
                    ],
                    [
                        'label' => 'Frontend routes',
                        'items'=>[
                            ['label'=>'Login', 'url'=>['/user-management/auth/login']],
                            ['label'=>'Logout', 'url'=>['/user-management/auth/logout']],
                            ['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
                            ['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
                            ['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
                            ['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
                        ],
                    ],
                    /* ------ UserManagement ------ */

                    /* -------- App -------- */
                    ['label' => 'AdminCD', 'options' => ['class' => 'header']],
                    ['label' => 'Product', 'icon' => 'barcode', 'url' => ['/adminCD/product']],
                    ['label' => 'Product Category', 'icon' => 'bars', 'url' => ['/adminCD/category']],
                    ['label' => 'Order', 'icon' => 'tags', 'url' => ['/adminCD/order']],
                    ['label' => 'Warehousing', 'icon' => 'truck', 'url' => ['/adminCD/warehousing']],
                    ['label' => 'Unit', 'icon' => 'money', 'url' => ['/adminCD/unit']],

                    /* -------- App -------- */

                    /* ------ Tools ------- */
                    ['label' => 'Yii2 Tools', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    /* ------ Tools ------- */

                ],
            ]
        ) ?>

    </section>

</aside>

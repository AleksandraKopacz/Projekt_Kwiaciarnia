<?php
/* Smarty version 4.3.0, created on 2023-06-20 21:52:48
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6492039055f861_97218201',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '0813da612dd471bba8e3d9c5ea44d673e5e08eef' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\templates\\main.html',
                    1 => 1687290766,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6492039055f861_97218201(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?php echo(($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null) === null || $tmp === '' ? "Tytuł" ?? null : $tmp); ?>
            </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- ICON -->
            <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/favicon.png">
            <!-- FONTS -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- BOOTSTRAP -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                  crossorigin="anonymous">
            <!-- CSS -->
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/css/styles.css">
        </head>
        <body>
        <!-- NAV -->
        <nav class="navbar navbar-expand-sm sticky-top" id="line"></nav>
        <nav class="navbar navbar-expand-sm sticky-top" id="mainmenu">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/logo.png" alt="logo" width="200" height="125">
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar"
                        aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="n_bar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
">Strona główna</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Oferta
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/bouquet">Bukiety</a></li>
                                <li><a class="dropdown-item"
                                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/flowers">Skomponuj swój własny bukiet</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <?php if ($_smarty_tpl->tpl_vars['conf']->value->roles == '0') { ?>
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/order">Zamów kwiaty</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['conf']->value->roles == '1') { ?>
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/edit">Edytuj bazę danych</a>
                            <?php } else { ?>
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/loginShow">Zamów kwiaty</a>
                            <?php } ?>
                        </li>
                    </ul>
                    <span class="navbar-text">
        <i class="fa fa-phone"></i> +48 724 822 911
      </span>
                </div>
            </div>
        </nav>

        <!-- CONTENT -->
        <main id="main">
            <?php
            $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14937173236492039055c079_45652410', 'content');
            ?>

        </main>

        <!-- FOOTER -->
        <footer id="aboutusfooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h5><b>INFORMACJE</b></h5>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
" id="flinks">Strona główna</a></p>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/bouquet" id="flinks">Bukiety</a></p>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/flowers" id="flinks">Skomponuj swój własny bukiet</a></p>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/loginShow" id="flinks">Zamów kwiaty</a></p>
                    </div>
                    <div class="col-sm">
                        <h5><b>GODZINY OTWARCIA</b></h5>
                        <p><b>Poniedziałek – piątek:</b> 9:00-20:00</p>
                        <p><b>Sobota:</b> 9:00-18:00</p>
                        <p><b>Niedziela:</b> 9:00-16:00</p>
                    </div>
                    <div class="col-sm">
                        <h5><b>KWIACIARNIA LAWENDOWE POLE</b></h5>
                        <p>Wyszyńskiego 71</p>
                        <p>42-600 Tarnowskie Góry</p>
                        <p>+48 724 822 911</p>
                        <p>lawendowepole@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>
        <footer id="creditsfooter" class="footer">
            <p class="text-end">Design: Aleksandra Kopacz</p>
        </footer>
        <!-- JS -->
        <?php echo '<script'; ?>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"><?php echo '</script'; ?>
        >
        </body>
        </html>
    <?php }

    /* {block 'content'} */

    class Block_14937173236492039055c079_45652410 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_14937173236492039055c079_45652410',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            Treść <?php
        }
    }
    /* {/block 'content'} */
}

<?php
/* Smarty version 4.3.0, created on 2023-06-26 12:05:13
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_649962d9324454_51463965',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '0813da612dd471bba8e3d9c5ea44d673e5e08eef' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\templates\\main.html',
                    1 => 1687773911,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_649962d9324454_51463965(Smarty_Internal_Template $_smarty_tpl)
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
            <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/favicon.png" rel="shortcut icon">
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
            <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/css/styles.css" rel="stylesheet">
        </head>
        <body class="d-flex flex-column min-vh-100">
        <!-- NAV -->
        <nav class="navbar navbar-expand-sm sticky-top" id="line"></nav>
        <nav class="navbar navbar-expand-sm sticky-top" id="mainmenu">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
">
                    <img alt="logo" height="125" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/logo.png" width="200">
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
                        <li>
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/bouquet">Bukiety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/order">Zamów kwiaty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/edit">Narzędzia dla administratora</a>
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
            $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075595668649962d93217f5_65036343', 'content');
            ?>

        </main>

        <!-- FOOTER -->
        <footer class="mt-auto">
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
            <footer class="footer" id="creditsfooter">
                <p class="text-end">Design: Aleksandra Kopacz</p>
            </footer>
        </footer>
        <!-- JS -->
        <?php echo '<script'; ?>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"><?php echo '</script'; ?>
        >
        <?php echo '<script'; ?>
        src="https://code.jquery.com/jquery-3.7.0.min.js"><?php echo '</script'; ?>
        >
        <?php echo '<script'; ?>
        src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
        /assets/js/functions.js"><?php echo '</script'; ?>
        >
        </body>
        </html>
    <?php }

    /* {block 'content'} */

    class Block_2075595668649962d93217f5_65036343 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_2075595668649962d93217f5_65036343',
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

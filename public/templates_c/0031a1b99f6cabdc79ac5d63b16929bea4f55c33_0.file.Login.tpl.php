<?php
/* Smarty version 4.3.0, created on 2023-06-20 23:29:27
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64921a3708c008_07119665',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '0031a1b99f6cabdc79ac5d63b16929bea4f55c33' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Login.tpl',
                    1 => 1687296565,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_64921a3708c008_07119665(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174543947364921a37077007_46950237', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_174543947364921a37077007_46950237 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_174543947364921a37077007_46950237',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
login" method="post">
                            <div class="form-outline mb-4">
                                <label for="login" class="form-label">E-mail</label>
                                <input type="email" id="login" class="form-control" name="login"
                                       value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login; ?>
" required>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="pass" class="form-label">Hasło</label>
                                <input type="password" id="pass" class="form-control" name="pass" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Zaloguj się" id="submitFilterButton">
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/register" id="flinks">Zarejestruj się</a></p>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) { ?>
            <div>
                <ul>
                    <?php
                    $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
                    $_smarty_tpl->tpl_vars['msg']->do_else = true;
                    if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
                        $_smarty_tpl->tpl_vars['msg']->do_else = false;
                        ?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text; ?>
                        </li>
                        <?php
                    }
                    $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                </ul>
            </div>
        <?php }
        }
    }
    /* {/block "content"} */
}

<?php
/* Smarty version 4.3.0, created on 2023-06-21 22:28:04
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64935d54243823_48576923',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'a70f0ccaf4de8885bbefbba123d3c16efae7e9bd' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Register.tpl',
                    1 => 1687379282,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_64935d54243823_48576923(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147197689764935d54232400_18583030', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_147197689764935d54232400_18583030 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_147197689764935d54232400_18583030',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <h1>Zarejestruj się</h1>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
register" method="post">
                            <div class="form-outline mb-4">
                                <label for="login" class="form-label">E-mail</label>
                                <input type="email" id="login" class="form-control user-control" name="login"
                                       value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login; ?>
"
                                       required>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="pass" class="form-label">Hasło</label>
                                <input type="password" id="pass" class="form-control user-control" name="pass" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Zarejestruj się" id="submitFilterButton">
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/loginShow" id="flinks">Zaloguj się</a></p>
                                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) { ?>
                                    <div>
                                        <ul id="errorMsg">
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
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    /* {/block "content"} */
}

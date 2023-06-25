<?php
/* Smarty version 4.3.0, created on 2023-06-25 13:05:05
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64981f61aee442_37275155',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '85aca548643119e0f1eb9ec50700bae96379396f' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Msg.tpl',
                    1 => 1687691104,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_64981f61aee442_37275155(Smarty_Internal_Template $_smarty_tpl)
    {
        if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) { ?>
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
        <?php }
    }
}

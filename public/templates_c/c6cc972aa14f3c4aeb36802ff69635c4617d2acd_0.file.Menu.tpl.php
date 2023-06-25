<?php
/* Smarty version 4.3.0, created on 2023-06-25 16:38:53
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6498517de0f2b2_74677124',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'c6cc972aa14f3c4aeb36802ff69635c4617d2acd' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Menu.tpl',
                    1 => 1687703931,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6498517de0f2b2_74677124(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
        <div class="col-2">
        <ul><h2>MENU</h2>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/edit" id="flinks">Przejrzyj bazę danych</a></li>
            <li>Dodaj dane</li>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/addUslugiShow" id="flinks">Usługi</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/addUzytkownikShow" id="flinks">Użytkownik</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/addZamowienieShow" id="flinks">Zamówienie</a></li>
            </ul>
            <li>Usuń dane</li>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/deleteUslugiShow" id="flinks">Usługi</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/deleteUzytkownikShow" id="flinks">Użytkownik</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/deleteZamowienieShow" id="flinks">Zamówienie</a></li>
            </ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/logout" id="flinks">Wyloguj się</a></li>
        </ul>
        </div><?php }
}

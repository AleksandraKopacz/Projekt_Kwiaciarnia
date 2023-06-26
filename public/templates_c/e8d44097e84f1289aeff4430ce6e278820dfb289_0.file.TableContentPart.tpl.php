<?php
/* Smarty version 4.3.0, created on 2023-06-26 16:26:47
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\TableContentPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499a027db8ec5_75620395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d44097e84f1289aeff4430ce6e278820dfb289' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\TableContentPart.tpl',
      1 => 1687789605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499a027db8ec5_75620395 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-sm table-hover" id="content">
    <thead>
    <!-- USLUGI -->
    <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'uslugi') {?>
    <tr>
        <th>id_uslugi</th>
        <th>img</th>
        <th>usluga</th>
        <th>opis</th>
        <th>cena_uslugi</th>
        <th>typ</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["id_uslugi"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["img"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["usluga"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["opis"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["cena_uslugi"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["typ"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <!-- UZYTKOWNIK -->
    <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'uzytkownik') {?>
    <tr>
        <th>id_uzytkownik</th>
        <th>email</th>
        <th>haslo</th>
        <th>rola</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["id_uzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["haslo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["rola"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <!-- ZAMOWIENIA -->
    <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'zamowienie') {?>
    <tr>
        <th>id_zamowienie</th>
        <th>szczegoly</th>
        <th>id_uzytkownik</th>
        <th>email</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["id_zamowienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["szczegoly"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["id_uzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </tbody>
</table><?php }
}

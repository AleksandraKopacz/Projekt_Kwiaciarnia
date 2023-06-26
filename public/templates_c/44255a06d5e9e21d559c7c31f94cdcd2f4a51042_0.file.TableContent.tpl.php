<?php
/* Smarty version 4.3.0, created on 2023-06-26 16:41:33
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\TableContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499a39da78247_75296261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44255a06d5e9e21d559c7c31f94cdcd2f4a51042' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\TableContent.tpl',
      1 => 1687790492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Menu.tpl' => 1,
    'file:TableContentPart.tpl' => 1,
  ),
),false)) {
function content_6499a39da78247_75296261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18563933376499a39da6e691_88949669', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block "content"} */
class Block_18563933376499a39da6e691_88949669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18563933376499a39da6e691_88949669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container text-center">
        <div class="row align-items-start">
            <?php $_smarty_tpl->_subTemplateRender("file:Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <h1>Przejrzyj bazę danych</h1>
                <form id="search-form"
                      onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
table', 'tableContent'); return false;">
                    <select class="user-control" name="tableName" value="tableName">
                        <option value="uslugi">Usługi</option>
                        <option value="uzytkownik">Użytkownik</option>
                        <option value="zamowienie">Zamówienie</option>
                    </select>
                    <label for="filter">&#x1F50E;&#xFE0E;</label>
                    <input class="user-control" type="text" name="filter" id="filter" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->filter;?>
" />
                    <input type="submit" value="Pokaż tabelę" id="submitFilterButton">
                </form>
                <div id="tableContent">
                    <?php $_smarty_tpl->_subTemplateRender("file:TableContentPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}

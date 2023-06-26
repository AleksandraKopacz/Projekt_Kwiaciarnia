<?php
/* Smarty version 4.3.0, created on 2023-06-26 16:55:39
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Bouquet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499a6eb370888_45233514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07d5f666e72d536677d3048f207403f4bf7a462a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Bouquet.tpl',
      1 => 1687791336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499a6eb370888_45233514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3796092286499a6eb35df12_11746530', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_3796092286499a6eb35df12_11746530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3796092286499a6eb35df12_11746530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
bouquet" method="post">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-sm-5">
                    <label class="form-label" for="priceTo">Cena do:</label>
                    <input class="form-control" name="priceTo" id="priceTo" type="number"
                           value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->to;?>
"
                           min="<?php echo $_smarty_tpl->tpl_vars['minPrice']->value;?>
" max="<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value;?>
">
                </div>
                <div class="col-sm-5">
                    <label class="form-label" for="type">Typ:</label>
                    <select name="type" id="type" class="form-select" aria-label="Wybierz typ usługi">
                        <option selected value="%">Wszystko</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value["typ"];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value["typ"];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="col-sm-2" id="submitFilter">
                    <input type="submit" value="Filtruj" id="submitFilterButton">
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usluga']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                <div class="col-3"><p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/flowers/<?php echo $_smarty_tpl->tpl_vars['u']->value["img"];?>
" alt="bukiet" class="img-fluid"></p><p><?php echo $_smarty_tpl->tpl_vars['u']->value["usluga"];?>
</p><p><?php echo $_smarty_tpl->tpl_vars['u']->value["opis"];?>
</p><p><b><?php echo $_smarty_tpl->tpl_vars['u']->value["cena_uslugi"];?>
 zł</b></p></div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}

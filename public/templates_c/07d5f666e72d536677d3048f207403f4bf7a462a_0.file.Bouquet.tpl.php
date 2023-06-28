<?php
/* Smarty version 4.3.0, created on 2023-06-28 20:54:26
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Bouquet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649c81e20fd4c4_05283632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07d5f666e72d536677d3048f207403f4bf7a462a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Bouquet.tpl',
      1 => 1687978462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c81e20fd4c4_05283632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1470518290649c81e20e22a4_83754838', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1470518290649c81e20e22a4_83754838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1470518290649c81e20e22a4_83754838',
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
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['maxPages']->value+1 - ("1") : "1"-($_smarty_tpl->tpl_vars['maxPages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = "1", $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                <li class="page-item"><a style="border-color: #E0C2F2;" id="flinks" class="page-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bouquet",'p'=>((string)($_smarty_tpl->tpl_vars['page']->value-1))),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            <?php }
}
?>
        </ul>
    </nav>
<?php
}
}
/* {/block 'content'} */
}

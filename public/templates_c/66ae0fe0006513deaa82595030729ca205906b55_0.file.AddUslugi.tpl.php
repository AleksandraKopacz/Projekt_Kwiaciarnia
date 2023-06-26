<?php
/* Smarty version 4.3.0, created on 2023-06-26 12:43:56
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\AddUslugi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64996becec43c6_82244779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ae0fe0006513deaa82595030729ca205906b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\AddUslugi.tpl',
      1 => 1687711386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Menu.tpl' => 1,
    'file:Msg.tpl' => 1,
  ),
),false)) {
function content_64996becec43c6_82244779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65490210264996beceb93d1_18456418', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block "content"} */
class Block_65490210264996beceb93d1_18456418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65490210264996beceb93d1_18456418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row align-items-start">
            <?php $_smarty_tpl->_subTemplateRender("file:Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1>Dodaj usługę</h1>
                            <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addUslugi" method="post">
                                <div class="form-outline mb-4">
                                    <label for="img" class="form-label">img</label>
                                    <input type="text" id="img" class="form-control user-control" name="img"
                                           value="<?php echo $_smarty_tpl->tpl_vars['form']->value->img;?>
"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="usluga" class="form-label">usluga</label>
                                    <input type="text" id="usluga" class="form-control user-control" name="usluga"
                                           value="<?php echo $_smarty_tpl->tpl_vars['form']->value->usluga;?>
"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="opis" class="form-label">opis</label>
                                    <input type="text" id="opis" class="form-control user-control" name="opis"
                                           value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opis;?>
"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="cena_uslugi" class="form-label">cena_uslugi</label>
                                    <input type="number" id="cena_uslugi" class="form-control user-control"
                                           name="cena_uslugi" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena_uslugi;?>
"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="typ" class="form-label">typ</label>
                                    <input type="text" id="typ" class="form-control user-control" name="typ"
                                           value="<?php echo $_smarty_tpl->tpl_vars['form']->value->typ;?>
"
                                           required>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Dodaj" id="submitFilterButton">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}

<?php
/* Smarty version 4.3.0, created on 2023-06-26 16:30:12
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499a0f423fee4_71028120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113e3c3775d70c7390a17e6f81bb1f75037fc8c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Order.tpl',
      1 => 1687789802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Msg.tpl' => 1,
  ),
),false)) {
function content_6499a0f423fee4_71028120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13172747236499a0f4235e20_15694857', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block "content"} */
class Block_13172747236499a0f4235e20_15694857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13172747236499a0f4235e20_15694857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <h1>Złóż zamówienie</h1>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
order" method="post">
                    <div class="form-outline mb-4">
                        <label for="login" class="form-label">E-mail</label>
                        <input type="email" id="login" readonly class="form-control-plaintext user-control" name="login"
                               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
"
                               disabled>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="details" class="form-label">Szczegóły zamówienia</label>
                        <textarea id="details" class="form-control user-control" name="details"
                                  rows="5"><?php echo $_smarty_tpl->tpl_vars['form']->value->details;?>
</textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Zamów" id="submitFilterButton">
                        <input type="submit" value="Wyloguj się" id="submitFilterButton"
                               formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">
                        <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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

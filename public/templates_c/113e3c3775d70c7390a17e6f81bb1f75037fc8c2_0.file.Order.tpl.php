<?php
/* Smarty version 4.3.0, created on 2023-06-20 00:11:24
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6490d28c24a554_04099346',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '113e3c3775d70c7390a17e6f81bb1f75037fc8c2' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Order.tpl',
                    1 => 1687212644,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6490d28c24a554_04099346(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11443692086490d28c244084_71294546', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_11443692086490d28c244084_71294546 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_11443692086490d28c244084_71294546',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <h1>Złóż zamówienie</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
order" method="post">
                <input type="submit" value="Filtruj" id="submitFilterButton">
                <input type="submit" value="Wyloguj się" id="submitFilterButton"
                       formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
logout">
            </form>

            <?php
        }
    }
    /* {/block "content"} */
}

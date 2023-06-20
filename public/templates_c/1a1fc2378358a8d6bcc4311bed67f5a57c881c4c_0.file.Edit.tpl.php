<?php
/* Smarty version 4.3.0, created on 2023-06-20 00:10:51
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6490d26bb57c36_11231098',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '1a1fc2378358a8d6bcc4311bed67f5a57c881c4c' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Edit.tpl',
                    1 => 1687212644,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6490d26bb57c36_11231098(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12112426586490d26bb512d4_04642311', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_12112426586490d26bb512d4_04642311 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_12112426586490d26bb512d4_04642311',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <h1>Edytuj bazę danych</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
edit" method="post">
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

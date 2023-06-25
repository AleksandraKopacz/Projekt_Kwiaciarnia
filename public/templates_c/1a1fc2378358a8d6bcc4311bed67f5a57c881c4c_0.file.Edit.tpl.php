<?php
/* Smarty version 4.3.0, created on 2023-06-22 18:04:04
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\EditUslugi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_649470f47feec4_27620760',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '1a1fc2378358a8d6bcc4311bed67f5a57c881c4c' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\EditUslugi.tpl',
                    1 => 1687449837,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:TableContent.tpl' => 1,
        ),
), false)) {
    function content_649470f47feec4_27620760(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226688591649470f474fac4_71192815', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_226688591649470f474fac4_71192815 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_226688591649470f474fac4_71192815',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col-2">
                        <p>MENU</p>
                        <p>Przejrzyj bazę danych</p>
                        <p>Dodaj dane</p>
                        <p>Usuń dane</p>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root; ?>
/logout" id="flinks">Wyloguj się</a></p>
                    </div>
                    <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                        <?php $_smarty_tpl->_subTemplateRender("file:TableContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    /* {/block "content"} */
}

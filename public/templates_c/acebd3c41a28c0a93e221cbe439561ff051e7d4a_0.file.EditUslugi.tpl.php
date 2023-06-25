<?php
/* Smarty version 4.3.0, created on 2023-06-25 14:47:49
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\EditUslugi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64983775dba690_08598479',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'acebd3c41a28c0a93e221cbe439561ff051e7d4a' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\EditUslugi.tpl',
                    1 => 1687697268,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Menu.tpl' => 1,
        ),
), false)) {
    function content_64983775dba690_08598479(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12470050764983775db0867_77907884', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_12470050764983775db0867_77907884 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_12470050764983775db0867_77907884',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div class="container text-center">
                <div class="row align-items-start">
                    <?php $_smarty_tpl->_subTemplateRender("file:Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                    ?>
                    <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
editSave" method="post">
                            <input type="text" id="img" name="img"
                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->img; ?>
">
                            <input type="text" id="usluga" name="usluga"
                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->usluga; ?>
">
                            <textarea id="opis" name="opis"><?php echo $_smarty_tpl->tpl_vars['form']->value->opis; ?>
</textarea>
                            <input type="number" id="cena_uslugi" name="cena_uslugi"
                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena_uslugi; ?>
">
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    /* {/block "content"} */
}

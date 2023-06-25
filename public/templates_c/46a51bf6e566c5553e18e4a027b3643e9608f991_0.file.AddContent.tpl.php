<?php
/* Smarty version 4.3.0, created on 2023-06-25 13:28:51
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\AddContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_649824f3a7a6a6_69125856',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '46a51bf6e566c5553e18e4a027b3643e9608f991' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\AddContent.tpl',
                    1 => 1687692528,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Menu.tpl' => 1,
            'file:AddContentPart.tpl' => 1,
        ),
), false)) {
    function content_649824f3a7a6a6_69125856(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_820794817649824f3a6f5e8_26429549', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_820794817649824f3a6f5e8_26429549 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_820794817649824f3a6f5e8_26429549',
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
                        <h1>Dodaj do bazy danych</h1>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
showAdd" method="post">
                            <select name="tableName" value="tableName">
                                <option value="uslugi">Usługi</option>
                                <option value="uzytkownik">Użytkownik</option>
                                <option value="zamowienie">Zamówienie</option>
                            </select>
                            <br/><input type="submit" value="Wybierz" id="submitFilterButton">
                        </form>
                        <div id="tableContent">
                            <?php $_smarty_tpl->_subTemplateRender("file:AddContentPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php
/* Smarty version 4.3.0, created on 2023-06-25 19:03:33
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\DeleteZamowienie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64987365c240c3_45285558',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'f2202bdf8a7592bfd69d629a8f6bdd1a15e43832' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\DeleteZamowienie.tpl',
                    1 => 1687712611,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Menu.tpl' => 1,
            'file:Msg.tpl' => 1,
        ),
), false)) {
    function content_64987365c240c3_45285558(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28465247464987365c1b213_24291930', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_28465247464987365c1b213_24291930 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_28465247464987365c1b213_24291930',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div class="container">
                <div class="row align-items-start">
                    <?php $_smarty_tpl->_subTemplateRender("file:Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                    ?>
                    <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                        <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <h1>Usuń zamówienie</h1>
                                    <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                                    ?>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
deleteZamowienie" method="post">
                                        <div class="form-outline mb-4">
                                            <label for="id_zamowienie" class="form-label">id_zamowienie</label>
                                            <input type="number" id="id_zamowienie" class="form-control user-control"
                                                   name="id_zamowienie"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_zamowienie; ?>
"
                                                   required>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="Usuń" id="submitFilterButton">
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

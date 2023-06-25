<?php
/* Smarty version 4.3.0, created on 2023-06-25 18:56:14
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\AddZamowienie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_649871ae5d6de1_34530099',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'a3c9bb5a18d6fdf447e8f15d840999d950c5a11b' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\AddZamowienie.tpl',
                    1 => 1687712172,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Menu.tpl' => 1,
            'file:Msg.tpl' => 1,
        ),
), false)) {
    function content_649871ae5d6de1_34530099(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1292325903649871ae5cdb47_39787322', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_1292325903649871ae5cdb47_39787322 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_1292325903649871ae5cdb47_39787322',
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
                                    <h1>Dodaj zamówienie</h1>
                                    <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                                    ?>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
addZamowienie" method="post">
                                        <div class="form-outline mb-4">
                                            <label for="szczegoly" class="form-label">szczegoly</label>
                                            <input type="text" id="szczegoly" class="form-control user-control"
                                                   name="szczegoly"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->szczegoly; ?>
"
                                                   required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="id_uzytkownik" class="form-label">id_uzytkownik</label>
                                            <input type="number" id="id_uzytkownik" class="form-control user-control"
                                                   name="id_uzytkownik"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_uzytkownik; ?>
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

<?php
/* Smarty version 4.3.0, created on 2023-06-25 18:43:35
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\DeleteUzytkownik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64986eb7234b76_64992638',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '1df269e0a517b085f16c48ce10ae722324503a74' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\DeleteUzytkownik.tpl',
                    1 => 1687711386,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Menu.tpl' => 1,
            'file:Msg.tpl' => 1,
        ),
), false)) {
    function content_64986eb7234b76_64992638(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183864231764986eb7229ec8_23231631', "content");
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block "content"} */

    class Block_183864231764986eb7229ec8_23231631 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_183864231764986eb7229ec8_23231631',
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
                                    <h1>Usuń użytkownika</h1>
                                    <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                                    ?>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
deleteUzytkownik" method="post">
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

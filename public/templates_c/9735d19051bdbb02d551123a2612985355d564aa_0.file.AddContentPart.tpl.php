<?php
/* Smarty version 4.3.0, created on 2023-06-25 13:27:20
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\AddContentPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_649824984f09a2_47862771',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '9735d19051bdbb02d551123a2612985355d564aa' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\AddContentPart.tpl',
                    1 => 1687692438,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(
            'file:Msg.tpl' => 1,
        ),
), false)) {
    function content_649824984f09a2_47862771(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
        <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'uslugi') { ?>

                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'uzytkownik') { ?>

                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['form']->value->tableName == 'zamowienie') { ?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
addToZamowienie" method="post">
                        <div class="form-outline mb-4">
                            <label for="details" class="form-label">szczegoly</label>
                            <textarea id="details" class="form-control user-control" name="details"
                                      rows="5"><?php echo $_smarty_tpl->tpl_vars['form']->value->details; ?>
</textarea>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="id_user" class="form-label">id_uzytkownik</label>
                            <input type="number" min="<?php echo $_smarty_tpl->tpl_vars['minValue']->value; ?>
" max="<?php echo $_smarty_tpl->tpl_vars['maxValue']->value; ?>
" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user; ?>
" id="id_user" name="id_user" class="form-control user-control"
                                   required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Dodaj do bazy danych" id="submitFilterButton">
                        </div>
                    </form>
                <?php } ?>
                <div id="msg">
                    <?php $_smarty_tpl->_subTemplateRender("file:Msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
                    ?>
                </div>
            </div>
        </div>
        </div><?php }
}

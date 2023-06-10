<?php
/* Smarty version 4.3.0, created on 2023-06-11 01:13:26
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Bouquet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64850396d008a4_01642654',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '07d5f666e72d536677d3048f207403f4bf7a462a' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Bouquet.tpl',
                    1 => 1686438609,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_64850396d008a4_01642654(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143163244464850396cefc96_59556098', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_143163244464850396cefc96_59556098 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_143163244464850396cefc96_59556098',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
bouquet" method="post">
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col-sm">
                            <label for="priceTo">Cena do:</label>
                            <input name="priceTo" id="priceTo" type="number"
                                   placeholder="<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value; ?>
" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->to; ?>
" min="<?php echo $_smarty_tpl->tpl_vars['minPrice']->value; ?>
" max="<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value; ?>
">
                        </div>
                        <div class="col-sm">
                            <label for="type">Typ:</label>
                            <select name="type" id="type">
                                <option selected value="%">Wszystko</option>
                                <?php
                                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 't');
                                $_smarty_tpl->tpl_vars['t']->do_else = true;
                                if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
                                    $_smarty_tpl->tpl_vars['t']->do_else = false;
                                    ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value["typ"]; ?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value["typ"]; ?>
                                    </option>
                                    <?php
                                }
                                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                            </select>
                        </div>
                        <div class="col-sm">
                            <input type="submit" value="Filtruj">
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="row">
                    <?php
                    $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usluga']->value, 'u');
                    $_smarty_tpl->tpl_vars['u']->do_else = true;
                    if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
                        $_smarty_tpl->tpl_vars['u']->do_else = false;
                        ?>
                        <div class="col-3"><p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_assets; ?>
/flowers/<?php echo $_smarty_tpl->tpl_vars['u']->value["img"]; ?>
" alt="bukiet" class="img-fluid"></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['u']->value["usluga"]; ?>
                            </p>
                            <p><?php echo $_smarty_tpl->tpl_vars['u']->value["opis"]; ?>
                            </p>
                            <p><b><?php echo $_smarty_tpl->tpl_vars['u']->value["cena_uslugi"]; ?>
                                    zł</b></p></div>
                        <?php
                    }
                    $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                </div>
            </div>
            <?php
        }
    }
    /* {/block 'content'} */
}

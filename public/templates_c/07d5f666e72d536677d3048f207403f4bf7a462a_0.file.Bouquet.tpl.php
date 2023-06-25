<?php
/* Smarty version 4.3.0, created on 2023-06-25 21:55:48
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Bouquet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_64989bc4b3d1b7_12616080',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '07d5f666e72d536677d3048f207403f4bf7a462a' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Bouquet.tpl',
                    1 => 1687722946,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_64989bc4b3d1b7_12616080(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176328545264989bc4b32316_92796798', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_176328545264989bc4b32316_92796798 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_176328545264989bc4b32316_92796798',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
bouquet" method="post">
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col-sm-5">
                            <label class="form-label" for="priceTo">Cena do:</label>
                            <input class="form-control" name="priceTo" id="priceTo" type="number"
                                   value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->to; ?>
"
                                   min="<?php echo $_smarty_tpl->tpl_vars['minPrice']->value; ?>
" max="<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value; ?>
">
                        </div>
                        <div class="col-sm-5">
                            <label class="form-label" for="type">Typ:</label>
                            <select name="type" id="type" class="form-select" aria-label="Wybierz typ usługi">
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
                        <div class="col-sm-2" id="submitFilter">
                            <input type="submit" value="Filtruj" id="submitFilterButton">
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
                        $_smarty_tpl->tpl_vars['p']->step = 1;
                        $_smarty_tpl->tpl_vars['p']->total = (int)ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pageNumber']->value + 1 - (1) : 1 - ($_smarty_tpl->tpl_vars['pageNumber']->value) + 1) / abs($_smarty_tpl->tpl_vars['p']->step));
                        if ($_smarty_tpl->tpl_vars['p']->total > 0) {
                            for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1; $_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total; $_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
                                $_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration === 1;
                                $_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total; ?>
                                <div class="col">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['p']->value; ?>
" name="page" id="submitFilterButton">
                                </div>
                            <?php }
                        }
                        ?>
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
                        <div class="col-3"><p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/flowers/<?php echo $_smarty_tpl->tpl_vars['u']->value["img"]; ?>
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

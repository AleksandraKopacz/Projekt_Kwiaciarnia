<?php
/* Smarty version 4.3.0, created on 2023-06-24 15:50:41
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Flowers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6496f4b1e28939_74132207',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '59029549bfa9fbb07d1aa669d9efa8acd712c136' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Flowers.tpl',
                    1 => 1687614636,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6496f4b1e28939_74132207(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_818680086496f4b1e15674_52059526', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_818680086496f4b1e15674_52059526 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_818680086496f4b1e15674_52059526',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>


            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
flowers" method="post">
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col-sm-5">
                            <label class="form-label" for="priceTo">Cena do:</label>
                            <input class="form-control" name="priceTo" id="priceTo" type="number"
                                   placeholder="<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value; ?>
"
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
                                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['symbole']->value, 's');
                                $_smarty_tpl->tpl_vars['s']->do_else = true;
                                if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
                                    $_smarty_tpl->tpl_vars['s']->do_else = false;
                                    ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value["id_symbole"]; ?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value["id_symbole"];
                                        echo $_smarty_tpl->tpl_vars['s']->value["symbol"]; ?>
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
                </div>
            </form>
            <div class="container">
                <div class="row">
                    <?php
                    $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kwiaty']->value, 'k');
                    $_smarty_tpl->tpl_vars['k']->do_else = true;
                    if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
                        $_smarty_tpl->tpl_vars['k']->do_else = false;
                        ?>
                        <div class="col-3"><p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/flowers/<?php echo $_smarty_tpl->tpl_vars['k']->value["img"]; ?>
" alt="bukiet" class="img-fluid"></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['k']->value["kwiat"]; ?>
                            </p>
                            <p><?php echo $_smarty_tpl->tpl_vars['k']->value["kolory"]; ?>
                            </p>
                            <p><?php echo $_smarty_tpl->tpl_vars['k']->value["cena"]; ?>
                                zł</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['k']->value["id_symbole"]; ?>
                            </p></div>
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

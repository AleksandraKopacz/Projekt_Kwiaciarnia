<?php
/* Smarty version 4.3.0, created on 2023-06-10 02:19:59
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Bouquet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6483c1af111bb8_18816221',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'f57df852e84ff19d74071f6247fb328a490f0582' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Bouquet.tpl',
                    1 => 1686356396,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6483c1af111bb8_18816221(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17108125206483c1af0fd545_12603457', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_17108125206483c1af0fd545_12603457 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_17108125206483c1af0fd545_12603457',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <!-- <table id="tab_results">
        <thead>
        <tr>
            <th>Obraz</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Opis</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usluga']->value, 'u');
            $_smarty_tpl->tpl_vars['u']->do_else = true;
            if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
                $_smarty_tpl->tpl_vars['u']->do_else = false;
                ?>
            <tr><td><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_assets; ?>
/flowers/<?php echo $_smarty_tpl->tpl_vars['u']->value["img"]; ?>
" alt="bukiet" class="img-fluid"></td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["usluga"]; ?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["opis"]; ?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["cena_uslugi"]; ?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["typ"]; ?>
</td></tr>
        <?php
            }
            $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
        </tbody>
    </table> -->
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

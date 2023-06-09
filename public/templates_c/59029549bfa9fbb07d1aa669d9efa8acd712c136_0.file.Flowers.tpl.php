<?php
/* Smarty version 4.3.0, created on 2023-06-05 22:08:49
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Flowers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_647e40d1525d69_17522629',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '59029549bfa9fbb07d1aa669d9efa8acd712c136' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Flowers.tpl',
                    1 => 1685995727,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_647e40d1525d69_17522629(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_975085360647e40d1515c91_60174809', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_975085360647e40d1515c91_60174809 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_975085360647e40d1515c91_60174809',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>


            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root; ?>
flowers" method="post">

                <label for="priceFrom">Cena od:</label>
                <input id="priceFrom" type="number" name="priceFrom"
                       value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->from; ?>
" onchange="document.getElementById('priceTo').min=this.value;" min="0"/><br/>

                <label for="priceTo">Cena do:</label>
                <input id="priceTo" type="number" name="priceTo" min="document.getElementById('amount').value"
                       value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->to; ?>
"/><br/>

                <button style="background-color: #f7ccd5;" type="submit">Filtruj</button>

            </form>

            <table id="tab_results">
                <thead>
                <tr>
                    <th>Kwiaty</th>
                    <th>Kolory</th>
                    <th>Cena za sztukę</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kwiaty']->value, 'k');
                $_smarty_tpl->tpl_vars['k']->do_else = true;
                if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
                    $_smarty_tpl->tpl_vars['k']->do_else = false;
                    ?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['k']->value["kwiat"]; ?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['k']->value["kolory"]; ?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['k']->value["cena"]; ?>
                        </td>
                    </tr>
                    <?php
                }
                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1); ?>
                </tbody>
            </table>
            <?php
        }
    }
    /* {/block 'content'} */
}

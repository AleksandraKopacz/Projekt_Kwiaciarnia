<?php
/* Smarty version 4.3.0, created on 2023-06-20 20:52:15
  from 'C:\xampp\htdocs\Kwiaciarnia\app\views\Homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '4.3.0',
    'unifunc' => 'content_6491f55f8a2cf8_67223211',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            'cd00ca0a0f02bbd34a90e3f2550f66b45f7fb57c' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\Kwiaciarnia\\app\\views\\Homepage.tpl',
                    1 => 1687287133,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_6491f55f8a2cf8_67223211(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19074336076491f55f89b5b0_55914091', 'content');
        $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
    }

    /* {block 'content'} */

    class Block_19074336076491f55f89b5b0_55914091 extends Smarty_Internal_Block
    {
        public $subBlocks = array(
            'content' =>
                array(
                    0 => 'Block_19074336076491f55f89b5b0_55914091',
                ),
        );

        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

            <div id="mainimage">
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/mainimage.jpg" class="img-fluid" alt="Responsive image">
                <!--<p class="text-end" id="imagecredits">"Ogród artysty w Giverny" Claude Monet</p>-->
            </div>
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <h2>Witamy na Lawendowym Polu</h2>
                    </div>
                    <div class="col">
                        <p>Po co chodzimy do kwiaciarni? Czasami, by kupić kwiaty. Najczęściej jednak po to, by sprawić
                            komuś
                            radość, „opowiedzieć” o uczuciach.
                            Szukasz czegoś wyjątkowego? Przyjdź, pomożemy. Na okrągłą rocznicę ślubu przygotujemy tort
                            ze
                            świeżych kwiatów, a na urodziny bukiet w kaloszu lub na kołpaku. Artystycznie zapakujemy
                            wymarzony
                            prezent i udekorujemy kwiatami salę na przyjęcie weselne. Tworzymy z fantazją, mamy mnóstwo
                            pomysłów
                            i duże wyczucie oczekiwań klienta.</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <p>Naszą historię napisała pasja i miłość do kwiatów. Kwiaciarnia Lawendowe Pole została
                                założona
                                przez osobę, która kocha to, co robi. Nasi floryści są pozytywni, otwarci, kreatywni i
                                doświadczeni. Mają duże wyczucie smaku i ogromną wiedzę na temat kwiatów.</p>
                        </div>
                        <div class="col">
                            <h2>Zawsze znajdą się kwiaty dla tych, którzy chcą je zobaczyć</h2>
                            <h4>Henri Matisse</h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr"/>
            <div class="container text-center">
                <h1>Nasze usługi</h1>
                <div class="row align-items-center">
                    <div class="col">
                        <h4>Bukiety ślubne</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Ślub to wydarzenie wyjątkowe. Chcesz, by wszystko było dopracowane do perfekcji? Bukiet
                            ślubny jest
                            jednym z najważniejszych elementów.</p>
                    </div>
                    <div class="col">
                        <h4>Bukiety okolicznościowe</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Szukasz wyjątkowego prezentu dla ukochanej, koleżanki, mamy, teściowej? Odpowiedni bukiet
                            kwiatów
                            ucieszy każde oko i duszę.</p>
                    </div>
                    <div class="col">
                        <h4>Kosze okolicznościowe</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Kosze okolicznościowe to alternatywa dla klasycznych bukietów. Pomysłowe, piękne i pachnące
                            rozwiązanie na każdą okazję dla wyjątkowych osób.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <h4>Florystyka żałobna</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Na wieczne pożegnanie chcesz bliskiej osobie podarować ostatni prezent, który zastąpi tysiąc
                            słów.
                            Stworzymy wiązankę żałobną lub wieniec pogrzebowy prosto z serca.</p>
                    </div>
                    <div class="col">
                        <h4>Dekoracja i aranżacja wnętrz</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Detale, tak to bardzo ważne. Czasami drobny szczegół potrafi wpłynąć na całość odbioru. Na
                            szczęście
                            nasze florystki wiedzą jak stworzyć bajeczne dekoracje.</p>
                    </div>
                    <div class="col">
                        <h4>Pakowanie prezentów</h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/assets/images/icon.png" class="img-fluid" alt="Lavender icon">
                        <p>Pragniesz by prezent, który chcesz podarować komuś bliskiemu twej duszy, wyglądał wyjątkowo i
                            niezwykle. Pakowanie prezentów to nasze drugie imię.</p>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    /* {/block 'content'} */
}

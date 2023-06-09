{extends file="main.html"}

{block name=content}
    <div id="mainimage">
        <img src="{$conf->app_assets}/images/mainimage.jpg" class="img-fluid" alt="Responsive image">
        <!--<p class="text-end" id="imagecredits">"Ogród artysty w Giverny" Claude Monet</p>-->
    </div>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <h2>Witamy na Lawendowym Polu</h2>
            </div>
            <div class="col">
                <p>Po co chodzimy do kwiaciarni? Czasami, by kupić kwiaty. Najczęściej jednak po to, by sprawić komuś
                    radość, „opowiedzieć” o uczuciach.
                    Szukasz czegoś wyjątkowego? Przyjdź, pomożemy. Na okrągłą rocznicę ślubu przygotujemy tort ze
                    świeżych kwiatów, a na urodziny bukiet w kaloszu lub na kołpaku. Artystycznie zapakujemy wymarzony
                    prezent i udekorujemy kwiatami salę na przyjęcie weselne. Tworzymy z fantazją, mamy mnóstwo pomysłów
                    i duże wyczucie oczekiwań klienta.</p>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <p>Naszą historię napisała pasja i miłość do kwiatów. Kwiaciarnia Lawendowe Pole została założona
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
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Ślub to wydarzenie wyjątkowe. Chcesz, by wszystko było dopracowane do perfekcji? Bukiet ślubny jest
                    jednym z najważniejszych elementów.</p>
            </div>
            <div class="col">
                <h4>Bukiety okolicznościowe</h4>
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Szukasz wyjątkowego prezentu dla ukochanej, koleżanki, mamy, teściowej? Odpowiedni bukiet kwiatów
                    ucieszy każde oko i duszę.</p>
            </div>
            <div class="col">
                <h4>Kosze okolicznościowe</h4>
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Kosze okolicznościowe to alternatywa dla klasycznych bukietów. Pomysłowe, piękne i pachnące
                    rozwiązanie na każdą okazję dla wyjątkowych osób.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h4>Florystyka żałobna</h4>
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Na wieczne pożegnanie chcesz bliskiej osobie podarować ostatni prezent, który zastąpi tysiąc słów.
                    Stworzymy wiązankę żałobną lub wieniec pogrzebowy prosto z serca.</p>
            </div>
            <div class="col">
                <h4>Dekoracja i aranżacja wnętrz</h4>
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Detale, tak to bardzo ważne. Czasami drobny szczegół potrafi wpłynąć na całość odbioru. Na szczęście
                    nasze florystki wiedzą jak stworzyć bajeczne dekoracje.</p>
            </div>
            <div class="col">
                <h4>Pakowanie prezentów</h4>
                <img src="{$conf->app_assets}/images/icon.png" class="img-fluid" alt="Lavender icon">
                <p>Pragniesz by prezent, który chcesz podarować komuś bliskiemu twej duszy, wyglądał wyjątkowo i
                    niezwykle. Pakowanie prezentów to nasze drugie imię.</p>
            </div>
        </div>
    </div>
{/block}
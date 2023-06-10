{extends file="main.html"}

{block name=content}
    <div class="container">
        <div class="row">
            {foreach $usluga as $u}
                {strip}
                    <div class="col-3">
                        <p><img src="{$conf->app_assets}/flowers/{$u["img"]}" alt="bukiet" class="img-fluid"></p>
                        <p>{$u["usluga"]}</p>
                        <p>{$u["opis"]}</p>
                        <p><b>{$u["cena_uslugi"]} zł</b></p>
                    </div>
                {/strip}
            {/foreach}
        </div>
    </div>
{/block}
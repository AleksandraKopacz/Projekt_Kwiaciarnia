{extends file="main.html"}

{block name=content}
    <form action="{$conf->action_root}bouquet" method="post">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-sm-5">
                    <label class="form-label" for="priceTo">Cena do:</label>
                    <input class="form-control" name="priceTo" id="priceTo" type="number" placeholder="{$maxPrice}"
                           value="{$searchForm->to}"
                           min="{$minPrice}" max="{$maxPrice}">
                </div>
                <div class="col-sm-5">
                    <label class="form-label" for="type">Typ:</label>
                    <select name="type" id="type" class="form-select" aria-label="Wybierz typ usługi">
                        <option selected value="%">Wszystko</option>
                        {foreach $types as $t}
                            {strip}
                                <option value="{$t["typ"]}">{$t["typ"]}</option>
                            {/strip}
                        {/foreach}
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
            {foreach $usluga as $u}
                {strip}
                    <div class="col-3">
                        <p><img src="{$conf->app_url}/assets/flowers/{$u["img"]}" alt="bukiet" class="img-fluid"></p>
                        <p>{$u["usluga"]}</p>
                        <p>{$u["opis"]}</p>
                        <p><b>{$u["cena_uslugi"]} zł</b></p>
                    </div>
                {/strip}
            {/foreach}
        </div>
    </div>
{/block}
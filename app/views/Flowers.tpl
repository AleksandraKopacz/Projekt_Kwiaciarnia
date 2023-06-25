{extends file="main.html"}

{block name=content}
    <form action="{$conf->action_root}flowers" method="post">
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
                        {foreach $symbole as $s}
                            {strip}
                                <option value="{$s["id_symbole"]}">{$s["id_symbole"]}{$s["symbol"]}</option>
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
            {foreach $kwiaty as $k}
                {strip}
                    <div class="col-3">
                        <p><img src="{$conf->app_url}/assets/flowers/{$k["img"]}" alt="bukiet" class="img-fluid"></p>
                        <p>{$k["kwiat"]}</p>
                        <p>{$k["kolory"]}</p>
                        <p>{$k["cena"]} zł</p>
                        <p>{$k["id_symbole"]}</p>
                    </div>
                {/strip}
            {/foreach}
        </div>
    </div>
{/block}
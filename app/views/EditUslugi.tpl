{extends file="main.html"}

{block name="content"}
    <div class="container text-center">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <form action="{$conf->action_root}editSave" method="post">
                    <input type="text" id="img" name="img" value="{$form->img}">
                    <input type="text" id="usluga" name="usluga" value="{$form->usluga}">
                    <textarea id="opis" name="opis">{$form->opis}</textarea>
                    <input type="number" id="cena_uslugi" name="cena_uslugi" value="{$form->cena_uslugi}">
                </form>
            </div>
        </div>
    </div>
{/block}
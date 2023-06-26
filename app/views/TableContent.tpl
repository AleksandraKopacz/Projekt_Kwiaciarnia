{extends file="main.html"}

{block name="content"}
    <div class="container text-center">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <h1>Przejrzyj bazę danych</h1>
                <form id="search-form"
                      onsubmit="ajaxPostForm('search-form','{$conf->action_root}table', 'tableContent'); return false;">
                    <select name="tableName" value="tableName">
                        <option value="uslugi">Usługi</option>
                        <option value="uzytkownik">Użytkownik</option>
                        <option value="zamowienie">Zamówienie</option>
                    </select><br />
                    <label for="filter">Filtruj</label>
                    <input type="text" name="filter" value="{$form->filter}" />
                    <br/><input type="submit" value="Pokaż tabelę" id="submitFilterButton">
                </form>
                <div id="tableContent">
                    {include file="TableContentPart.tpl"}
                </div>
            </div>
        </div>
    </div>
{/block}
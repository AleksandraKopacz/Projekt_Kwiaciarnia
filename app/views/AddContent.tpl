{extends file="main.html"}

{block name="content"}
    <div class="container text-center">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <h1>Dodaj do bazy danych</h1>
                <form action="{$conf->action_root}showAdd" method="post">
                    <select name="tableName" value="tableName">
                        <option value="uslugi">Usługi</option>
                        <option value="uzytkownik">Użytkownik</option>
                        <option value="zamowienie">Zamówienie</option>
                    </select>
                    <br/><input type="submit" value="Wybierz" id="submitFilterButton">
                </form>
                <div id="tableContent">
                    {include file="AddContentPart.tpl"}
                </div>
            </div>
        </div>
    </div>
{/block}
{extends file="main.html"}

{block name="content"}
    <h1>Złóż zamówienie</h1>
    <form action="{$conf->action_root}order" method="post">
        <input type="submit" value="Filtruj" id="submitFilterButton">
        <input type="submit" value="Wyloguj się" id="submitFilterButton" formaction="{$conf->action_root}logout">
    </form>
{/block}
{extends file="main.html"}

{block name="content"}
    <h1>Edytuj bazę danych</h1>
    <form action="{$conf->action_root}edit" method="post">
        <input type="submit" value="Filtruj" id="submitFilterButton">
        <input type="submit" value="Wyloguj się" id="submitFilterButton" formaction="{$conf->action_root}logout">
    </form>
{/block}
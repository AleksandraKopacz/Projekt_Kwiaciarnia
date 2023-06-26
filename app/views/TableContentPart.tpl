
<table class="table table-sm table-hover" id="content">
    <thead>
    <!-- USLUGI -->
    {if $form->tableName eq 'uslugi'}
    <tr>
        <th>id_uslugi</th>
        <th>img</th>
        <th>usluga</th>
        <th>opis</th>
        <th>cena_uslugi</th>
        <th>typ</th>
    </tr>
    </thead>
    <tbody>
    {foreach $records as $r}
        {strip}
            <tr>
                <td>{$r["id_uslugi"]}</td>
                <td>{$r["img"]}</td>
                <td>{$r["usluga"]}</td>
                <td>{$r["opis"]}</td>
                <td>{$r["cena_uslugi"]}</td>
                <td>{$r["typ"]}</td>
            </tr>
        {/strip}
    {/foreach}
    {/if}
    <!-- UZYTKOWNIK -->
    {if $form->tableName eq 'uzytkownik'}
    <tr>
        <th>id_uzytkownik</th>
        <th>email</th>
        <th>haslo</th>
        <th>rola</th>
    </tr>
    </thead>
    <tbody>
    {foreach $records as $r}
        {strip}
            <tr>
                <td>{$r["id_uzytkownik"]}</td>
                <td>{$r["email"]}</td>
                <td>{$r["haslo"]}</td>
                <td>{$r["rola"]}</td>
            </tr>
        {/strip}
    {/foreach}
    {/if}
    <!-- ZAMOWIENIA -->
    {if $form->tableName eq 'zamowienie'}
    <tr>
        <th>id_zamowienie</th>
        <th>szczegoly</th>
        <th>id_uzytkownik</th>
    </tr>
    </thead>
    <tbody>
    {foreach $records as $r}
        {strip}
            <tr>
                <td>{$r["id_zamowienie"]}</td>
                <td>{$r["szczegoly"]}</td>
                <td>{$r["id_uzytkownik"]}</td>
            </tr>
        {/strip}
    {/foreach}
    {/if}
    </tbody>
</table>
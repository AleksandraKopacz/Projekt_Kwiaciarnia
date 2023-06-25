{extends file="main.html"}

{block name="content"}
    <div class="container text-center">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <h1>Usuń z bazy danych</h1>
                <form>
                    <select name="tableName" value="tableName">
                        <option value="uslugi">Usługi</option>
                        <option value="uzytkownik">Użytkownik</option>
                        <option value="zamowienie">Zamówienie</option>
                    </select>
                    <br/><input type="submit" value="Pokaż tabelę" id="submitFilterButton">
                </form>
                <form action="{$conf->action_root}login" method="post">
                    <div class="form-outline mb-4">
                        <label for="login" class="form-label">E-mail</label>
                        <input type="email" id="login" class="form-control user-control" name="login"
                               value="{$form->login}"
                               required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="pass" class="form-label">Hasło</label>
                        <input type="password" id="pass" class="form-control user-control" name="pass" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Usuń" id="submitFilterButton">
                        {include file="Msg.tpl"}
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}
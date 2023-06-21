{extends file="main.html"}

{block name="content"}
    <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <h1>Zarejestruj się</h1>
                <form action="{$conf->action_root}register" method="post">
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
                        <input type="submit" value="Zarejestruj się" id="submitFilterButton">
                        <p><a href="{$conf->app_root}/loginShow" id="flinks">Zaloguj się</a></p>
                        {if $msgs->isMessage()}
                            <div>
                                <ul id="errorMsg">
                                    {foreach $msgs->getMessages() as $msg}
                                        {strip}
                                            <li>{$msg->text}</li>
                                        {/strip}
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}
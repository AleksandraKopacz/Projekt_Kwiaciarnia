{extends file="main.html"}

{block name="content"}
    <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <h1>Złóż zamówienie</h1>
                <form action="{$conf->action_root}order" method="post">
                    <div class="form-outline mb-4">
                        <label for="login" class="form-label">E-mail</label>
                        <input type="email" id="login" class="form-control user-control" name="login"
                               value="{$form->email}"
                               disabled>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="details" class="form-label">Szczegóły zamówienia</label>
                        <textarea id="details" class="form-control user-control" name="details"
                                  rows="5">{$form->details}</textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Zamów" id="submitFilterButton">
                        <input type="submit" value="Wyloguj się" id="submitFilterButton"
                               formaction="{$conf->action_root}logout">
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
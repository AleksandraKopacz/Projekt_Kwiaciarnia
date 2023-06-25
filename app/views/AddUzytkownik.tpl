{extends file="main.html"}

{block name="content"}
    <div class="container">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1>Dodaj użytkownika</h1>
                            {include file="Msg.tpl"}
                            <form action="{$conf->action_root}addUzytkownik" method="post">
                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" id="email" class="form-control user-control" name="email"
                                           value="{$form->email}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="haslo" class="form-label">haslo</label>
                                    <input type="password" id="haslo" class="form-control user-control" name="haslo"
                                           value="{$form->haslo}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="rola" class="form-label">rola</label>
                                    <input type="text" id="rola" class="form-control user-control" name="rola"
                                           value="{$form->rola}"
                                           required>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Dodaj" id="submitFilterButton">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
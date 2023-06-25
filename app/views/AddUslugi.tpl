{extends file="main.html"}

{block name="content"}
    <div class="container">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1>Dodaj usługę</h1>
                            {include file="Msg.tpl"}
                            <form action="{$conf->action_root}addUslugi" method="post">
                                <div class="form-outline mb-4">
                                    <label for="img" class="form-label">img</label>
                                    <input type="text" id="img" class="form-control user-control" name="img"
                                           value="{$form->img}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="usluga" class="form-label">usluga</label>
                                    <input type="text" id="usluga" class="form-control user-control" name="usluga"
                                           value="{$form->usluga}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="opis" class="form-label">opis</label>
                                    <input type="text" id="opis" class="form-control user-control" name="opis"
                                           value="{$form->opis}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="cena_uslugi" class="form-label">cena_uslugi</label>
                                    <input type="number" id="cena_uslugi" class="form-control user-control"
                                           name="cena_uslugi" value="{$form->cena_uslugi}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="typ" class="form-label">typ</label>
                                    <input type="text" id="typ" class="form-control user-control" name="typ"
                                           value="{$form->typ}"
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
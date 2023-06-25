{extends file="main.html"}

{block name="content"}
    <div class="container">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1>Dodaj zamówienie</h1>
                            {include file="Msg.tpl"}
                            <form action="{$conf->action_root}addZamowienie" method="post">
                                <div class="form-outline mb-4">
                                    <label for="szczegoly" class="form-label">szczegoly</label>
                                    <input type="text" id="szczegoly" class="form-control user-control" name="szczegoly"
                                           value="{$form->szczegoly}"
                                           required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="id_uzytkownik" class="form-label">id_uzytkownik</label>
                                    <input type="number" id="id_uzytkownik" class="form-control user-control"
                                           name="id_uzytkownik"
                                           value="{$form->id_uzytkownik}"
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
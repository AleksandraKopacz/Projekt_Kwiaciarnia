{extends file="main.html"}

{block name="content"}
    <div class="container">
        <div class="row align-items-start">
            {include file="Menu.tpl"}
            <div class="col-10" style="border-left: 1px solid #E0C2F2;">
                <div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1>Usuń usługę</h1>
                            {include file="Msg.tpl"}
                            <form action="{$conf->action_root}deleteUslugi" method="post">
                                <div class="form-outline mb-4">
                                    <label for="id_uslugi" class="form-label">id_uslugi</label>
                                    <input type="number" id="id_uslugi" class="form-control user-control"
                                           name="id_uslugi"
                                           value="{$form->id_uslugi}"
                                           required>
                                </div>
                                <div class="text-center">
                                    <input type="submit"
                                           value="Usuń" id="submitFilterButton">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
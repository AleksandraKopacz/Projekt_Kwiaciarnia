<div class="container py-5 h-100" style="margin-top: 1em; margin-bottom: 1em;">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-8 col-lg-6 col-xl-5">
            {if $form->tableName eq 'uslugi'}

            {/if}
            {if $form->tableName eq 'uzytkownik'}

            {/if}
            {if $form->tableName eq 'zamowienie'}
                <form action="{$conf->action_root}addToZamowienie" method="post">
                    <div class="form-outline mb-4">
                        <label for="details" class="form-label">szczegoly</label>
                        <textarea id="details" class="form-control user-control" name="details"
                                  rows="5">{$form->details}</textarea>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="id_user" class="form-label">id_uzytkownik</label>
                        <input type="number" min="{$minValue}" max="{$maxValue}" value="{$form->id_user}" id="id_user"
                               name="id_user" class="form-control user-control"
                               required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Dodaj do bazy danych" id="submitFilterButton">
                    </div>
                </form>
            {/if}
            <div id="msg">
                {include file="Msg.tpl"}
            </div>
        </div>
    </div>
</div>
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
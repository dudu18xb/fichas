<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>

<div style="display: none;" id="hidden-content">
    <h2 class="text-center">Ooops <i class="fa fa-times" aria-hidden="true"></i></h2>
    <p><?= $message ?></p>
</div>

<a id="clicktrigger"  class="hidden" data-fancybox data-src="#hidden-content" href="javascript:;">
    Trigger the fancybox
</a>
<style>
    .hidden{
        display: none;
    }
</style>

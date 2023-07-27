<div class="m-content-panel js-contentPanel">
    <div class="m-content-panel__close-icon js-panelClose">
        <img src="src/assets/icons/Close.svg" width="24" height="24" alt="close icon">
    </div>
    <div class="m-content-panel__container">
        <aside data-lenis-prevent class="m-content-panel__modal js-panelModal">
            
            <div class="js-panelContent">
                <?php isset($_GET["cardId"]) ? require "./panel-content.php" : "error loading content"; ?>
            </div>
        </aside>
    </div>
</div>
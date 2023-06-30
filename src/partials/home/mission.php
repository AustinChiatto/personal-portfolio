<!-- data for content can be found in data/page-name -->
    <div class="o-mission-list js-missionList">
        <!-- mission statement pre-heading -->
        <h3 class="a-text--sm a-text--highlight"><?= $mission_pre_head ?></h3>
        <div class="o-mission-list__items">
            <!-- mission statement heading list -->
            <ul class="o-mission-list__container js-missionItems">
                <?php for($i = 0; $i < count($mission_sub_head); $i++) : ?>
                    <li class="a-text--xxl a-text--upper o-mission-list__item"><?= $mission_sub_head[$i] ?></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</section>
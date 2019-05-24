<div class="nav-menu">
    <ul class="nav-items">
        <?php
        $fields = get_fields(31);
        if( $fields ):
            ?>
            <?php
            foreach ($fields as $field_name => $field):
                if( $field ):
                    ?>
                    <li class="<?= $field_name == 'subscribe' ? 'active-link' : ''?>">
                        <p><?= $field?></p>
                    </li>
                <?php endif;?>
            <?php endforeach; ?>

        <?php endif; ?>
    </ul>
</div>
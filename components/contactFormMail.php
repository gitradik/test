<div class="contact-form mt-5">
    <span class="contact-form-title">
          <?php if( $my_field = get_field( "title", 22 ) ){ echo $my_field; } ?>
    </span>
    <?php echo do_shortcode('[contact-form-7 id="6" html_class="contact-form-mail"]'); ?>
    <div class="contact-form-subtitle">
        <span>
          <?php if( $my_field = get_field( "subtitle", 22 ) ){ echo $my_field; } ?>
        </span>
    </div>
</div>
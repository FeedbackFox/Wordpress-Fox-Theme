<?php /* Template Name: Contact */ ?>

<?php 
    get_header( 'contact' ); 
?>

<?php
                $pageid = get_the_id();
                $content_post = get_post($pageid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?>
<?php 

$pageid = get_the_id();
if ($pageid == 14) {
    echo "<form class='contact__form' action='<?php echo get_bloginfo('template_directory'); ?>
    <div class='form__item'>
        <label>E-mail *</label>
        <input type='email' name='email' required>
    </div>
    <div class='form__item'>
        <label>Name *</label>
        <input type='text' name='name' required>
    </div>
    <div class='form__item'>
        <label>Subject *</label>
        <input type='text' name='subject' required>
    </div>
    <div class='form__item'>
        <label>Phone Number</label>
        <input type='phone' name='phone'>
    </div>
    <div class='form__item'>
        <label>Question *</label>
        <textarea class='form__textinput' name='message' required=''></textarea>
    </div>
    <div class='form__item'>
        <input class='form__submit' type='submit' value='Submit'>
    </div>
</form>";
    get_footer( 'contact' );
}
else {
    echo "<form class='contact__form' action='<?php echo get_bloginfo('template_directory'); ?>
    <div class='form__item'>
        <label>E-mail *</label>
        <input type='email' name='email' required>
    </div>
    <div class='form__item'>
        <label>Naam *</label>
        <input type='text' name='name' required>
    </div>
    <div class='form__item'>
        <label>Onderwerp *</label>
        <input type='text' name='subject' required>
    </div>
    <div class='form__item'>
        <label>Telefoonnummer</label>
        <input type='phone' name='phone'>
    </div>
    <div class='form__item'>
        <label>Vraag *</label>
        <textarea class='form__textinput' name='message' required=''></textarea>
    </div>
    <div class='form__item'>
        <input class='form__submit' type='submit' value='Sturen'>
    </div>

</form>";
    get_footer( 'contact-ne' ); 
}

?>
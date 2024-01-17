<?php 
    /* Template Name: Contact */ 
    get_header();

    if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['message'])) {
        var_dump($_POST);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $name = $firstname . ' ' . $lastname;
        $message = $_POST['message'];
        wp_mail('jocelyn.marcilloux@gmail.com', 'Mail test', $message);
    }
?>

<main>
    <section class="contact-infos">
        <div class="mail-info">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.svg" alt="Email">
            <p>contact@hydrauliquesansfrontières.org</p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Droplet.svg" alt="Goutte d'eau">
        <div class="coord">
            <div class="prim">
                <h3 class="h3">Siège social Chambéry</h3>
                <button class="plus"></button>
            </div>
            <div class="sec">
                <div class="tel">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Phone.svg" alt="Téléphone">
                    <p>07 67 46 21 05</p>
                </div>
                <div class="loc">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Location.svg" alt="Localisation">
                    <p>2 rue de la République - 73000 Chambéry</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1>Contact</h1>
        <p>Vous pouvez nous contacter par téléphone au 07 67 46 21 05</p>
        <form action="" method="post">
            <fieldset>
                <label for=""></label>
                <input type="text" name="firstname" placeholder="Prénom">
            </fieldset>
            <fieldset>
                <label for=""></label>
                <input type="text" name="lastname" placeholder="Nom">
            </fieldset>
            <fieldset>
                <label for=""></label>
                <input type="text-area" name="message" placeholder="Votre message...">
            </fieldset>
            <button class="button" name="submit">Envoyer</button>
        </form>
    </section>
</main>

<?php
    get_footer();
?>
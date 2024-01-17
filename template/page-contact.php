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

    $mail = get_field('mail');
    $repetor = get_field('repetor');
?>

<main>
    <section class="contact-infos">
        <div class="mail-info">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Mail.svg" alt="Email">
            <p><?php echo $mail ?></p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Droplet.svg" alt="Goutte d'eau">
        <?php foreach($repetor as $row) : ?>
        <?php
            $title = $row['title'];
            $tel = $row['tel'];
            $loc = $row['loc'];
        ?>
        <div class="coord">
            <div class="prim">
                <h3 class="h3"><?php echo $title ?></h3>
                <button class="plus"></button>
            </div>
            <div class="sec">
                <div class="tel">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Phone.svg" alt="Téléphone">
                    <p><?php echo $tel ?></p>
                </div>
                <div class="loc">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Location.svg" alt="Localisation">
                    <p><?php echo $loc ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
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
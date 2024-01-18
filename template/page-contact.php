<?php 
    /* Template Name: Contact */ 
    get_header();

    $mail = get_field('mail');
    $repetor = get_field('repetor');

    $img = get_field('img');
    $title = get_field('title');
    $paragraph = get_field('paragraph');

    if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        var_dump($_POST);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $name = $firstname . ' ' . $lastname;
        $message = $_POST['message'];
        wp_mail('contact@hydrauliquesansfrontieres.org', 'Nouveau contact depuis le site', $name . 'vous contact depuis le formulaire de contact de votre site. Son E-Mail est : ' . $email . 'Voici son message : ' . $message);
    }

    $demand_title = get_field('demand_title');
    $community_title = get_field('community_title');
    $form_link = get_field('form_link');
    $img_link = get_field('img_link');
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
            $title_coord = $row['title'];
            $tel = $row['tel'];
            $loc = $row['loc'];
        ?>
        <div class="coord">
            <div class="prim">
                <h3 class="h3"><?php echo $title_coord ?></h3>
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
        <article class="img_text">
            <div class="img">
                <img 
                    loading="lazy"
                    src="<?php echo ($img['sizes']['art-img-full']); ?>"
                    width="<?php echo ($img['sizes']['art-img-full-width']); ?>"
                    height="<?php echo ($img['sizes']['art-img-full-height']); ?>"
                    alt="<?php echo $img['alt']; ?>"
                >
            </div>
            <div class="content">
                <h2 class="h2"><?php echo $title; ?></h2>
                <p class="paragraph"><?php echo $paragraph; ?></p>
                <a href="#form" class="btn outline-btn">EN SAVOIR PLUS</a>
            </div>
        </article>
    </section>
    <section>
        <form action="" method="post" id="form">
            <input type="text" name="lastname" placeholder="NOM" required>
            <input type="text" name="firstname" placeholder="PRÉNOM" required>
            <input type="email" name="email" placeholder="EMAIL" required>
            <input type="text-area" name="message" placeholder="VOS MOTIVATIONS..." required>
            <button class="btn" name="submit">ENVOYER</button>
        </form>
    </section>
    <section>
        <article class="img_text invert">
            <div class="img">
                <img 
                    loading="lazy"
                    src="<?php echo ($img_link['sizes']['art-img-full']); ?>"
                    width="<?php echo ($img_link['sizes']['art-img-full-width']); ?>"
                    height="<?php echo ($img_link['sizes']['art-img-full-height']); ?>"
                    alt="<?php echo $img_link['alt']; ?>"
                >
            </div>
            <div class="content">
                <h2 class="h2"><?php echo $demand_title; ?></h2>
                <a href="#form" class="btn">FAIRE MA DEMANDE</a>
                <h2 class="h2"><?php echo $community_title; ?></h2>
                <a href="<?php echo $form_link['url']; ?>" class="btn outline-btn" download>TÉLÉCHARGER LE FORMULAIRE</a>
            </div>
        </article>
    </section>
</main>

<?php
    get_footer();
?>
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
    <section>
        <h1>Contact</h1>
        <p>Vous pouvez nous contacter par téléphone au 07 67 46 21 05 ou 
            par mail à l'adresse suivante : jocelyn.marcilloux@gmail.com</p>
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
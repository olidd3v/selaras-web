<!DOCTYPE html>
<html lang="<?= isset($_GET['lang']) ? $_GET['lang'] : 'en' ?>">

    <?php require_once 'head.php' ; ?>

    <body>

        <?php require_once 'spinner.php' ; ?>

        <?php require_once 'top.php' ; ?>

        <?php require_once 'nav.php' ; ?>

        <!-- search modal -->

        <?php require_once 'header.php' ; ?>

        <?php require_once 'about.php' ; ?>

        <?php require_once 'service.php' ; ?>
        
        <?php require_once 'culture.php' ; ?>

        <?php require_once 'gallery.php' ; ?>
        
        <?php require_once 'core.php' ; ?>

        <?php require_once 'client.php' ; ?>

        <?php require_once 'footer.php' ; ?>

        <?php require_once 'script.php' ; ?>

    </body>

</html>
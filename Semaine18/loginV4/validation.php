<div class="mdl-card">
    <!-- Titre -->
    <div class="mdl-card__title">
        <h3 class="mdl-card__title-text">Merci!</h3>
    </div>
    <!-- Message -->
    <div class="mdl-card__supporting-text">
        Compte crée! Un email a été envoyé à <?php echo $email; ?> !
    </div>
    <!-- Bouton Deconnection eventuellemet -->
    <div class="mdl-card__actions">
        <?php
            if( isset($user) )
                echo '<a href="'.$_SERVER['PHP_SELF'].'">Déconnexion</a>';
        ?>
    </div>
</div>
<?php  ?>

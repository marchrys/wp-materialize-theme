<div id="commentaires" class="comments">

    <?php comment_form(
        array(
            'comment_field' => '<div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Votre commentaire</label>
                                </div>',
            'submit_button' => '<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer</button>'
        )
    ); ?>
 
</div>
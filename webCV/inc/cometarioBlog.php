<li class="comment">
    <div>
	<img src="assets/images/avatar_man.png" alt="Avatar" class="avatar">									
	<div class="comment-meta">
        <span class="author"><a href="#">John Doe</a></span>
        <span class="date"><a href="#">January 22, 2011 at 4:55 pm</a></span>

        <span class="reply"><a href="#">Reply</a></span>
	</div>
    <div class="comment-body">
        Morbi velit eros, sagittis in facilisis non.
    </div>
    </div>
    <?php
        #si el comentario tiene hijos se insertartian aqui 
        if ($tieneHijos) {
            echo '<ul class="children">';
                    include('cometarioBlog.php');
            echo '</ul><!-- .children -->';
            $tieneHijos = 0;
        }
    ?>

</li>
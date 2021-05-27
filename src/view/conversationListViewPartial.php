<?php ob_start(); ?>
<div class="col-sm-6 col-md-3 friends-list">

    <ul class="list-group mt-3 mb-3">

        <li class="list-group-item my-2">
            <a href="/index.php?action=logout">
                <i class="bi bi-eject-fill mx-2"></i>Logout
            </a>
        </li>
        <li class="list-group-item ">
            <a href="/index.php?action=contact">
                <i class="bi-envelope-fill mx-2"></i>Contact
            </a>
        </li>
        <li class="list-group-item my-3">
            <a href="/index.php?action=friend">
                <i class="bi-people-fill mx-2"></i>Friends
            </a>
        </li>
    </ul>
    
    
    
    <ul class="list-group border-0">
        <?php foreach ($conversations as $conv): ?>
            <li class="list-group-item border-0">
                
                <a href="/index.php?action=conversation&sub_action=detail&conversation_id=<?= $conv['id']; ?>"
                class="list-group-item list-group-item-action border-0">
                <?php
                    if ($conv['interlocutor_avatar_url']) {
                        $avatarUrl = $conv['interlocutor_avatar_url'];
                    } else {
                        $avatarUrl = "/static/lib/bootstrap-icons-1.5.0/person-fill.svg";
                    }
                    ?>
                    <img src="<?= $avatarUrl ?>" class="rounded-circle avatar-small mx-2"/>
                    <?= $conv['interlocutor_username']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
                    
        <!-- Display Rooms -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

        <div class="menuAccordeon">
        <ul class="nav">

		<li class="nav__item">
			<a href="#profile" class="nav__item-link">
				<i class="fas fa-user"></i> Coding
			</a>
			<div id="profile" class="nav__submenu">
				<a href="#" class="nav__submenu-link">Général</a>
                <a href="#" class="nav__submenu-link">Jeux</a>
				<a href="#" class="nav__submenu-link">Musique</a>
                
			</div>
		</li>
		</li>
	</ul>
  </div>

    </div>
<?php $conversation_list_content = ob_get_clean(); ?>


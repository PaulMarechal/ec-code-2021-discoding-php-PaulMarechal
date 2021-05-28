<?php ob_start(); ?>
<div class="col-sm-6 col-md-3 friends-list">

    <!-- Main menu -->
    <ul class="list-group mt-3 mb-3">
        <!-- Logout -->
        <li class="list-group-item my-2">
            <a href="/index.php?action=logout">
                <i class="bi bi-eject-fill mx-2"></i>Logout
            </a>
        </li>

        <!-- Contact -->
        <li class="list-group-item ">
            <a href="/index.php?action=contact">
                <i class="bi-envelope-fill mx-2"></i>Contact
            </a>
        </li>

        <!-- Friends -->
        <li class="list-group-item">
            <a href="/index.php?action=friend">
                <i class="bi-people-fill mx-2"></i>Friends
            </a>
        </li>

        <!-- Server -->
        <li class="list-group-item">
            <a href="/index.php?action=create_server">
                <i class="bi bi-server mx-2"></i>create a server
            </a>
        </li>
    </ul>
    
    
    <!-- Friend list on menu -->
    <ul class="list-group border-0 friendScroll" style="overflow:scroll; height:360px;">
    <li class="list-group-item border-0" style="text-align;center;">
                    <h5>My Friends</h5>
                    <hr>
            </li>
            <!-- Friend list -->
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
                    
        <!-- Display Rooms test-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

        <div class="menuAccordeon">
  </div>
  <!-- Button to access modal to create server -->
    <ul class="list-group border-0" style="overflow:auto;height:180px;">
        <li class="list-group-item border-0">
            <h5>My Servers</h5>
            <hr>
        </li>

        <?php foreach ($list as $server): ?>
            
            <li class="list-group-item border-0">
                <a href="index.php?action=server&server=<?= $server['url'] ?>">
                    <img src="<?= $server['avatar_url'] ?>" class="rounded-circle avatar-small mx-2"/>
                        <?= $server['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
<?php $conversation_list_content = ob_get_clean(); ?>


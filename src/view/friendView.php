<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">

        <?= $conversation_list_partial ?>

        <div class="col-sm-6 col-md-9 mt-2">
            <div class="row">
                <!-- Title page : friend -->
                <div class="col">
                    <h2><i class="bi-people-fill mx-2"></i>Friends</h2>
                    <!-- Search a friend -->
                    <form class="d-flex mb-2">
                        <input class="form-control me-2" type="search" id="search" name="username" placeholder="Search a friend in discoding" aria-label="Search">
                        <button id="sendMessage" class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <!-- Button add a friend -->
                <div class="col-2 align-self-center d-flex justify-content-end addFriendButton mt-5">
                    <a href="/index.php?action=friend&sub_action=add_friend" class="btn btn-success">Add a Friend</a>
                </div>
            </div>

            <!-- Display all the user friends -->
            <?php if(!empty($_GET['username'])):?>
                    <?php foreach ($users as $user): ?>
                        <li class="d-flex justify-content-between list-group-item">
                            <div>
                                <?php
                                    if ($user['avatar_url']) {
                                        $avatarUrl = $user['avatar_url'];
                                    } else {
                                        $avatarUrl = "/static/lib/bootstrap-icons-1.5.0/person-fill.svg";
                                    }
                                ?>
                                <img src="<?= $avatarUrl ?>" class="rounded-circle avatar-small mx-2"/>
                                <?= $user['username']; ?>
                            </div>

                            <div class="align-self-center">
                                    <a href="/index.php?action=conversation&sub_action=start_with_user&interlocutor_id=<?= $user['id'] ?>">Message</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <?php else: ?>

                    <!-- List contact friend conversation -->
                    <ul class="list-group list-group-flush mt-2">
                        <?php foreach ($friends as $friend): ?>
                            <li class="d-flex justify-content-between list-group-item">
                                <div>
                                    <?php
                                    // Display avatar picture
                                    if ($friend['avatar_url']) {
                                        $avatarUrl = $friend['avatar_url'];
                                    } else {
                                        $avatarUrl = "/static/lib/bootstrap-icons-1.5.0/person-fill.svg";
                                    }
                                    ?>
                                    <img src="<?= $avatarUrl ?>" class="rounded-circle avatar-small mx-2"/>
                                    <!-- Display username -->
                                    <?= $friend['username']; ?>
                                </div>
                                
                                <!-- Button to access conversation -->
                                <div class="align-self-center">
                                    <a href="/index.php?action=conversation&sub_action=start_with_user&interlocutor_id=<?= $friend['id'] ?>">Message</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>     
            <?php endif; ?>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('base.php'); ?>
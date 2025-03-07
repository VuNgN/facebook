<?php
if ($profileInfo)
    foreach ($profileInfo as $row_ava) {
?>
    <main>
        <!-- Section: white bgg -->
        <section class="bg-white mb-4 shadow-2">
            <div class="container">
                <!-- Section: imagess -->
                <section class="mb-10">
                    <!-- Background imagee -->
                    <div class="p-5 text-center bg-image shadow-1-strong rounded-bottom" style="
                background-image: url('assets/images/sky.jpg');
                height: 250px;
              " onclick="clickImg('assets/images/sky.jpg')"></div>
                    <div class="d-flex justify-content-center">
                        <img src=" <?php echo $row_ava['UserAva'] ?>" alt="" class="
                  rounded-circle
                  shadow-3-strong
                  position-absolute
                  border border-white
                " id="avatarImg" style="width: 180px;height:180px; margin-top: -60px" onclick="clickImg('<?php echo $row_ava['UserAva'] ?>')" />
                    </div>
                    <!-- Background imagee -->
                </section>
                <!-- Section: imagess -->

                <!-- Section: user dataa -->
                <section class="text-center border-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <h2><strong> <?php echo $row_ava['UserFirstName'] . " " . $row_ava['UserLastName'] ?> </strong></h2>
                            <p class="text-muted">
                                <?php echo $row_ava['Description'] ?>
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section buttonss -->
                <section class="py-2 d-flex justify-content-between">
                    <!-- leftt -->
                    <div>
                        <button type="button" class="btn btn-link bg-light" datadata-ripple-color="dark"  onclick="document.location.href='index.php?controller=profile&action=<?php echo $row_ava['UserID']==$UserID ? 'index' : 'getFriendInfo' ?>&UserIDFriend=<?php echo $row_ava['UserID'] ?>'">
                        Bài viết
                        </button>
                        <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewGioiThieu&UserID=<?php echo $row_ava['UserID'] ?>'">
                        Giới thiệu
                        </button>
                        <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewFriend&UserID=<?php echo $row_ava['UserID'] ?>'">
                        Bạn bè
                        </button>
                        <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewImage&UserID=<?php echo $row_ava['UserID'] ?>'">
                        Ảnh
                        </button>
                        <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewVideo&UserID=<?php echo $row_ava['UserID'] ?>'">
                        Video
                        </button>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-link dropdown-toggle text-reset" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                Xem thêm
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCEgdi0XIXXZ-qJOFPf4JSKw" target="_blank">Thể thao</a></li>
                                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ" target="_blank">Âm nhạc</a></li>
                                <li><a class="dropdown-item" href="https://www.youtube.com/feed/trending?bp=6gQJRkVleHBsb3Jl" target="_blank">Giải trí</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- leftt -->

                    <!-- rightt -->
                    <div>
                        <button type="button" class="btn btn-light bg-light mr-2" data-mdb-ripple-color="dark">
                            <i class="fas fa-search me-2"></i>Tìm kiếm
                        </button>
                    </div>
                    <!-- right t-->
                </section>
                <!-- Section buttonss -->
            </div>
        </section>
        <!-- Section: white bgg -->
        <!-- bạn bee  -->
        <div class="container mb-3">
            <div class="bg-white mb-5 shadow-2 rounded">
                <h2 class="pt-3" style="padding-left: 3rem"><strong>Bạn bè</strong></h2>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="row">
                            <?php
                            if($getFriend )
                            foreach ($getFriend as $rowFriends) {
                                echo '<div class="col-4 pt-4 pb-4">';
                                echo '<div class="d-flex border rounded align-items-center">';
                                echo '<a href=""><img src="' . $rowFriends['UserAva'] . '" style="width: 90px; height: 90px" alt="" class="mr-3"></a>';
                                echo '<p style="margin-left: 1rem;"><strong>' . $rowFriends['UserFirstName'] . " " . $rowFriends['UserLastName'] . '</strong></p>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    <?php  }
    ?>
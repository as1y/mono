<div class="row">
    <div class="col-md-12">

        <form  action="/panel/messages/?idd=<?=$idd?>" method="post" data-fouc>


            <!-- Messages -->
            <div class="card">
                <div class="card-header bg-dark text-white header-elements-inline">

                    <div class="header-elements">
                    <img src="<?=$sobesednik['avatar']?>" class="rounded-circle" width="40" height="40" alt=""> &nbsp;
                  <a href="<?=generateprofilelink($sobesednik)?>" target="_blank"><?=$sobesednik['username']?></a>
                    </div>


                    <div class="header-elements">


                        <a href="/panel/dialogs" class="btn btn-light"><i class="icon-square-left mr-2"></i> НАЗАД</a>
                    </div>



                </div>

                <div class="card-body">
                    <ul class="media-list media-chat media-chat-scrollable mb-3">


                        <!--                    <li class="media content-divider justify-content-center text-muted mx-0">Today</li>-->

                        <?php if(count($messages) == 0): ?>


                        <?php endif;?>

                        <li class="media">

                            <div class="media-body">
                                <div class="font-size-sm text-muted mt-2">
                                    <div class="media-chat-item">Чтобы начать даилог напишите первое сообщение</div>

                                </div>
                            </div>
                        </li>
                        <?php





                        foreach ($messages as $key=>$val){

                            if ($val['author'] == "me"){
                                ?>


                                <li class="media">
                                    <div class="mr-3 align-self-center">
                                        <img src="<?=$_SESSION['ulogin']['avatar']?>" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-sm text-muted mt-2"><b><?=$_SESSION['ulogin']['username']?></b> - <?=$val['date']?><br>
                                            <div class="media-chat-item"><?=$val['message']?></div>

                                        </div>
                                    </div>
                                </li>



                                <?php
                            }



                            if ($val['author'] == "admin"){
                                ?>

                                <li class="media">
                                    <div class="mr-3 align-self-center">
                                        <img src="/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-sm text-muted mt-2"><b>Тех. поддержка</b> - <?=$val['date']?><br>
                                            <div class="bg-primary  media-chat-item"><?=$val['message']?></div>
                                        </div>
                                </li>


                                <?php
                            }






                        }


                        ?>




                    </ul>




                        <textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Написать сообщение"></textarea>
                        <div class="align-items-left">
                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Отправить сообщение</button>
                        </div>



        </form>


    </div>
</div>
<!-- /messages -->



</div>




</div>
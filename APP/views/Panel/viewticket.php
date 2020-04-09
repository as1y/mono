<div class="row">
    <div class="col-md-12">


        <!-- Messages -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Тикет <?=$tickets['zagolovok']?></h6>


            </div>

            <div class="card-body">
                <ul class="media-list media-chat media-chat-scrollable mb-3">


<!--                    <li class="media content-divider justify-content-center text-muted mx-0">Today</li>-->


                    <?php

                    foreach ($messages as $key=>$val){

                        if ($val['author'] == "me"){
                            ?>


                            <li class="media ">
                                <div class="mr-3">
                                    <img src="<?=$_SESSION['ulogin']['avatar']?>" class="rounded-circle" width="40" height="40" alt="">
                                </div>
                                <div class="media-body">
                                    <?=$_SESSION['ulogin']['username']?><br>
                                    <div class="media-chat-item"><?=$val['message']?></div>
                                    <div class="font-size-sm text-muted mt-2"><?=$val['date']?></a></div>
                                </div>
                            </li>



                            <?php
                        }



                        if ($val['author'] == "admin"){
                            ?>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-chat-item"><?=$val['message']?></div>
                                    <div class="font-size-sm text-muted mt-2"><?=$val['date']?></a></div>
                                </div>
                            </li>


                            <?php
                        }






                    }


                    ?>

<!--                    <li class="media media-chat-item-reverse">-->
<!--                        <div class="media-body">-->
<!--                            <div class="media-chat-item">--><?//=$val['message']?><!--</div>-->
<!--                            <div class="font-size-sm text-muted mt-2">--><?//=$val['date']?><!--</div>-->
<!--                        </div>-->
<!--                        <div class="ml-3">-->
<!--                            <img src="--><?//=$_SESSION['ulogin']['avatar']?><!--" class="rounded-circle" width="40" height="40" alt="">-->
<!--                        </div>-->
<!--                    </li>-->



                </ul>






                <textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Ваше ответ..."></textarea>

                <div class="d-flex align-items-left">


                    <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Отправить сообщение</button>
                </div>
            </div>
        </div>
        <!-- /messages -->



    </div>




</div>
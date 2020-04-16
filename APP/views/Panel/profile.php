<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card card-body text-center">
            <div class="mb-3">
                <h6 class="font-weight-semibold mb-0 mt-1"><?= $_SESSION['ulogin']['username'] ?></h6>

                <span class="d-block text-muted"><?= rendertypeaccount($_SESSION['ulogin']['role']) ?></span>


            </div>



            <a href="#" class="d-inline-block mb-3">
                <img src="<?=$_SESSION['ulogin']['avatar']?>" class="rounded-round"
                     width="150" height="150" alt="">
            </a>

            <a href="#" type="button" class=" btn btn-info"><i class="icon-eye mr-2"></i> Посмотреть профиль</a>
            <br>
            <a href="/panel/settings/" type="button" class=" btn btn-warning"><i class="icon-cog5 mr-2"></i> Настройки аккаунта</a>


        </div>


        <ul class="list-group  border-top">

            <a href="#" class="list-group-item list-group-item-action">
                <span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Рейтинг
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Всего звонков
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Успешных
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


        </ul>


    </div>


    <div class="col-xl-9 col-sm-6">

        <div class="card">
            <div class="card-header bg-primary text-white header-elements-inline">
                <h6 class="card-title">Запись аудио презентации</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">



                <div class="col-md-6">

                    <audio autoplay></audio>



                    <button type="button" id="btn-start-recording" class="btn btn-success"><i class="icon-mic2 mr-2"></i> НАЧАТЬ ЗАПИСЬ</button>
                    <button type="button" id="btn-stop-recording" disabled class="btn btn-danger"><i class="icon-mic-off2 mr-2"></i> СТОП</button>

                    <script>


                        // navigator.mediaDevices.getUserMedia({ audio: true})
                        //     .then(stream => {
                        //         const mediaRecorder = new MediaRecorder(stream)});





                    </script>


                </div>



                <div class="col-md-6">

                    Текст записи (которую нужно записать)
                </div>




                </div>

            </div>
        </div>


        <!-- Profile info -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">РЕДАКТИРОВАТЬ ПРОФИЛЬ</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form enctype="multipart/form-data" action="/panel/profile/" method="post" data-fouc>


                    <div class="row">
                        <div class="col-md-6">


                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" disabled value="<?=$_SESSION['ulogin']['email']?>" class="form-control">
                                <span class="form-text text-muted">E-mail возможно изменить только через тикет</span>
                            </div>


                            <div class="form-group">
                            <label>Имя Фамилия<span class="text-danger">*</span></label>
                            <input type="text" name="username" value="<?=$_SESSION['ulogin']['username']?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Роль: <span class="text-danger">*</span> </label>
                                <select data-placeholder="Выберете направление" name="role" class="form-control form-control-select2 required" data-fouc>


                                    <option <?= ($_SESSION['ulogin']['role'] == "O") ? 'selected' : ""?> value="O" >Оператор</option>
                                    <option <?= ($_SESSION['ulogin']['role'] == "R") ? 'selected' : ""?> value="R" >Рекламодатель</option>



                                </select>

                            </div>





                        </div>
                        <div class="col-md-6">

                            <label>Аватар</label>
                            <input type="file" accept="image/*" name="file" class="file-input" data-fouc>
                            <span class="form-text text-muted">Для полноценной работе в сервисе необходимо загрузить аватар</span>





                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Моя презентация: </label>
                                <textarea rows="5" cols="5" name="aboutme"  class="form-control required" placeholder="Обо мне"><?=$_SESSION['ulogin']['aboutme']?></textarea>
                                <span class="form-text text-muted">Это описание будут видеть рекламодаели.</span>
                            </div>
                        </div>


                    </div>




                    <div class="text-left">
                        <button type="submit" class=" btn btn-warning"><i class="icon-pencil mr-2"></i> СОХРАНИТЬ
                            ИЗМЕНЕНИЯ
                        </button>
                    </div>


                </form>
            </div>
        </div>
        <!-- /profile info -->
    </div>
</div>


<script>

    var audio = document.querySelector('audio');

    function captureMicrophone(callback) {
        navigator.mediaDevices.getUserMedia({audio: true}).then(callback).catch(function(error) {
            alert('Нет доступа к микрофону');
            console.error(error);
        });
    }


    var recorder; // globally accessible



    function stopRecordingCallback() {
        var blob = recorder.getBlob();

        console.log(audio)

        audio.src = URL.createObjectURL(blob);
        audio.play();
        audio.muted = false;
        recorder.microphone.stop();
    }



    document.getElementById('btn-start-recording').onclick = function() {
        this.disabled = true;
        captureMicrophone(function(microphone) {
            audio.muted = true;
            setSrcObject(microphone, audio);
            audio.play();


            var options = {
                type: 'audio',
                numberOfAudioChannels: isEdge ? 1 : 2,
                checkForInactiveTracks: true,
                recorderType: StereoAudioRecorder,
                desiredSampRate: 16000,
                leftChannel: false,
                bufferSize: 16384
            };


            if(recorder) {
                recorder.destroy();
                recorder = null;
            }


            recorder = RecordRTC(microphone, options);
            recorder.startRecording();

            // release microphone on stopRecording
            recorder.microphone = microphone;

            document.getElementById('btn-stop-recording').disabled = false;
        });
    };

    document.getElementById('btn-stop-recording').onclick = function() {
        this.disabled = true;

        // $("[id=zayavka]").removeAttr('disabled');

        //  document.getElementById('btn-start-recording').disabled = false;
        recorder.stopRecording(stopRecordingCallback);
    };




    function getFileName(fileExtension) {
        var d = new Date();
        var year = d.getFullYear();
        var month = d.getMonth();
        var date = d.getDate();
        return 'RecordRTC-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
    }

    function getRandomString() {
        if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
            var a = window.crypto.getRandomValues(new Uint32Array(3)),
                token = '';
            for (var i = 0, l = a.length; i < l; i++) {
                token += a[i].toString(36);
            }
            return token;
        } else {
            return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
        }
    }



</script>
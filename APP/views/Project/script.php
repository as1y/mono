<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">СКРИПТ РАЗГОВОРА</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>

    <div class="card-body justify-content-center">

        <div class="form-group">
            <button type="button" id="edit" class="btn btn-warning"><i class="icon-pencil3 mr-2"></i> Редактировать</button>
            <button type="button" id="save" class="btn btn-success"><i class="icon-checkmark3 mr-2"></i> Сохранить</button>
        </div>


        <div class="click2edit">


           <p>Тут необходимо заполнить скрипт разговора</p>





        </div>


    </div>


</div>


<script>

    // Edit
    $('#edit').on('click', function() {
        $('.click2edit').summernote({focus: true});
    })

    // Save
    $('#save').on('click', function() {

        var url='wform';
        var name = 'changescript';
        var idc = <?=$company['id']?>;
        var textsc =  $('.click2edit').summernote('code');

        textsc = encodeURIComponent(textsc);
        str = '&textsc=' + textsc + '&idc=' + idc

        $.ajax(

            {
                url : '/' + url,
                type: 'POST',
                data: name + '_f=1' + str,
                cache: false,
                success: function( result ) {

                    obj = jQuery.parseJSON( result );

                    if ( obj.go ) go( obj.go );
                    else alert( obj.message );
                    location.reload();

                }


            }

        );



        $('.click2edit').summernote('destroy');


    });



</script>
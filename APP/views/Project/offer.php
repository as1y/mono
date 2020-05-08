


<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ПАРАМЕТРЫ ПРЕДЛОЖЕНИЯ</h5>
    </div>

        <div class="card-body justify-content-center">

            <form enctype="multipart/form-data" action="/project/offer/?id=<?=$company['id']?>" method="post" data-fouc>



             <div class="row">


      <div class="col-md-6">
          <div class="form-group">
              <label>Название продукта: <span class="text-danger">*</span></label>
              <input type="text" name="nameproduct" value="<?=$company['nameproduct']?>"  placeholder="Название продукта" class="form-control required">
              <span class="form-text text-muted">Название продукта который планируется предлагать</span>
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
              <div class="form-group">
                  <label>Минимальная ценовая планка:</label>
                  <input type="text" name="minimumprice" value="<?=$company['minimumprice']?>" placeholder="Например: от 10.000" class="form-control">
                  <span class="form-text text-muted">Минимальная цена сделки или контракта</span>
              </div>
          </div>
      </div>



                 <div class="col-md-12">
                     <div class="form-group">
                         <label>Описание продукта: <span class="text-danger">*</span></label>
                         <textarea rows="5" cols="5" name="aboutproduct" class="form-control required"  placeholder="Продукт для малого бизнеса. ЛПР владельцы ИП"><?=$company['aboutproduct']?></textarea>
                         <span class="form-text text-muted">Целевая аудитория продукта. Кто ЛПР.</span>
                     </div>
                 </div>

                 <div class="col-md-12">
                     <div class="form-group">
                         <label>Обучающие или дополнительные материалы: <span class="text-danger">*</span></label>
                         <textarea rows="5" cols="5" name="dopmaterial" class="form-control required"  placeholder="Прочитать про продвижение сайтов. Посмотреть ролик на YouTube"><?=$company['dopmaterial']?></textarea>
                         <span class="form-text text-muted">Что рекомендуется изучить оператору для работы</span>
                     </div>
                 </div>





  </div>



            <input type="hidden" name="idc"  value="<?=$company['id']?>">
            <button type="submit" class=" btn btn-warning"><i class="icon-pencil mr-2"></i> СОХРАНИТЬ</button>
    </form>


        </div>







</div>








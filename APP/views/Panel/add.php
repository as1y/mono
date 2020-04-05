<!-- Wizard with validation -->
<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Добавление проекта</h6>



    </div>

    <form class="wizard-form steps-validation" action="#" data-fouc>
        <h6>Компания</h6>
        <fieldset>
            <div class="row">


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Компания: <span class="text-danger">*</span></label>
                        <input type="text" name="company" class="form-control required" placeholder="Пример: IVC PROJECT">
                        <span class="form-text text-muted">Пример: IVC PROJECT</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>ТРАНСКРИПЦИЯ: <span class="text-danger">*</span></label>
                        <input type="text" name="transkr" class="form-control required" placeholder="ТранскрипциЯ">
                        <span class="form-text text-muted">Операторы точно произносить название компании. Пример: "ЭЙ ВИ СИ ПРОДЖЭКТ"</span>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>URL сайта: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="URL сайта">
                        <span class="form-text text-muted">Пример: www.site.ru</span>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Адрес нахождения: <span class="text-danger">*</span></label>
                        <input type="text" name="adress" class="form-control required" placeholder="Москва, Орликов переулок дом 1">
                        <span class="form-text text-muted">Клиенты иногда спрашивают точное местонахождение.</span>

                    </div>
                </div>



                <div class="col-md-6">


                    <div class="form-group">
                        <label>Сфера деятельности:</label>
                        <select name="tematika" data-placeholder="Выберете направление" class="form-control form-control-select2 required" data-fouc>
                            <option></option>
                            <option value="1">Digital</option>
                            <option value="2">Медицина</option>
                            <option value="3">Банковский сектр</option>
                            <option value="4">Страховка</option>
                        </select>

                        <span class="form-text text-muted">Укажите сферу деятельности, чтобы привлечь операторов с релевантным опытом</span>

                    </div>


                </div>





                <div class="col-md-6">
                    <div class="form-group">
                        <label>Логотип:</label>

                        <div class="uniform-uploader"><input type="file" name="logo" class="form-control-uniform-custom"><span class="filename" style="user-select: none;">Файл не выбран</span><span class="action btn bg-warning" style="user-select: none;">Загрузить</span></div>
                        <span class="form-text text-muted">С логотипом предложение для операторов будет выглядеть привлекательно.</span>

                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>О компании: <span class="text-danger">*</span></label>
                        <textarea rows="5" cols="5" name="aboutcompany" class="form-control required"  placeholder="О компани"></textarea>

                        <span class="form-text text-muted">Короткие и важные факты о компании.</span>
                    </div>
                </div>




            </div>





        </fieldset>

        <h6>Продукт</h6>
        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>University: <span class="text-danger">*</span></label>
                        <input type="text" name="university" placeholder="University name" class="form-control required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                            <option></option>
                            <option value="1">United States</option>
                            <option value="2">France</option>
                            <option value="3">Germany</option>
                            <option value="4">Spain</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Degree level: <span class="text-danger">*</span></label>
                        <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                    </div>

                    <div class="form-group">
                        <label>Specialization:</label>
                        <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>From:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>To:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Language of education:</label>
                        <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Оффер</h6>
        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-company" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label>Position: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-position" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>From:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>To:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Brief description:</label>
                        <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="d-block">Recommendations:</label>
                        <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Настройки</h6>
        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="d-block">Applicant resume:</label>
                        <input type="file" name="resume" class="form-input-styled" data-fouc>
                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Where did you find us? <span class="text-danger">*</span></label>
                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 required" data-fouc>
                            <option></option>
                            <option value="monster">Monster.com</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="google">Google</option>
                            <option value="adwords">Google AdWords</option>
                            <option value="other">Other source</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Availability: <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="availability" class="form-input-styled required" data-fouc>
                                Immediately
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                1 - 2 weeks
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                3 - 4 weeks
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                More than 1 month
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Additional information:</label>
                        <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<!-- /wizard with validation -->
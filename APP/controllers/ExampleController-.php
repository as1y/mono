<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шаги");
$getSteps = $api->getSteps(false, false);
$stepsCount = count($api->getSteps(false, true));
$arUser = $api->getUser($USER->getId(), false);
$userGroups = $USER->GetUserGroupArray();
if (isset($_REQUEST["ARG1"])) {
    $ARG1 = intval($_REQUEST["ARG1"]);
    if($ARG1 == 0) {
        $ARG1 = 1;
    } elseif($ARG1 > $stepsCount) {
        unset($ARG1);
    } else {
        $getSections = $api->getSections($ARG1, false);
        $sectionsCount = count($api->getSections($ARG1, true));
    }
    if (isset($_REQUEST["ARG2"])) {
        $ARG2 = intval($_REQUEST["ARG2"]);
        if($ARG2 == 0) {
            $ARG2 = 1;
        } elseif($ARG2 > $sectionsCount) {
            unset($ARG2);
        } else {
            $getForms = $api->getForms($ARG1, $ARG2, false, false, false);
            $formsCount = count($getForms);
        }
        if (isset($_REQUEST["ARG3"])) {
            $ARG3 = intval($_REQUEST["ARG3"]);

            if($arUser["UF_VIDZAN"] == "Основное место работы" || in_array(1, $userGroups) || in_array(5, $userGroups) || in_array(7, $userGroups) || in_array(8, $userGroups) || in_array(9, $userGroups)) {
            } else {
                if($ARG1 == 1) {
                    if($ARG2 != 1) {
                        unset($ARG1);
                    }
                } elseif($ARG1 == 3) {
                    if($ARG2 != 2) {
                        unset($ARG1);
                    }
                } elseif($ARG1 == 7) {
                    if($ARG2 != 1) {
                        unset($ARG1);
                    }
                    if($ARG3 != 1) {
                        unset($ARG1);
                    }
                }
            }
            if($ARG3 == 0) {
                $ARG3 = 1;
            } elseif($ARG3 > $formsCount) {
                unset($ARG3);
            } else {
                if (isset($_REQUEST["edit"])) {
                    $editID = intval($_REQUEST["edit"]);
                    $getForms = $api->getForms($ARG1, $ARG2, $ARG3, $editID, false);
                } else {
                    $getForms = $api->getForms($ARG1, $ARG2, $ARG3, false, false);
                }
                $getQuestions = $api->getQuestions($ARG1, $ARG2, $ARG3);
            }
        }
    }
}
?>
    <div class="uk-section">
        <div class="middle_inner uk-container uk-container-large">
            <div class="uk-grid-small uk-grid-match uk-child-width-1-4@m uk-text-center" uk-grid>
                <?foreach($getSteps as $step):?>
                    <?
                    $stepId = str_replace("step_", "", $step["UF_XML_ID"]);
                    $stepActive = ($stepId == $ARG1) ? true : false;
                    ?>
                    <div>
                        <a class="uk-link-reset" href="/steps/<?=$stepId;?>/">
                            <div class="uk-card <?if($stepActive):?>uk-card-secondary<?else:?>uk-card-primary<?endif;?> uk-card-hover uk-card-body uk-card-small">
                                <div class="uk-card-badge uk-label"><?=$step["elementsCount"];?></div>
                                <h3 class="uk-card-title">Шаг №<?=$stepId;?></h3>
                                <div class="step_name uk-text-bold"><?=$step["UF_NAME"];?></div>
                            </div>
                        </a>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
<?if(isset($ARG1)):?>
    <div class="uk-section uk-padding-remove-vertical uk-margin-large-bottom">
        <div class="middle_inner uk-container uk-container-large">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-child-width-1-1@s" uk-grid>
                        <?
                        $steps = $api->getSteps($ARG1, false);
                        foreach($steps as $step):
                            $stepId = str_replace("step_", "", $step["UF_XML_ID"]);
                            $sections = $api->getSections($stepId, false);
                            foreach($sections as $section):
                                $sectionId = str_replace("section_".$stepId."_", "", $section["UF_XML_ID"]);
                                $sectionActive = ($sectionId == $ARG2) ? true : false;
                                $forms = $api->getForms($stepId, $sectionId, false, false, false);
                                ?>
                                <div>
                                    <ul class="uk-nav-default uk-nav-parent-icon section-nav" uk-nav="multiple: true">
                                        <li class="uk-parent<?if($sectionActive):?> uk-open<?endif;?>">
                                            <a class="uk-button uk-button-secondary section-nav-parent" href="/steps/<?=$stepId;?>/"><?=$section["UF_NAME"];?></a>
                                            <ul class="uk-nav-sub fa-ul">
                                                <?
                                                foreach($forms as $form):
                                                    $formId = str_replace("form_".$stepId."_".$sectionId."_", "", $form["UF_XML_ID"]);
                                                    $stepsURL = "/steps/".$stepId."/".$sectionId."/".$formId."/";
                                                    ?>
                                                    <li<?if($APPLICATION->GetCurDir() == $stepsURL):?> class="uk-active"<?endif;?>>
                                                        <a href="<?=$stepsURL;?>">
                                                            <span class="fa-li"><img class="iconInLink" src="/local/templates/unlimtech/vendor/font-awesome/svgs/<?if($APPLICATION->GetCurDir() == $stepsURL):?>solid<?else:?>light<?endif;?>/angle-right.svg" uk-svg></span>
                                                            <?=$form["UF_NAME"];?>
                                                            <span class="uk-badge"><?=$form["elementsCount"];?></span>
                                                        </a>
                                                    </li>
                                                <?endforeach;?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            <?endforeach;?>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="uk-width-3-4@m">

                    <?
                    if(isset($ARG2) && isset($ARG3)):
                        foreach($getForms as $form):
                            ?>
                            <?if (!isset($_REQUEST["edit"])):?>
                            <div class="uk-margin" uk-margin>
                                <button class="uk-button uk-button-primary addForm_buttom" type="button" uk-toggle="target: .toogleDiv; animation: uk-animation-fade">
						<span class="addForm_buttom_text_add">
							<img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/plus-square.svg" uk-svg>
							Добавить
					    </span>
                                    <span class="addForm_buttom_text_hide" style="display: none;">
					    	<img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/minus-square.svg" uk-svg>
					    	Скрыть
					    </span>
                                </button>
                            </div>
                        <?endif;?>
                            <?if(isset($form["elementProps"])):?>
                            <div class="uk-margin toogleDiv">
                                <?foreach($form["elementProps"] as $elementEdit):?>
                                    <?
                                    $elementEdit["DETAIL_TEXT"] = json_decode($elementEdit["DETAIL_TEXT"], true);
                                    ?>
                                    <div class="uk-card uk-card-default<?if (!isset($_REQUEST["edit"])):?> uk-card-hover<?endif;?> uk-card-body uk-card-small uk-margin">
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-auto@m">
                                                <div class="">
                                                    <?if((!isset($_REQUEST["edit"])) && ($elementEdit["PROPERTY_STATUS_VALUE"] == 1)):?>
                                                        <a href="?edit=<?=$elementEdit["ID"];?>" class="uk-text-bold">Достижение #<?=$elementEdit["ID"];?> от <?=$elementEdit["DATE_CREATE"];?></a>
                                                    <?else:?>
                                                        Достижение #<?=$elementEdit["ID"];?> от <?=$elementEdit["DATE_CREATE"];?>
                                                    <?endif;?>
                                                </div>
                                                <small>
                                                    Автоматически рассчитанная сумма: <?=money_format('%.0n', $elementEdit["PROPERTY_AUTO_PAY_VALUE"]);?>
                                                </small><br>
                                                <small>
                                                    Утверждённая сумма: <?=money_format('%.0n', $elementEdit["PROPERTY_PAY_VALUE"]);?>
                                                </small><br>
                                                <small>
                                                    Статус:
                                                    <?if($elementEdit["PROPERTY_STATUS_VALUE"] == 1):?>
                                                        черновик
                                                    <?elseif($elementEdit["PROPERTY_STATUS_VALUE"] == 2):?>
                                                        отправлен на комиссию
                                                    <?elseif($elementEdit["PROPERTY_STATUS_VALUE"] == 3):?>
                                                        идёт комиссия
                                                    <?elseif(($elementEdit["PROPERTY_STATUS_VALUE"] == 4) || ($elementEdit["PROPERTY_STATUS_VALUE"] == 5)):?>
                                                        комиссия окончена
                                                    <?endif;?>
                                                </small>
                                            </div>
                                            <?if(($elementEdit["PROPERTY_STATUS_VALUE"] == 1) && (!isset($_REQUEST["edit"]))):?>
                                                <div class="uk-width-expand@m uk-text-right@m">
                                                    <button onclick="sendForm(<?=$elementEdit["ID"];?>)" class="uk-button uk-button-secondary uk-margin-small-bottom">
                                                        <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/check-square.svg" uk-svg> Отправить
                                                    </button>
                                                    <a href="?edit=<?=$elementEdit["ID"];?>" class="uk-button uk-button-primary uk-margin-small-bottom">
                                                        <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/edit.svg" uk-svg> Изменить
                                                    </a>
                                                    <button onclick="deleteForm(<?=$elementEdit["ID"];?>)" class="uk-button uk-button-danger uk-margin-small-bottom">
                                                        <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/trash-alt.svg" uk-svg> Удалить
                                                    </button>
                                                </div>
                                            <?elseif($elementEdit["PROPERTY_STATUS_VALUE"] != 1):?>

                                                <div class="uk-width-expand@m uk-text-right@m">
                                                    <a href="/archive/<?=$elementEdit["ID"];?>/" class="uk-button uk-button-primary">
                                                        <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/info-circle.svg" uk-svg> Информация
                                                    </a>
                                                </div>
                                                <?if(($elementEdit["PROPERTY_STATUS_VALUE"] == 4) || ($elementEdit["PROPERTY_STATUS_VALUE"] == 5)):?>
                                                    <div class="uk-width-1-1">
                                                        <div class="uk-grid-small font14" uk-grid>
                                                            <div class="uk-width-auto@m uk-text-bold">Результат комиссии:</div>
                                                            <div class="uk-width-expand@m">
                                                                <?if($elementEdit["PROPERTY_STATUS_VALUE"] == 4):?>
                                                                    <img class="iconInLink uk-icon-up2 green" src="/local/templates/unlimtech/vendor/font-awesome/svgs/solid/check-circle.svg" uk-svg> Выплата одобрена
                                                                <?elseif($elementEdit["PROPERTY_STATUS_VALUE"] == 5):?>
                                                                    <img class="iconInLink uk-icon-up2 red" src="/local/templates/unlimtech/vendor/font-awesome/svgs/solid/times-circle.svg" uk-svg> В выплате отказано
                                                                <?endif;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?endif;?>
                                            <?endif;?>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        <?endif;?>
                            <form class="uk-form-stacked formAjax toogleDiv" name="formAjax" id="form" method="post" action="" enctype="multipart/form-data" <?if (!isset($_REQUEST["edit"])):?>hidden<?endif;?>>
                                <?=bitrix_sessid_post()?>
                                <input type="hidden" name="formID" value="<?=$form["UF_XML_ID"];?>" />
                                <?if(isset($_REQUEST["edit"])):?>
                                    <input type="hidden" name="elementID" value="<?=$editID;?>" />
                                <?endif;?>
                                <legend class="uk-legend"><?=$form["UF_NAME"];?></legend>
                                <?foreach($getQuestions as $question):?>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="<?=$question["UF_XML_ID"];?>"><?=$question["UF_NAME"];?>:</label>
                                        <?if($question["UF_TEMPLATE"] == 5):?> <?/* Строка */?>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="<?=$question["UF_XML_ID"];?>" name="<?=$question["UF_XML_ID"];?>"<?if(isset($_REQUEST["edit"])):?> value="<?=$elementEdit["DETAIL_TEXT"][$question["UF_XML_ID"]];?>"<?endif;?> type="text" placeholder="">
                                            </div>
                                        <?elseif($question["UF_TEMPLATE"] == 6):?> <?/* Ссылка */?>
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon" uk-icon="icon: link"></span>
                                                <input class="uk-input" id="<?=$question["UF_XML_ID"];?>"<?if (isset($_REQUEST["edit"])):?> value="<?=$elementEdit["DETAIL_TEXT"][$question["UF_XML_ID"]];?>"<?endif;?> name="<?=$question["UF_XML_ID"];?>" type="text" placeholder="https://example.com">
                                            </div>
                                        <?elseif($question["UF_TEMPLATE"] == 7):?> <?/* Файл */?>
                                            <div class="file_container" id="<?=$question["UF_XML_ID"];?>" uk-grid>
                                                <?if (isset($_REQUEST["edit"]) && is_set($elementEdit["PROPERTY_FILES_VALUE"])):?>
                                                    <?foreach($elementEdit["PROPERTY_FILES_VALUE"] as $fileID):
                                                        $arFileValue = CFile::GetFileArray($fileID);
                                                        $findFile = preg_match('/'.$question["UF_XML_ID"].'/', $arFileValue["DESCRIPTION"]);
                                                        if(!empty($findFile)):?>
                                                            <div class="uk-width-1-3@m">
                                                                <div class="uk-grid-small uk-flex-middle file_node" id="file_node_<?=$arFileValue["ID"];?>" uk-grid>
                                                                    <div class="uk-width-auto">
                                                                        <img class="iconInLink_xbig uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/file-alt.svg" uk-svg>
                                                                    </div>
                                                                    <div class="uk-width-expand uk-text-small">
                                                                        <a href="<?=$arFileValue["SRC"];?>" target="_blank"><?=cutFileName($arFileValue["ORIGINAL_NAME"]);?></a><br>
                                                                        <?=humanBytes($arFileValue["FILE_SIZE"]);?>
                                                                    </div>
                                                                    <div class="uk-width-1-1">
                                                                        <a class="uk-button uk-button-danger uk-button-small file_button_delete" onclick="deleteFile(<?=$arFileValue["ID"];?>)">
                                                                            <img class="iconInLink uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/trash-alt.svg" uk-svg> Удалить
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?
                                                        endif;
                                                    endforeach;
                                                endif;?>

                                                <div class="uk-inline uk-width-1-1" id="<?=$question["UF_XML_ID"];?>_node">
                                                    <input class="input_file" type="file" placeholder="Выбрать файл" id="<?=$question["UF_XML_ID"];?>-0" name="<?=$question["UF_XML_ID"];?>-0"><br>
                                                    <input class="input_file" type="file" placeholder="Выбрать файл" id="<?=$question["UF_XML_ID"];?>-1" name="<?=$question["UF_XML_ID"];?>-1"><br>
                                                    <input class="input_file" type="file" placeholder="Выбрать файл" id="<?=$question["UF_XML_ID"];?>-2" name="<?=$question["UF_XML_ID"];?>-2">
                                                </div>
                                            </div>
                                            <div class="uk-text-small uk-text-muted uk-margin-top">Пожалуйста, выберите файл zip или rar с размером не превышающим 30Мб</div>
                                        <?elseif($question["UF_TEMPLATE"] == 8):?> <?/* ФИО */?>
                                            <div class="uk-form-controls">
                                                <button class="uk-button uk-button-default addFio_button" id="<?=$question["UF_XML_ID"];?>" type="button">
                                                    <img class="iconInLink_medium uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/user-plus.svg" uk-svg>
                                                    Добавить
                                                </button>
                                            </div>
                                            <div class="div_addfio uk-margin">
                                                <?
                                                if(isset($_REQUEST["edit"])):
                                                    $arrFioValue = preg_grep('/^'.$question["UF_XML_ID"].'/', array_keys($elementEdit["DETAIL_TEXT"]));
                                                    if($arrFioValue !== null):
                                                        $fioCount = 100;
                                                        foreach($arrFioValue as $fioValue):?>
                                                            <div class="uk-grid-small uk-margin" id="<?=$fioValue;?>_div" uk-grid>
                                                                <div class="uk-width-3-4">
                                                                    <div class="uk-form-controls">
                                                                        <input class="uk-input" id="<?=$fioValue;?>" name="<?=$fioValue;?>_<?=$fioCount;?>" type="text" placeholder="ФИО" value="<?=$elementEdit["DETAIL_TEXT"][$fioValue];?>">
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-1-4">
                                                                    <div class="uk-form-controls">
                                                                        <button class="uk-button uk-button-default addFio_button_delete" id="<?=$fioValue;?>_delete">
                                                                            <img class="iconInLink_medium uk-icon-up1" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/user-minus.svg" uk-svg> Удалить
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?	$fioCount++;
                                                        endforeach;?>
                                                    <?endif;?>
                                                <?endif;?>
                                            </div>
                                        <?elseif($question["UF_TEMPLATE"] == 11):?> <?/* Дата */?>
                                            <div class="uk-inline uk-width-1-1 calendar_div datepicker">
                                                <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                                                <input class="uk-input" id="<?=$question["UF_XML_ID"];?>" name="<?=$question["UF_XML_ID"];?>" type="text" <?if(isset($_REQUEST["edit"])):?> value="<?=$elementEdit["DETAIL_TEXT"][$question["UF_XML_ID"]];?>"<?endif;?>>
                                            </div>
                                        <?elseif(
                                            ($question["UF_TEMPLATE"] == 9)  ||
                                            ($question["UF_TEMPLATE"] == 10) ||
                                            ($question["UF_TEMPLATE"] == 12) ||
                                            ($question["UF_TEMPLATE"] == 13) ||
                                            ($question["UF_TEMPLATE"] == 14) ||
                                            ($question["UF_TEMPLATE"] == 15) ||
                                            ($question["UF_TEMPLATE"] == 16) ||
                                            ($question["UF_TEMPLATE"] == 17) ||
                                            ($question["UF_TEMPLATE"] == 18) ||
                                            ($question["UF_TEMPLATE"] == 19) ||
                                            ($question["UF_TEMPLATE"] == 20) ||
                                            ($question["UF_TEMPLATE"] == 21) ||
                                            ($question["UF_TEMPLATE"] == 22) ||
                                            ($question["UF_TEMPLATE"] == 23) ||
                                            ($question["UF_TEMPLATE"] == 24)
                                        ):?> <?/* Год */?>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" id="<?=$question["UF_XML_ID"];?>" name="<?=$question["UF_XML_ID"];?>">
                                                    <option>– Выберите значение –</option>
                                                    <?
                                                    if($question["UF_TEMPLATE"] == 9)
                                                        $getValue = $api->getYears();
                                                    if($question["UF_TEMPLATE"] == 10)
                                                        $getValue = $api->getMonth();
                                                    if($question["UF_TEMPLATE"] == 12)
                                                        $getValue = $api->getStatus();
                                                    if($question["UF_TEMPLATE"] == 13)
                                                        $getValue = $api->getEduSkill();
                                                    if($question["UF_TEMPLATE"] == 14)
                                                        $getValue = $api->getEduForm();
                                                    if($question["UF_TEMPLATE"] == 15)
                                                        $getValue = $api->getEduSovet();
                                                    if($question["UF_TEMPLATE"] == 16)
                                                        $getValue = $api->getEduPosition();
                                                    if($question["UF_TEMPLATE"] == 17)
                                                        $getValue = $api->getEduFormatConf();
                                                    if($question["UF_TEMPLATE"] == 18)
                                                        $getValue = $api->getEduFormatOlimp();
                                                    if($question["UF_TEMPLATE"] == 19)
                                                        $getValue = $api->getOlimpList();
                                                    if($question["UF_TEMPLATE"] == 20)
                                                        $getValue = $api->getQuartile();
                                                    if($question["UF_TEMPLATE"] == 21)
                                                        $getValue = $api->getBookBrand();
                                                    if($question["UF_TEMPLATE"] == 22)
                                                        $getValue = $api->getSemestr();
                                                    if($question["UF_TEMPLATE"] == 23)
                                                        $getValue = $api->getSport();
                                                    if($question["UF_TEMPLATE"] == 24)
                                                        $getValue = $api->getMale();

                                                    foreach($getValue as $value):
                                                        ?>
                                                        <option value="<?=$value["UF_XML_ID"];?>"<?if((isset($_REQUEST["edit"])) && ($elementEdit["DETAIL_TEXT"][$question["UF_XML_ID"]] == $value["UF_XML_ID"])):?> selected<?endif;?>>
                                                            <?=$value["UF_NAME"];?>
                                                        </option>
                                                    <?endforeach;?>
                                                </select>
                                            </div>
                                        <?endif;?>
                                    </div>
                                <?endforeach;?>

                                <div class="uk-margin form-submit uk-text-right@m" id="form-submit" uk-margin>
                                    <a href="<?='/steps/'.$ARG1.'/'.$ARG2.'/'.$ARG3.'/';?>" class="uk-button uk-button-danger">
                                        <?if(isset($_REQUEST["edit"])):?>
                                            <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/arrow-to-left.svg" uk-svg> Назад
                                        <?else:?>
                                            <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/ban.svg" uk-svg> Отмена
                                        <?endif;?>
                                    </a>
                                    <div onclick="<?if(isset($_REQUEST["edit"])):?>editForm();<?else:?>addForm();<?endif;?>" class="uk-button uk-button-primary">
                                        <?if(isset($_REQUEST["edit"])):?>
                                            <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/edit.svg" uk-svg> Изменить
                                        <?else:?>
                                            <img class="iconInLink_big uk-icon-up2" src="/local/templates/unlimtech/vendor/font-awesome/svgs/light/save.svg" uk-svg> Сохранить
                                        <?endif;?>
                                    </div>
                                </div>
                            </form>
                        <?endforeach;?>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>

<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?php
class LocatorClass {
    public $locator_login = '//input[@id="inputLogin"]';
    
    public $locator_password = '//input[@id="inputPassword"]';

    public $locator_logo = '//img[@src="/eks/im/cus_logo.png"]';

    public $locator_submit = '//button[@type="submit"]';

    public $locator_project = '//div[@class="bm_nav_menu_td"]//span[text()="Проекты "]';

    public $locator_test_object = '//ul[@class="dropdown-menu show"]//a[text()="Тестовый"]';

    public $locator_shcool = '//ul[@class="dropdown-menu "]//a[text()="школа № 74."]';

    public $locator_project_management = '//ul[@id="compound_page_tabs_icons"]//a[@title="Управление проектом"]';

    public $locator_categor = '//div[@class="structural_left_menu"]//div[text()="Категории"]';

    public $locator_register_contracts = '//a[@data-subtab="contracts"]';

    public $locator_flag_contract = '//div[@class="wo_header_block_container_title"]//span[text()="Контракты"]';

    public $locator_btn_add_contract = '//a[@class="iframeEditor btn btn-primary pm_doc_add"]';

    public $locator_btn_create = '//a[@class="btn btn-primary btn-iframe-save-override"]';

    public $locator_iframe = '//iframe[@class="modal-iframe"]';

    public $locator_field_number = '//input[@name="formData[num]"]';

    public $locator_flag_validate = '//div[text()="Поля Вид контракта, Заказчик должны быть непустыми"]';

    public $locator_directory = '//ul[@class="bm_nav_menu"]//span[text()="Справочники "]';

    public $locator_doc_directory = '//ul[@class="dropdown-menu show"]//a[text()="Документы"]';

    public $locator_document_type = '//div[@class="form-group input_row"]//label[text()="Тип документа"]';

    public $locator_field_type_contract = '//div[@class="lib_edit_tbl_field lib_edit_tbl_field_contracts_type lib_edit_tbl_field_big"]//div[@class="lib_edit_tbl_field_value"]';

    public $locator_element = '//div[@class="modal fade show"]//tr[@id="modal_items_table_tr_1"]//a[@title="Проведение работ по обследованию здания"]';

    public $locator_flag_validate_new = '//div[text()="Поля Заказчик должны быть непустыми"]';

    public $locator_information_smoke = [
                                    '//div[@class="build_object_tab_info_ur"]',
                                    '//div[@class="build_object_tab_info_fiz"]',
                                    '//div[@class="build_object_tab_info_buscor"]',
                                    '//div[@class="build_object_tab_info_cameras"]',
                                    '//div[@class="build_object_tab_info_questions"]',
                                    '//div[@class="build_object_tab_info_lands"]',
                                    '//div[@class="build_object_tab_info_lands"]',
                                    '//div[@class="build_object_tab_info_files"]',
                                    '//div[@class="build_object_tab_info_gallery"]'
                                    ];
    public $locator_passport_smoke = array(
        '//a[@data-subtab="passport"]' => ['//div[@class="passport-logo-wrap"]'],
        '//a[@data-subtab="geo"]' => ['//ymaps[@class="ymaps-2-1-79-map"]'],
        '//a[@data-subtab="finance_info"]' => ['//div[@class="card card-default card-no-mb"]'],
        '//a[@data-subtab="indicators"]' => [
                                            '//a[@class="btn btn-success ajaxButton"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_1"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_3"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_9"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_23"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_25"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_41"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_63"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_105"]',
                                            '//div[@class="card_item_ind_section card_item_ind_section_114"]'
                                            ],
        '//a[@data-subtab="finance"]' => ['//a[@class="btn btn-success iframeEditor"]', '//div[@id="monitoring_finance_container"]'],
        '//a[@data-subtab="gallery"]' => ['//div[@class="wo_header_block_container_actions"]', '//div[@id="page_passport_gallery"]'],
        '//a[@data-subtab="files_list"]' => ['//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'],
        '//a[@data-subtab="questions"]' => ['//a[@class="btn btn-success iframeEditor"]', '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'],
        '//a[@data-subtab="tasks"]' => ['//a[@class="btn btn-success iframeEditor"]', '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]']
    );

    public $locator_sed_smoke = [
                                '//div[@class="exchange_categories"]',
                                '//div[@class="exchange_wrapper"]',
                                '//div[@class="exchange_messages_srch"]',
                                '//a[@class="iframeEditor btn btn-primary exchange_add"]',
                                '//a[@class="btn btn-default dropdown-toggle"]'
                                ];

    public $locator_estimates_smoke = array(
        '//a[@data-subtab="smeta_list"]' => [
                                            '//a[@class="btn btn-success"]',
                                            '//a[text()=" Загрузить смету "]',
                                            '//a[text()=" Загрузить ВОР "]',
                                            '//a[@class="dropdown-toggle btn btn-info"]',
                                            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
                                            ],
        '//a[@data-subtab="smeta_compare"]' => [
                                                '//div[@class="smeta_compare_form_block first"]',
                                                '//div[@class="smeta_compare_form_block second"]',
                                                '//button[@class="btn btn-success"]'
                                               ] 
    );

    public $locator_project_management_smoke = array(
        '//a[@data-subtab="contracts"]' => [
                                            '//div[@class="structural_left_menu"]',
                                            '//a[@class="iframeEditor btn btn-primary pm_doc_add"]',
                                            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
                                           ],
        '//a[@data-subtab="docs"]' => [
                                        '//div[@class="structural_left_menu"]',
                                        '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]',
                                        '//a[@class="iframeEditor btn btn-primary pm_doc_add"]'
                                      ],
        '//a[@data-subtab="pm_docs"]' => [
                                            '//div[@class="structural_left_menu"]',
                                            '//div[@class="wo_header_block_container"]//a[@class="btn btn-primary"]',
                                            '//a[@class="iframeEditor btn btn-primary pm_doc_add"]',
                                            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
                                         ],
        '//a[@data-subtab="pm_docs2"]' => [
                                            '//div[@class="tl_ex_title"]',
                                            '//a[text()="Заполнить по шаблону"]',
                                            '//a[text()="Рассчитать сетевой график"]',
                                            '//div[@class="tl_ex_left"]',
                                            '//div[@class="tl_ex_aux"]'
                                          ],
        '//a[@data-subtab="pm_versions"]' => [
                                                '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]',
                                                '//a[@class="iframeEditor btn btn-primary pm_doc_add ml-2"]'
                                             ]
    );

    public $locator_gpr = array(
        '//a[@data-subtab="dates"]' => [
            '//div[@class="gpr-mode-item-wrap"]',
            '//a[@class="btn btn-icon btn-default"]',
            '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
            '//div[@class="gpr_global_actions_sel"]//span[text()="Стадия"]',
            '//div[@class="gpr_global_actions_sel"]//span[text()="Версия"]',
            '//div[@class="gpr_container"]'
        ],
        '//a[@data-subtab="pods"]' => [
            '//div[@class="gpr_global_title"]',
            '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
            '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
            '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
            '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
            '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
            '//div[@class="gpr-mode-item-wrap"]',
            '//a[@class="btn btn-icon btn-default"]',
            '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
            '//div[@class="gpr_container"]'
        ],
        '//a[text()="Этапы планирования"]' => [
            '//div[@class="gpr_global_actions_sel"]//span[text()="Стадия"]',
            '//div[@class="gpr_global_actions_sel"]//span[text()="Версия"]',
            '//div[@class="gpr-mode-item-wrap"]',
            '//a[@class="btn btn-icon btn-default"]',
            '//div[@class="gpr_global_actions"]//a[@class="btn btn-primary"]',
            '//div[@class="sticky_tbl_container sticky_tbl_container_left"]',
            '//div[@class="gpr_container"]'
        ],
        '//a[@data-subtab="stages"]' => [
            '//div[@class="wo_header_block_container_title"]',
            '//a[@class="btn btn-primary iframeEditor"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="versions"]' => [
            '//div[@class="wo_header_block_container_title"]',
            '//a[@class="btn btn-primary iframeEditor"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="gpr_docs"]' => [
            '//div[@class="wo_header_block_container_title"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
        ]
    );

    public $locator_gpr_schedule = array(
        '1' => array (
            '//a[@data-subtab="gr_mat"]' => [
                '//div[text()="График потребления материалов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
                '//div[@class="gpr-mode-item-wrap"]',
                '//a[@class="btn btn-icon btn-default"]',
                '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="gpr_container"]'
            ]
            ),
        '2' => array (
            '//a[@data-subtab="gr_works"]' => [
                '//div[text()="График объемов работ"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
                '//div[@class="gpr-mode-item-wrap"]',
                '//a[@class="btn btn-icon btn-default"]',
                '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="gpr_container"]'
            ]
            ),
        '3' => array (
            '//a[@data-subtab="gr_machines"]' => [
                '//div[text()="График - машины и механизмы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
                '//div[@class="gpr-mode-item-wrap"]',
                '//a[@class="btn btn-icon btn-default"]',
                '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="gpr_container"]'
            ]
            ),
        '4' => array (
            '//a[@data-subtab="gr_workforce"]' => [
                '//div[text()="График - рабочая сила и кадры"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
                '//div[@class="gpr-mode-item-wrap"]',
                '//a[@class="btn btn-icon btn-default"]',
                '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="gpr_container"]'
            ]
            ),
        '5' => array (
            '//a[@data-subtab="cumulative"]' => [
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Суммы"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Кварталам"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Отдельный"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": Из документов"]',
                '//span[@class="dropdown gpr_options_selector"]//span[text()=": В позиции"]',
                '//div[@class="gpr-mode-item-wrap"]',
                '//a[@class="btn btn-icon btn-default"]',
                '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="gpr_container"]'
            ]
        )
    );

    public $locator_analytical_tables = array(
        '//a[@data-subtab="tables"]' => [
            '//span[text()="Аналитические таблицы"]',
            '//a[@class="btn btn-primary iframeEditor"]',
            '//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-primary"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ]
    );

    public $locator_id_registries = array(
        '//a[@data-subtab="docs"]' => [
            '//div[@class="structural_left_menu"]//div[text()="Категории"]',
            '//div[@class="structural_left_menu"]//a[@title="Добавить раздел"]',
            '//div[@class="structural_left_menu"]//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Все документы"]',
            '//span[@class="dropdown docs_id_create_doc_list"]//a[@class="dropdown-toggle btn btn-success"]',
            '//span[@class="dropdown"]//a[@class="dropdown-toggle btn btn-success"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="ks"]' => [
            '//div[@class="structural_left_menu"]//div[text()="Категории"]',
            '//div[@class="structural_left_menu"]//a[@title="Добавить раздел"]',
            '//div[@class="structural_left_menu"]//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Акты КС: "]',
            '//span[@class="dropdown"]//a[@class="dropdown-toggle btn btn-success"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="akt"]' => [
            '//div[@class="structural_left_menu"]//div[text()="Категории"]',
            '//div[@class="structural_left_menu"]//a[@title="Добавить раздел"]',
            '//div[@class="structural_left_menu"]//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Акты: "]',
            '//a[@class="wo_header_block_action"]',
            '//span[@class="dropdown"]//a[@class="dropdown-toggle btn btn-success"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="common_doc"]' => [
            '//div[@class="structural_left_menu"]//div[text()="Категории"]',
            '//div[@class="structural_left_menu"]//a[@title="Добавить раздел"]',
            '//div[@class="structural_left_menu"]//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Общие документы"]',
            '//a[@class="iframeEditor btn btn-primary docs_id_create_doc"]',
            '//span[@class="dropdown"]//a[@class="dropdown-toggle btn btn-success"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="analitic"]' => [
            '//div[@id="doc_notices_chart_rating_docs_acts"]',
            '//div[@id="doc_notices_chart_rating_docs_acts_from"]',
            '//div[@id="doc_notices_chart_rating_docs_notices_percent"]',
            '//div[@id="doc_notices_chart_rating_docs_notices_category"]',
            '//div[@id="doc_notices_chart_rating_docs_notices_from"]',
            '//div[@id="doc_notices_chart_rating_docs_notices_to"]'
        ],
        '//a[@data-subtab="registry"]' => [
            '//div[@class="structural_left_menu"]//div[text()="Категории"]',
            '//div[@class="structural_left_menu"]//a[@title="Добавить раздел"]',
            '//div[@class="structural_left_menu"]//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Реестры"]',
            '//a[@class="btn btn-primary iframeEditor"]',
            '//a[@class="wo_header_block_action dropdown-toggle"]',
            '//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ]
    );

    public $locator_pir = array(
        '//a[@data-subtab="pir_task_ii"]' => [
            '//div[@class="pir_view_wrapper wo_container"]//span[text()="Задания на инженерные изыскания"]',
            '//div[@class="pir_view_wrapper wo_container"]//div[@class="wo_header_block_container_actions"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]',
            '//div[@class="pir_view_wrapper wo_container"]//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
            '//div[@class="pir_view_wrapper wo_container"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="pir_task"]' => [
            '//div[@class="pir_view_wrapper wo_container"]//span[text()="Задания на ПИР"]',
            '//div[@class="pir_view_wrapper wo_container"]//div[@class="wo_header_block_container_actions"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]',
            '//div[@class="pir_view_wrapper wo_container"]//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
            '//div[@class="pir_view_wrapper wo_container"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="pir_gpr"]' => [
            '//div[@class="gpr_global_actions_sel"]',
            '//div[@class="gpr-mode-item-wrap"]//div[@class="gpr-mode-item active"]//a[text()="Даты"]',
            '//div[@class="gpr-mode-item-wrap"]//div[@class="gpr-mode-item "]//a[text()="Гант"]',
            '//div[@class="gpr-mode-item-wrap"]//div[@class="gpr-mode-item "]//a[text()="Аналитика"]',
            '//div[@class="gpr_global_right_actions"]//a[@title="Колонки таблицы"]',
            '//div[@class="gpr_global_right_actions"]//a[@class="btn btn-primary"]',
            '//div[@class="gpr_scroll_container modern-scrollbar"]',
            '//div[@class="sticky_tbl_container sticky_tbl_container_left"]'
        ],
        '//a[@data-subtab="pir_closed"]' => [
            '//div[@class="pir_view_wrapper wo_container"]//span[text()="Закрытие"]',
            '//div[@class="pir_view_wrapper wo_container"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]',
            '//div[@class="pir_view_wrapper wo_container"]//a[@title="Опции"]',
            '//div[@class="pir_view_wrapper wo_container"]//a[@data-title="Фильтр"]',
            '//div[@class="pir_view_wrapper wo_container"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="pir_analitic"]' => [
            '//div[@id="pir_chart_rating_pir_status"]',
            '//div[@id="pir_chart_rating_pir_agreement_status"]',
            '//div[@id="pir_chart_rating_pir_notices"]',
            '//div[@id="pir_chart_rating_pir_type"]',
            '//div[@id="pir_chart_rating_pir_authors"]',
            '//div[@id="pir_chart_rating_pir_responsible"]'
        ]
    );

    public $locator_pir_schedule = array(
        '1' => array(
            '//a[@data-subtab="pir_docs_reuse"]' => [
                '//div[@class="tree_list_header"]//div[text()="Категории"]',
                '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
                '//div[@class="tree_list_table tree_list_root_table"]',
                '//div[@class="wo_header_block_container_title"]//span[text()="Документы повторного применения"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]',
                '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
                '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
                '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
            ]
        ),
        '2' => array(
            '//a[@data-subtab="pir_docs"]' => [
                '//div[@class="tree_list_header"]//div[text()="Категории"]',
                '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
                '//div[@class="tree_list_table tree_list_root_table"]',
                '//div[@class="wo_header_block_container_title"]//span[text()="Все документы"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="dropdown-toggle btn btn-success"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-primary"]//i[@class="fas fa-bars"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-primary"]//i[@class="fas fa-print"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]',
                '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
                '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
                '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
            ]
        ),
        '3' => array(
            '//a[@data-subtab="pir_rejected"]' => [
                '//div[@class="tree_list_header"]//div[text()="Категории"]',
                '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
                '//div[@class="tree_list_table tree_list_root_table"]',
                '//div[@class="wo_header_block_container_title"]//span[text()="Отклоненная"]',
                '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
                '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
                '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
            ]
        ),
        '4' => array(
            '//a[@data-subtab="pir_outcome"]' => [
                '//div[@class="tree_list_header"]//div[text()="Категории"]',
                '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
                '//div[@class="tree_list_table tree_list_root_table"]',
                '//div[@class="wo_header_block_container_title"]//span[text()="Выполненная"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="wo_header_block_action"]',
                '//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-primary"]',
                '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
                '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
            ]
        ),
    );

    public $locator_bim = array(
        '//a[@data-subtab="models"]' => [
            '//div[@class="tree_list_header"]//div[text()="Разделы"]',
            '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
            '//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Модели"]',
            '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
            '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
            '//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="bim_notices"]' => [
            '//div[@class="tree_list_header"]//div[text()="Разделы"]',
            '//div[@class="tree_list_header"]//a[@class="btn btn-info btn-icon"]',
            '//div[@class="tree_list_table tree_list_root_table"]',
            '//div[@class="wo_header_block_container_title"]//span[text()="Замечания к моделям"]',
            '//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
            '//div[@class="wo_header_block_container_actions"]//a[@data-title="Фильтр"]',
            '//div[@class="bim_server_content wo-container wo-mobile"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ]
    );

    public $locator_sk = array(
        '//a[@data-subtab="sk_checks"]' => [
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_checks"]//div[@class="wo_header_block_container_title"]//span[text()="Стройконтроль"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_checks"]//a[@class="btn btn-default"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_checks"]//a[@class="wo_header_block_action"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_checks"]//a[@title="Опции"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_checks"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="checking_acts"]' => [
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//span[text()="Стройконтроль"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//a[@class="wo_header_block_action"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//a[@class="btn btn-primary iframeEditor"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//a[@title="Опции"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//a[@data-title="Фильтр"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_checking_acts"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="sk_precept"]' => [
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_precept"]//span[text()="Стройконтроль"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_precept"]//a[@class="wo_header_block_action"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_precept"]//a[@title="Опции"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_precept"]//a[@data-title="Фильтр"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_precept"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="notices_all"]' => [
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_notices_all"]//span[text()="Стройконтроль"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_notices_all"]//a[@class="wo_header_block_action"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_notices_all"]//a[@title="Опции"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_notices_all"]//a[@data-title="Фильтр"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_notices_all"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="sk_elimination_acts"]' => [
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//span[text()="Стройконтроль"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//a[@class="wo_header_block_action"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//a[@class="btn btn-primary iframeEditor"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//a[@title="Опции"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//a[@data-title="Фильтр"]',
            '//div[@class="stroycontrol_subtab stroycontrol_subtab_sk_elimination_acts"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
        ],
        '//a[@data-subtab="analitic"]' => [
            '//div[@id="notice_chart_rating_notices_category"]',
            '//div[@id="notice_chart_rating_notices_status"]',
            '//div[@id="notice_chart_rating_executors"]',
            '//div[@id="notice_chart_rating_authors"]'
        ]
    );

    public $locator_journals = [
        '//div[@id="compound_page_tab_journals"]//span[text()="Журналы"]',
        '//div[@id="compound_page_tab_journals"]//a[@class="btn btn-info iframeEditor"]',
        '//div[@id="compound_page_tab_journals"]//a[@title="Опции"]',
        '//div[@id="compound_page_tab_journals"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
    ];

    public $locator_reports = [
        '//div[@id="compound_page_tab_reports"]//div[text()="Категории"]',
        '//div[@id="compound_page_tab_reports"]//a[@title="Добавить раздел"]',
        '//div[@id="compound_page_tab_reports"]//div[@class="tree_list_table tree_list_root_table"]',
        '//div[@id="compound_page_tab_reports"]//div[@class="wo_header_block_container_title"]//span[text()="Информационные отчеты"]',
        '//div[@id="compound_page_tab_reports"]//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-success ajaxButton"]',
        '//div[@id="compound_page_tab_reports"]//div[@class="wo_header_block_container_actions"]//a[@class="btn btn-success iframeEditor"]',
        '//div[@id="compound_page_tab_reports"]//div[@class="wo_header_block_container_actions"]//a[@title="Опции"]',
        '//div[@id="compound_page_tab_reports"]//table[@class="table table-striped table-condensed table-bordered report_table table-hover table-items-list"]'
    ];
}
?>
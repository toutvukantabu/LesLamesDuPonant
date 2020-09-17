<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/amhe' => [[['_route' => 'amhe_index', '_controller' => 'App\\Controller\\AMHEController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/amhe/new' => [[['_route' => 'amhe_new', '_controller' => 'App\\Controller\\AMHEController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category/forum' => [[['_route' => 'category_forum_index', '_controller' => 'App\\Controller\\CategoryForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/forum/new' => [[['_route' => 'category_forum_new', '_controller' => 'App\\Controller\\CategoryForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/message' => [[['_route' => 'contact_message_index', '_controller' => 'App\\Controller\\ContactMessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/message/new' => [[['_route' => 'contact_message_new', '_controller' => 'App\\Controller\\ContactMessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/discipline' => [[['_route' => 'discipline_index', '_controller' => 'App\\Controller\\DisciplineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/discipline/new' => [[['_route' => 'discipline_new', '_controller' => 'App\\Controller\\DisciplineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/faq' => [[['_route' => 'faq_index', '_controller' => 'App\\Controller\\FaqController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/faq/new' => [[['_route' => 'faq_new', '_controller' => 'App\\Controller\\FaqController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/home/discipline' => [[['_route' => 'home_discipline_index', '_controller' => 'App\\Controller\\HomeDisciplineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/home/discipline/new' => [[['_route' => 'home_discipline_new', '_controller' => 'App\\Controller\\HomeDisciplineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/info' => [[['_route' => 'home_info_index', '_controller' => 'App\\Controller\\HomeInfoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/info/new' => [[['_route' => 'home_info_new', '_controller' => 'App\\Controller\\HomeInfoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pictures' => [[['_route' => 'home_pictures_index', '_controller' => 'App\\Controller\\HomePicturesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/pictures/new' => [[['_route' => 'home_pictures_new', '_controller' => 'App\\Controller\\HomePicturesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/section-forumadmin' => [[['_route' => 'home_section_forum_index', '_controller' => 'App\\Controller\\HomeSectionForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/section-forum/new' => [[['_route' => 'home_section_forum_new', '_controller' => 'App\\Controller\\HomeSectionForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/how/we/are' => [[['_route' => 'how_we_are_index', '_controller' => 'App\\Controller\\HowWeAreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/how/we/are/new' => [[['_route' => 'how_we_are_new', '_controller' => 'App\\Controller\\HowWeAreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum/section' => [[['_route' => 'le_forum', '_controller' => 'App\\Controller\\LeForumController::index'], null, null, null, false, false, null]],
        '/lesamhe' => [[['_route' => 'les_amhe', '_controller' => 'App\\Controller\\LesAMHEController::index'], null, null, null, false, false, null]],
        '/disciplines' => [[['_route' => 'les_disciplines', '_controller' => 'App\\Controller\\LesDisciplinesController::index'], null, null, null, false, false, null]],
        '/infos' => [[['_route' => 'les_infos', '_controller' => 'App\\Controller\\LesInfosController::index'], null, null, null, false, false, null]],
        '/admin/LLDP' => [[['_route' => 'les_lames_du_ponant_index', '_controller' => 'App\\Controller\\LesLamesDuPonantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/LLDP/new' => [[['_route' => 'les_lames_du_ponant_new', '_controller' => 'App\\Controller\\LesLamesDuPonantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/famille-medievale' => [[['_route' => 'medieval_family_index', '_controller' => 'App\\Controller\\MedievalFamilyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/famille-medievale/new' => [[['_route' => 'medieval_family_new', '_controller' => 'App\\Controller\\MedievalFamilyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/message/forum' => [[['_route' => 'message_forum_index', '_controller' => 'App\\Controller\\MessageForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/message/forum/new' => [[['_route' => 'message_forum_new', '_controller' => 'App\\Controller\\MessageForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/subject/forum' => [[['_route' => 'subject_forum_index', '_controller' => 'App\\Controller\\SubjectForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/subject/forum/new' => [[['_route' => 'subject_forum_new', '_controller' => 'App\\Controller\\SubjectForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/timestamp' => [[['_route' => 'time_stamp_index', '_controller' => 'App\\Controller\\TimeStampController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/timestamp/new' => [[['_route' => 'time_stamp_new', '_controller' => 'App\\Controller\\TimeStampController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|amhe/(?'
                        .'|([^/]++)(?'
                            .'|(*:198)'
                            .'|/edit(*:211)'
                            .'|(*:219)'
                        .')'
                        .'|supprimer/([^/]++)(*:246)'
                        .'|activer/([^/]++)(*:270)'
                    .')'
                    .'|category/forum/(?'
                        .'|([^/]++)(?'
                            .'|(*:308)'
                            .'|/edit(*:321)'
                            .'|(*:329)'
                        .')'
                        .'|supprimer/([^/]++)(*:356)'
                        .'|activer/([^/]++)(*:380)'
                    .')'
                    .'|discipline/(?'
                        .'|([^/]++)(?'
                            .'|(*:414)'
                            .'|/edit(*:427)'
                            .'|(*:435)'
                        .')'
                        .'|supprimer/([^/]++)(*:462)'
                        .'|activer/([^/]++)(*:486)'
                    .')'
                    .'|fa(?'
                        .'|q/(?'
                            .'|([^/]++)(?'
                                .'|(*:516)'
                                .'|/edit(*:529)'
                                .'|(*:537)'
                            .')'
                            .'|supprimer/([^/]++)(*:564)'
                        .')'
                        .'|mille\\-medievale/(?'
                            .'|([^/]++)(?'
                                .'|(*:604)'
                                .'|/edit(*:617)'
                                .'|(*:625)'
                            .')'
                            .'|supprimer/([^/]++)(*:652)'
                            .'|activer/([^/]++)(*:676)'
                        .')'
                    .')'
                    .'|ho(?'
                        .'|me/discipline/(?'
                            .'|([^/]++)(?'
                                .'|(*:719)'
                                .'|/edit(*:732)'
                                .'|(*:740)'
                            .')'
                            .'|supprimer/([^/]++)(*:767)'
                            .'|activer/([^/]++)(*:791)'
                        .')'
                        .'|w/we/are/(?'
                            .'|([^/]++)(?'
                                .'|(*:823)'
                                .'|/edit(*:836)'
                                .'|(*:844)'
                            .')'
                            .'|supprimer/([^/]++)(*:871)'
                            .'|activer/([^/]++)(*:895)'
                        .')'
                    .')'
                    .'|info/(?'
                        .'|([^/]++)(?'
                            .'|(*:924)'
                            .'|/edit(*:937)'
                            .'|(*:945)'
                        .')'
                        .'|supprimer/([^/]++)(*:972)'
                        .'|activer/([^/]++)(*:996)'
                    .')'
                    .'|pictures/([^/]++)(?'
                        .'|(*:1025)'
                        .'|/edit(*:1039)'
                        .'|(*:1048)'
                    .')'
                    .'|s(?'
                        .'|ection\\-forum/(?'
                            .'|([^/]++)(?'
                                .'|(*:1090)'
                                .'|/edit(*:1104)'
                                .'|(*:1113)'
                            .')'
                            .'|supprimer/([^/]++)(*:1141)'
                            .'|activer/([^/]++)(*:1166)'
                        .')'
                        .'|ubject/forum/(?'
                            .'|([^/]++)(?'
                                .'|(*:1203)'
                                .'|/edit(*:1217)'
                                .'|(*:1226)'
                            .')'
                            .'|supprimer/([^/]++)(*:1254)'
                            .'|activer/([^/]++)(*:1279)'
                        .')'
                    .')'
                    .'|LLDP/(?'
                        .'|([^/]++)(?'
                            .'|(*:1309)'
                            .'|/edit(*:1323)'
                            .'|(*:1332)'
                        .')'
                        .'|supprimer/([^/]++)(*:1360)'
                        .'|activer/([^/]++)(*:1385)'
                    .')'
                    .'|message/forum/(?'
                        .'|([^/]++)(?'
                            .'|(*:1423)'
                            .'|/edit(*:1437)'
                            .'|(*:1446)'
                        .')'
                        .'|supprimer/([^/]++)(*:1474)'
                        .'|activer/([^/]++)(*:1499)'
                    .')'
                    .'|timestamp/(?'
                        .'|([^/]++)(?'
                            .'|(*:1533)'
                            .'|/edit(*:1547)'
                            .'|(*:1556)'
                        .')'
                        .'|supprimer/([^/]++)(*:1584)'
                        .'|activer/([^/]++)(*:1609)'
                    .')'
                .')'
                .'|/contact/message/(?'
                    .'|([^/]++)(?'
                        .'|(*:1651)'
                        .'|/edit(*:1665)'
                        .'|(*:1674)'
                    .')'
                    .'|supprimer/([^/]++)(*:1702)'
                .')'
                .'|/forum/categories/(?'
                    .'|([^/]++)(*:1741)'
                    .'|sujet/([^/]++)(*:1764)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1810)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1839)'
                        .'|/edit(*:1853)'
                        .'|(*:1862)'
                    .')'
                    .'|supprimer/([^/]++)(*:1890)'
                    .'|activer/([^/]++)(*:1915)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'amhe_show', '_controller' => 'App\\Controller\\AMHEController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'amhe_edit', '_controller' => 'App\\Controller\\AMHEController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'amhe_delete', '_controller' => 'App\\Controller\\AMHEController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        246 => [[['_route' => 'supprimer_amhe', '_controller' => 'App\\Controller\\AMHEController::supprimer'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'activer_amhe', '_controller' => 'App\\Controller\\AMHEController::activerAMHE'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'category_forum_show', '_controller' => 'App\\Controller\\CategoryForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'category_forum_edit', '_controller' => 'App\\Controller\\CategoryForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'category_forum_delete', '_controller' => 'App\\Controller\\CategoryForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        356 => [[['_route' => 'supprimer_category_forum', '_controller' => 'App\\Controller\\CategoryForumController::supprimer'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'activer_category_forum', '_controller' => 'App\\Controller\\CategoryForumController::activerAMHE'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'discipline_show', '_controller' => 'App\\Controller\\DisciplineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'discipline_edit', '_controller' => 'App\\Controller\\DisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        435 => [[['_route' => 'discipline_delete', '_controller' => 'App\\Controller\\DisciplineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        462 => [[['_route' => 'supprimer_discipline', '_controller' => 'App\\Controller\\DisciplineController::supprimer'], ['id'], null, null, false, true, null]],
        486 => [[['_route' => 'activer_discipline', '_controller' => 'App\\Controller\\DisciplineController::activerdiscipline'], ['id'], null, null, false, true, null]],
        516 => [[['_route' => 'faq_show', '_controller' => 'App\\Controller\\FaqController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'faq_edit', '_controller' => 'App\\Controller\\FaqController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        537 => [[['_route' => 'faq_delete', '_controller' => 'App\\Controller\\FaqController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        564 => [[['_route' => 'supprimer_FAQ', '_controller' => 'App\\Controller\\FaqController::supprimer'], ['id'], null, null, false, true, null]],
        604 => [[['_route' => 'medieval_family_show', '_controller' => 'App\\Controller\\MedievalFamilyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        617 => [[['_route' => 'medieval_family_edit', '_controller' => 'App\\Controller\\MedievalFamilyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'medieval_family_delete', '_controller' => 'App\\Controller\\MedievalFamilyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        652 => [[['_route' => 'supprimer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::supprimer'], ['id'], null, null, false, true, null]],
        676 => [[['_route' => 'activer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::activer'], ['id'], null, null, false, true, null]],
        719 => [[['_route' => 'home_discipline_show', '_controller' => 'App\\Controller\\HomeDisciplineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        732 => [[['_route' => 'home_discipline_edit', '_controller' => 'App\\Controller\\HomeDisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        740 => [[['_route' => 'home_discipline_delete', '_controller' => 'App\\Controller\\HomeDisciplineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        767 => [[['_route' => 'supprimer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::supprimer'], ['id'], null, null, false, true, null]],
        791 => [[['_route' => 'activer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::activerhomeDiscipline'], ['id'], null, null, false, true, null]],
        823 => [[['_route' => 'how_we_are_show', '_controller' => 'App\\Controller\\HowWeAreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        836 => [[['_route' => 'how_we_are_edit', '_controller' => 'App\\Controller\\HowWeAreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        844 => [[['_route' => 'how_we_are_delete', '_controller' => 'App\\Controller\\HowWeAreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        871 => [[['_route' => 'supprimer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::supprimer'], ['id'], null, null, false, true, null]],
        895 => [[['_route' => 'activer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::activer'], ['id'], null, null, false, true, null]],
        924 => [[['_route' => 'home_info_show', '_controller' => 'App\\Controller\\HomeInfoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        937 => [[['_route' => 'home_info_edit', '_controller' => 'App\\Controller\\HomeInfoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        945 => [[['_route' => 'home_info_delete', '_controller' => 'App\\Controller\\HomeInfoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        972 => [[['_route' => 'supprimer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::supprimer'], ['id'], null, null, false, true, null]],
        996 => [[['_route' => 'activer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::activerdiscipline'], ['id'], null, null, false, true, null]],
        1025 => [[['_route' => 'home_pictures_show', '_controller' => 'App\\Controller\\HomePicturesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1039 => [[['_route' => 'home_pictures_edit', '_controller' => 'App\\Controller\\HomePicturesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1048 => [[['_route' => 'home_pictures_deletes', '_controller' => 'App\\Controller\\HomePicturesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1090 => [[['_route' => 'home_section_forum_show', '_controller' => 'App\\Controller\\HomeSectionForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1104 => [[['_route' => 'home_section_forum_edit', '_controller' => 'App\\Controller\\HomeSectionForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1113 => [[['_route' => 'home_section_forum_delete', '_controller' => 'App\\Controller\\HomeSectionForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1141 => [[['_route' => 'supprimer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::supprimer'], ['id'], null, null, false, true, null]],
        1166 => [[['_route' => 'activer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::activer'], ['id'], null, null, false, true, null]],
        1203 => [[['_route' => 'subject_forum_show', '_controller' => 'App\\Controller\\SubjectForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1217 => [[['_route' => 'subject_forum_edit', '_controller' => 'App\\Controller\\SubjectForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1226 => [[['_route' => 'subject_forum_delete', '_controller' => 'App\\Controller\\SubjectForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1254 => [[['_route' => 'supprimer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::supprimer'], ['id'], null, null, false, true, null]],
        1279 => [[['_route' => 'activer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::activer'], ['id'], null, null, false, true, null]],
        1309 => [[['_route' => 'les_lames_du_ponant_show', '_controller' => 'App\\Controller\\LesLamesDuPonantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1323 => [[['_route' => 'les_lames_du_ponant_edit', '_controller' => 'App\\Controller\\LesLamesDuPonantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1332 => [[['_route' => 'les_lames_du_ponant_delete', '_controller' => 'App\\Controller\\LesLamesDuPonantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1360 => [[['_route' => 'supprimer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::supprimer'], ['id'], null, null, false, true, null]],
        1385 => [[['_route' => 'activer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::activer'], ['id'], null, null, false, true, null]],
        1423 => [[['_route' => 'message_forum_show', '_controller' => 'App\\Controller\\MessageForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1437 => [[['_route' => 'message_forum_edit', '_controller' => 'App\\Controller\\MessageForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1446 => [[['_route' => 'message_forum_delete', '_controller' => 'App\\Controller\\MessageForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1474 => [[['_route' => 'supprimer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::supprimer'], ['id'], null, null, false, true, null]],
        1499 => [[['_route' => 'activer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::activer'], ['id'], null, null, false, true, null]],
        1533 => [[['_route' => 'time_stamp_show', '_controller' => 'App\\Controller\\TimeStampController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1547 => [[['_route' => 'time_stamp_edit', '_controller' => 'App\\Controller\\TimeStampController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1556 => [[['_route' => 'time_stamp_delete', '_controller' => 'App\\Controller\\TimeStampController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1584 => [[['_route' => 'supprimer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::supprimer'], ['id'], null, null, false, true, null]],
        1609 => [[['_route' => 'activer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::activer'], ['id'], null, null, false, true, null]],
        1651 => [[['_route' => 'contact_message_show', '_controller' => 'App\\Controller\\ContactMessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1665 => [[['_route' => 'contact_message_edit', '_controller' => 'App\\Controller\\ContactMessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1674 => [[['_route' => 'contact_message_delete', '_controller' => 'App\\Controller\\ContactMessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1702 => [[['_route' => 'supprimer_contact_message', '_controller' => 'App\\Controller\\ContactMessageController::supprimer'], ['id'], null, null, false, true, null]],
        1741 => [[['_route' => 'le_forum_category', '_controller' => 'App\\Controller\\LeForumController::showCategory'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1764 => [[['_route' => 'le_forum_subject', '_controller' => 'App\\Controller\\LeForumController::showMessage'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1810 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1839 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1853 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1862 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1890 => [[['_route' => 'supprimer_user', '_controller' => 'App\\Controller\\UserController::supprimer'], ['id'], null, null, false, true, null]],
        1915 => [
            [['_route' => 'activer_user', '_controller' => 'App\\Controller\\UserController::activerAMHE'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

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
        '/amhe' => [[['_route' => 'amhe_index', '_controller' => 'App\\Controller\\AMHEController::index'], null, ['GET' => 0], null, true, false, null]],
        '/amhe/new' => [[['_route' => 'amhe_new', '_controller' => 'App\\Controller\\AMHEController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/category/forum' => [[['_route' => 'category_forum_index', '_controller' => 'App\\Controller\\CategoryForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/forum/new' => [[['_route' => 'category_forum_new', '_controller' => 'App\\Controller\\CategoryForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/message' => [[['_route' => 'contact_message_index', '_controller' => 'App\\Controller\\ContactMessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/message/new' => [[['_route' => 'contact_message_new', '_controller' => 'App\\Controller\\ContactMessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/discipline' => [[['_route' => 'discipline_index', '_controller' => 'App\\Controller\\DisciplineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/discipline/new' => [[['_route' => 'discipline_new', '_controller' => 'App\\Controller\\DisciplineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/faq' => [[['_route' => 'faq_index', '_controller' => 'App\\Controller\\FaqController::index'], null, ['GET' => 0], null, true, false, null]],
        '/faq/new' => [[['_route' => 'faq_new', '_controller' => 'App\\Controller\\FaqController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/discipline' => [[['_route' => 'home_discipline_index', '_controller' => 'App\\Controller\\HomeDisciplineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home/discipline/new' => [[['_route' => 'home_discipline_new', '_controller' => 'App\\Controller\\HomeDisciplineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home/info' => [[['_route' => 'home_info_index', '_controller' => 'App\\Controller\\HomeInfoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home/info/new' => [[['_route' => 'home_info_new', '_controller' => 'App\\Controller\\HomeInfoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home/pictures' => [[['_route' => 'home_pictures_index', '_controller' => 'App\\Controller\\HomePicturesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home/pictures/new' => [[['_route' => 'home_pictures_new', '_controller' => 'App\\Controller\\HomePicturesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home/section/forumadmin' => [[['_route' => 'home_section_forum_index', '_controller' => 'App\\Controller\\HomeSectionForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home/section/forum/new' => [[['_route' => 'home_section_forum_new', '_controller' => 'App\\Controller\\HomeSectionForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/how/we/are' => [[['_route' => 'how_we_are_index', '_controller' => 'App\\Controller\\HowWeAreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/how/we/are/new' => [[['_route' => 'how_we_are_new', '_controller' => 'App\\Controller\\HowWeAreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lesamhe' => [[['_route' => 'les_amhe', '_controller' => 'App\\Controller\\LesAMHEController::index'], null, null, null, false, false, null]],
        '/les/disciplines' => [[['_route' => 'les_disciplines', '_controller' => 'App\\Controller\\LesDisciplinesController::index'], null, null, null, false, false, null]],
        '/les/infos' => [[['_route' => 'les_infos', '_controller' => 'App\\Controller\\LesInfosController::index'], null, null, null, false, false, null]],
        '/les/lames/du/ponant' => [[['_route' => 'les_lames_du_ponant_index', '_controller' => 'App\\Controller\\LesLamesDuPonantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/les/lames/du/ponant/new' => [[['_route' => 'les_lames_du_ponant_new', '_controller' => 'App\\Controller\\LesLamesDuPonantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medieval/family' => [[['_route' => 'medieval_family_index', '_controller' => 'App\\Controller\\MedievalFamilyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/medieval/family/new' => [[['_route' => 'medieval_family_new', '_controller' => 'App\\Controller\\MedievalFamilyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message/forum' => [[['_route' => 'message_forum_index', '_controller' => 'App\\Controller\\MessageForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/message/forum/new' => [[['_route' => 'message_forum_new', '_controller' => 'App\\Controller\\MessageForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, true, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/subject/forum' => [[['_route' => 'subject_forum_index', '_controller' => 'App\\Controller\\SubjectForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/subject/forum/new' => [[['_route' => 'subject_forum_new', '_controller' => 'App\\Controller\\SubjectForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/timestamp' => [[['_route' => 'time_stamp_index', '_controller' => 'App\\Controller\\TimeStampController::index'], null, ['GET' => 0], null, true, false, null]],
        '/timestamp/new' => [[['_route' => 'time_stamp_new', '_controller' => 'App\\Controller\\TimeStampController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/amhe/(?'
                    .'|([^/]++)(?'
                        .'|(*:189)'
                        .'|/edit(*:202)'
                        .'|(*:210)'
                    .')'
                    .'|supprimer/([^/]++)(*:237)'
                    .'|activer/([^/]++)(*:261)'
                .')'
                .'|/c(?'
                    .'|ategory/forum/(?'
                        .'|([^/]++)(?'
                            .'|(*:303)'
                            .'|/edit(*:316)'
                            .'|(*:324)'
                        .')'
                        .'|supprimer/([^/]++)(*:351)'
                        .'|activer/([^/]++)(*:375)'
                    .')'
                    .'|ontact/message/(?'
                        .'|([^/]++)(?'
                            .'|(*:413)'
                            .'|/edit(*:426)'
                            .'|(*:434)'
                        .')'
                        .'|supprimer/([^/]++)(*:461)'
                    .')'
                .')'
                .'|/discipline/(?'
                    .'|([^/]++)(?'
                        .'|(*:497)'
                        .'|/edit(*:510)'
                        .'|(*:518)'
                    .')'
                    .'|supprimer/([^/]++)(*:545)'
                    .'|activer/([^/]++)(*:569)'
                .')'
                .'|/faq/(?'
                    .'|([^/]++)(?'
                        .'|(*:597)'
                        .'|/edit(*:610)'
                        .'|(*:618)'
                    .')'
                    .'|supprimer/([^/]++)(*:645)'
                .')'
                .'|/ho(?'
                    .'|me/(?'
                        .'|discipline/(?'
                            .'|([^/]++)(?'
                                .'|(*:691)'
                                .'|/edit(*:704)'
                                .'|(*:712)'
                            .')'
                            .'|supprimer/([^/]++)(*:739)'
                            .'|activer/([^/]++)(*:763)'
                        .')'
                        .'|info/(?'
                            .'|([^/]++)(?'
                                .'|(*:791)'
                                .'|/edit(*:804)'
                                .'|(*:812)'
                            .')'
                            .'|supprimer/([^/]++)(*:839)'
                            .'|activer/([^/]++)(*:863)'
                        .')'
                        .'|pictures/([^/]++)(?'
                            .'|(*:892)'
                            .'|/edit(*:905)'
                            .'|(*:913)'
                        .')'
                        .'|section/forum/(?'
                            .'|([^/]++)(?'
                                .'|(*:950)'
                                .'|/edit(*:963)'
                                .'|(*:971)'
                            .')'
                            .'|supprimer/([^/]++)(*:998)'
                            .'|activer/([^/]++)(*:1022)'
                        .')'
                    .')'
                    .'|w/we/are/(?'
                        .'|([^/]++)(?'
                            .'|(*:1056)'
                            .'|/edit(*:1070)'
                            .'|(*:1079)'
                        .')'
                        .'|supprimer/([^/]++)(*:1107)'
                        .'|activer/([^/]++)(*:1132)'
                    .')'
                .')'
                .'|/les/lames/du/ponant/(?'
                    .'|([^/]++)(?'
                        .'|(*:1178)'
                        .'|/edit(*:1192)'
                        .'|(*:1201)'
                    .')'
                    .'|supprimer/([^/]++)(*:1229)'
                    .'|activer/([^/]++)(*:1254)'
                .')'
                .'|/me(?'
                    .'|dieval/family/(?'
                        .'|([^/]++)(?'
                            .'|(*:1298)'
                            .'|/edit(*:1312)'
                            .'|(*:1321)'
                        .')'
                        .'|supprimer/([^/]++)(*:1349)'
                        .'|activer/([^/]++)(*:1374)'
                    .')'
                    .'|ssage/forum/(?'
                        .'|([^/]++)(?'
                            .'|(*:1410)'
                            .'|/edit(*:1424)'
                            .'|(*:1433)'
                        .')'
                        .'|supprimer/([^/]++)(*:1461)'
                        .'|activer/([^/]++)(*:1486)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1533)'
                .'|/subject/forum/(?'
                    .'|([^/]++)(?'
                        .'|(*:1571)'
                        .'|/edit(*:1585)'
                        .'|(*:1594)'
                    .')'
                    .'|supprimer/([^/]++)(*:1622)'
                    .'|activer/([^/]++)(*:1647)'
                .')'
                .'|/timestamp/(?'
                    .'|([^/]++)(?'
                        .'|(*:1682)'
                        .'|/edit(*:1696)'
                        .'|(*:1705)'
                    .')'
                    .'|supprimer/([^/]++)(*:1733)'
                    .'|activer/([^/]++)(*:1758)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1788)'
                        .'|/edit(*:1802)'
                    .')'
                    .'|delete/([^/]++)(*:1827)'
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
        189 => [[['_route' => 'amhe_show', '_controller' => 'App\\Controller\\AMHEController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'amhe_edit', '_controller' => 'App\\Controller\\AMHEController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'amhe_delete', '_controller' => 'App\\Controller\\AMHEController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'supprimer_amhe', '_controller' => 'App\\Controller\\AMHEController::supprimer'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'activer_amhe', '_controller' => 'App\\Controller\\AMHEController::activerAMHE'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'category_forum_show', '_controller' => 'App\\Controller\\CategoryForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'category_forum_edit', '_controller' => 'App\\Controller\\CategoryForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'category_forum_delete', '_controller' => 'App\\Controller\\CategoryForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        351 => [[['_route' => 'supprimer_category_forum', '_controller' => 'App\\Controller\\CategoryForumController::supprimer'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'activer_category_forum', '_controller' => 'App\\Controller\\CategoryForumController::activerAMHE'], ['id'], null, null, false, true, null]],
        413 => [[['_route' => 'contact_message_show', '_controller' => 'App\\Controller\\ContactMessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        426 => [[['_route' => 'contact_message_edit', '_controller' => 'App\\Controller\\ContactMessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        434 => [[['_route' => 'contact_message_delete', '_controller' => 'App\\Controller\\ContactMessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        461 => [[['_route' => 'supprimer_contact_message', '_controller' => 'App\\Controller\\ContactMessageController::supprimer'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'discipline_show', '_controller' => 'App\\Controller\\DisciplineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'discipline_edit', '_controller' => 'App\\Controller\\DisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        518 => [[['_route' => 'discipline_delete', '_controller' => 'App\\Controller\\DisciplineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        545 => [[['_route' => 'supprimer_discipline', '_controller' => 'App\\Controller\\DisciplineController::supprimer'], ['id'], null, null, false, true, null]],
        569 => [[['_route' => 'activer_discipline', '_controller' => 'App\\Controller\\DisciplineController::activerdiscipline'], ['id'], null, null, false, true, null]],
        597 => [[['_route' => 'faq_show', '_controller' => 'App\\Controller\\FaqController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        610 => [[['_route' => 'faq_edit', '_controller' => 'App\\Controller\\FaqController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        618 => [[['_route' => 'faq_delete', '_controller' => 'App\\Controller\\FaqController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        645 => [[['_route' => 'supprimer_FAQ', '_controller' => 'App\\Controller\\FaqController::supprimer'], ['id'], null, null, false, true, null]],
        691 => [[['_route' => 'home_discipline_show', '_controller' => 'App\\Controller\\HomeDisciplineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'home_discipline_edit', '_controller' => 'App\\Controller\\HomeDisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        712 => [[['_route' => 'home_discipline_delete', '_controller' => 'App\\Controller\\HomeDisciplineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        739 => [[['_route' => 'supprimer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::supprimer'], ['id'], null, null, false, true, null]],
        763 => [[['_route' => 'activer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::activerhomeDiscipline'], ['id'], null, null, false, true, null]],
        791 => [[['_route' => 'home_info_show', '_controller' => 'App\\Controller\\HomeInfoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        804 => [[['_route' => 'home_info_edit', '_controller' => 'App\\Controller\\HomeInfoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        812 => [[['_route' => 'home_info_delete', '_controller' => 'App\\Controller\\HomeInfoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        839 => [[['_route' => 'supprimer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::supprimer'], ['id'], null, null, false, true, null]],
        863 => [[['_route' => 'activer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::activerdiscipline'], ['id'], null, null, false, true, null]],
        892 => [[['_route' => 'home_pictures_show', '_controller' => 'App\\Controller\\HomePicturesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        905 => [[['_route' => 'home_pictures_edit', '_controller' => 'App\\Controller\\HomePicturesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        913 => [[['_route' => 'home_pictures_deletes', '_controller' => 'App\\Controller\\HomePicturesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        950 => [[['_route' => 'home_section_forum_show', '_controller' => 'App\\Controller\\HomeSectionForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'home_section_forum_edit', '_controller' => 'App\\Controller\\HomeSectionForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        971 => [[['_route' => 'home_section_forum_delete', '_controller' => 'App\\Controller\\HomeSectionForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        998 => [[['_route' => 'supprimer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::supprimer'], ['id'], null, null, false, true, null]],
        1022 => [[['_route' => 'activer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::activer'], ['id'], null, null, false, true, null]],
        1056 => [[['_route' => 'how_we_are_show', '_controller' => 'App\\Controller\\HowWeAreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'how_we_are_edit', '_controller' => 'App\\Controller\\HowWeAreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1079 => [[['_route' => 'how_we_are_delete', '_controller' => 'App\\Controller\\HowWeAreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1107 => [[['_route' => 'supprimer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::supprimer'], ['id'], null, null, false, true, null]],
        1132 => [[['_route' => 'activer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::activerHowWeAre'], ['id'], null, null, false, true, null]],
        1178 => [[['_route' => 'les_lames_du_ponant_show', '_controller' => 'App\\Controller\\LesLamesDuPonantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1192 => [[['_route' => 'les_lames_du_ponant_edit', '_controller' => 'App\\Controller\\LesLamesDuPonantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1201 => [[['_route' => 'les_lames_du_ponant_delete', '_controller' => 'App\\Controller\\LesLamesDuPonantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1229 => [[['_route' => 'supprimer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::supprimer'], ['id'], null, null, false, true, null]],
        1254 => [[['_route' => 'activer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::activer'], ['id'], null, null, false, true, null]],
        1298 => [[['_route' => 'medieval_family_show', '_controller' => 'App\\Controller\\MedievalFamilyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1312 => [[['_route' => 'medieval_family_edit', '_controller' => 'App\\Controller\\MedievalFamilyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1321 => [[['_route' => 'medieval_family_delete', '_controller' => 'App\\Controller\\MedievalFamilyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1349 => [[['_route' => 'supprimer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::supprimer'], ['id'], null, null, false, true, null]],
        1374 => [[['_route' => 'activer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::activer'], ['id'], null, null, false, true, null]],
        1410 => [[['_route' => 'message_forum_show', '_controller' => 'App\\Controller\\MessageForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1424 => [[['_route' => 'message_forum_edit', '_controller' => 'App\\Controller\\MessageForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1433 => [[['_route' => 'message_forum_delete', '_controller' => 'App\\Controller\\MessageForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1461 => [[['_route' => 'supprimer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::supprimer'], ['id'], null, null, false, true, null]],
        1486 => [[['_route' => 'activer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::activer'], ['id'], null, null, false, true, null]],
        1533 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1571 => [[['_route' => 'subject_forum_show', '_controller' => 'App\\Controller\\SubjectForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1585 => [[['_route' => 'subject_forum_edit', '_controller' => 'App\\Controller\\SubjectForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1594 => [[['_route' => 'subject_forum_delete', '_controller' => 'App\\Controller\\SubjectForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1622 => [[['_route' => 'supprimer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::supprimer'], ['id'], null, null, false, true, null]],
        1647 => [[['_route' => 'activer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::activer'], ['id'], null, null, false, true, null]],
        1682 => [[['_route' => 'time_stamp_show', '_controller' => 'App\\Controller\\TimeStampController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1696 => [[['_route' => 'time_stamp_edit', '_controller' => 'App\\Controller\\TimeStampController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1705 => [[['_route' => 'time_stamp_delete', '_controller' => 'App\\Controller\\TimeStampController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1733 => [[['_route' => 'supprimer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::supprimer'], ['id'], null, null, false, true, null]],
        1758 => [[['_route' => 'activer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::activer'], ['id'], null, null, false, true, null]],
        1788 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1802 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1827 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

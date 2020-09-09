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
        '/forum/section' => [[['_route' => 'le_forum', '_controller' => 'App\\Controller\\LeForumController::index'], null, null, null, false, false, null]],
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
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
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
                .'|/f(?'
                    .'|aq/(?'
                        .'|([^/]++)(?'
                            .'|(*:600)'
                            .'|/edit(*:613)'
                            .'|(*:621)'
                        .')'
                        .'|supprimer/([^/]++)(*:648)'
                    .')'
                    .'|orum/categories/(?'
                        .'|([^/]++)(*:684)'
                        .'|sujet/([^/]++)(*:706)'
                    .')'
                .')'
                .'|/ho(?'
                    .'|me/(?'
                        .'|discipline/(?'
                            .'|([^/]++)(?'
                                .'|(*:753)'
                                .'|/edit(*:766)'
                                .'|(*:774)'
                            .')'
                            .'|supprimer/([^/]++)(*:801)'
                            .'|activer/([^/]++)(*:825)'
                        .')'
                        .'|info/(?'
                            .'|([^/]++)(?'
                                .'|(*:853)'
                                .'|/edit(*:866)'
                                .'|(*:874)'
                            .')'
                            .'|supprimer/([^/]++)(*:901)'
                            .'|activer/([^/]++)(*:925)'
                        .')'
                        .'|pictures/([^/]++)(?'
                            .'|(*:954)'
                            .'|/edit(*:967)'
                            .'|(*:975)'
                        .')'
                        .'|section/forum/(?'
                            .'|([^/]++)(?'
                                .'|(*:1012)'
                                .'|/edit(*:1026)'
                                .'|(*:1035)'
                            .')'
                            .'|supprimer/([^/]++)(*:1063)'
                            .'|activer/([^/]++)(*:1088)'
                        .')'
                    .')'
                    .'|w/we/are/(?'
                        .'|([^/]++)(?'
                            .'|(*:1122)'
                            .'|/edit(*:1136)'
                            .'|(*:1145)'
                        .')'
                        .'|supprimer/([^/]++)(*:1173)'
                        .'|activer/([^/]++)(*:1198)'
                    .')'
                .')'
                .'|/les/lames/du/ponant/(?'
                    .'|([^/]++)(?'
                        .'|(*:1244)'
                        .'|/edit(*:1258)'
                        .'|(*:1267)'
                    .')'
                    .'|supprimer/([^/]++)(*:1295)'
                    .'|activer/([^/]++)(*:1320)'
                .')'
                .'|/me(?'
                    .'|dieval/family/(?'
                        .'|([^/]++)(?'
                            .'|(*:1364)'
                            .'|/edit(*:1378)'
                            .'|(*:1387)'
                        .')'
                        .'|supprimer/([^/]++)(*:1415)'
                        .'|activer/([^/]++)(*:1440)'
                    .')'
                    .'|ssage/forum/(?'
                        .'|([^/]++)(?'
                            .'|(*:1476)'
                            .'|/edit(*:1490)'
                            .'|(*:1499)'
                        .')'
                        .'|supprimer/([^/]++)(*:1527)'
                        .'|activer/([^/]++)(*:1552)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1599)'
                .'|/subject/forum/(?'
                    .'|([^/]++)(?'
                        .'|(*:1637)'
                        .'|/edit(*:1651)'
                        .'|(*:1660)'
                    .')'
                    .'|supprimer/([^/]++)(*:1688)'
                    .'|activer/([^/]++)(*:1713)'
                .')'
                .'|/timestamp/(?'
                    .'|([^/]++)(?'
                        .'|(*:1748)'
                        .'|/edit(*:1762)'
                        .'|(*:1771)'
                    .')'
                    .'|supprimer/([^/]++)(*:1799)'
                    .'|activer/([^/]++)(*:1824)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1851)'
                    .'|/edit(*:1865)'
                    .'|(*:1874)'
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
        600 => [[['_route' => 'faq_show', '_controller' => 'App\\Controller\\FaqController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        613 => [[['_route' => 'faq_edit', '_controller' => 'App\\Controller\\FaqController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [[['_route' => 'faq_delete', '_controller' => 'App\\Controller\\FaqController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        648 => [[['_route' => 'supprimer_FAQ', '_controller' => 'App\\Controller\\FaqController::supprimer'], ['id'], null, null, false, true, null]],
        684 => [[['_route' => 'le_forum_category', '_controller' => 'App\\Controller\\LeForumController::showCategory'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        706 => [[['_route' => 'le_forum_subject', '_controller' => 'App\\Controller\\LeForumController::showMessage'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        753 => [[['_route' => 'home_discipline_show', '_controller' => 'App\\Controller\\HomeDisciplineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        766 => [[['_route' => 'home_discipline_edit', '_controller' => 'App\\Controller\\HomeDisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        774 => [[['_route' => 'home_discipline_delete', '_controller' => 'App\\Controller\\HomeDisciplineController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        801 => [[['_route' => 'supprimer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::supprimer'], ['id'], null, null, false, true, null]],
        825 => [[['_route' => 'activer_home_discipline', '_controller' => 'App\\Controller\\HomeDisciplineController::activerhomeDiscipline'], ['id'], null, null, false, true, null]],
        853 => [[['_route' => 'home_info_show', '_controller' => 'App\\Controller\\HomeInfoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        866 => [[['_route' => 'home_info_edit', '_controller' => 'App\\Controller\\HomeInfoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        874 => [[['_route' => 'home_info_delete', '_controller' => 'App\\Controller\\HomeInfoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        901 => [[['_route' => 'supprimer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::supprimer'], ['id'], null, null, false, true, null]],
        925 => [[['_route' => 'activer_home_info', '_controller' => 'App\\Controller\\HomeInfoController::activerdiscipline'], ['id'], null, null, false, true, null]],
        954 => [[['_route' => 'home_pictures_show', '_controller' => 'App\\Controller\\HomePicturesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        967 => [[['_route' => 'home_pictures_edit', '_controller' => 'App\\Controller\\HomePicturesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        975 => [[['_route' => 'home_pictures_deletes', '_controller' => 'App\\Controller\\HomePicturesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1012 => [[['_route' => 'home_section_forum_show', '_controller' => 'App\\Controller\\HomeSectionForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1026 => [[['_route' => 'home_section_forum_edit', '_controller' => 'App\\Controller\\HomeSectionForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1035 => [[['_route' => 'home_section_forum_delete', '_controller' => 'App\\Controller\\HomeSectionForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1063 => [[['_route' => 'supprimer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::supprimer'], ['id'], null, null, false, true, null]],
        1088 => [[['_route' => 'activer_home_pictures', '_controller' => 'App\\Controller\\HomeSectionForumController::activer'], ['id'], null, null, false, true, null]],
        1122 => [[['_route' => 'how_we_are_show', '_controller' => 'App\\Controller\\HowWeAreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1136 => [[['_route' => 'how_we_are_edit', '_controller' => 'App\\Controller\\HowWeAreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1145 => [[['_route' => 'how_we_are_delete', '_controller' => 'App\\Controller\\HowWeAreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1173 => [[['_route' => 'supprimer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::supprimer'], ['id'], null, null, false, true, null]],
        1198 => [[['_route' => 'activer_how_we_are', '_controller' => 'App\\Controller\\HowWeAreController::activerHowWeAre'], ['id'], null, null, false, true, null]],
        1244 => [[['_route' => 'les_lames_du_ponant_show', '_controller' => 'App\\Controller\\LesLamesDuPonantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1258 => [[['_route' => 'les_lames_du_ponant_edit', '_controller' => 'App\\Controller\\LesLamesDuPonantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1267 => [[['_route' => 'les_lames_du_ponant_delete', '_controller' => 'App\\Controller\\LesLamesDuPonantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1295 => [[['_route' => 'supprimer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::supprimer'], ['id'], null, null, false, true, null]],
        1320 => [[['_route' => 'activer_les_lames_du_ponant', '_controller' => 'App\\Controller\\LesLamesDuPonantController::activer'], ['id'], null, null, false, true, null]],
        1364 => [[['_route' => 'medieval_family_show', '_controller' => 'App\\Controller\\MedievalFamilyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1378 => [[['_route' => 'medieval_family_edit', '_controller' => 'App\\Controller\\MedievalFamilyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1387 => [[['_route' => 'medieval_family_delete', '_controller' => 'App\\Controller\\MedievalFamilyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1415 => [[['_route' => 'supprimer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::supprimer'], ['id'], null, null, false, true, null]],
        1440 => [[['_route' => 'activer_medieval_family', '_controller' => 'App\\Controller\\MedievalFamilyController::activer'], ['id'], null, null, false, true, null]],
        1476 => [[['_route' => 'message_forum_show', '_controller' => 'App\\Controller\\MessageForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1490 => [[['_route' => 'message_forum_edit', '_controller' => 'App\\Controller\\MessageForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1499 => [[['_route' => 'message_forum_delete', '_controller' => 'App\\Controller\\MessageForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1527 => [[['_route' => 'supprimer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::supprimer'], ['id'], null, null, false, true, null]],
        1552 => [[['_route' => 'activer_message_forum', '_controller' => 'App\\Controller\\MessageForumController::activer'], ['id'], null, null, false, true, null]],
        1599 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1637 => [[['_route' => 'subject_forum_show', '_controller' => 'App\\Controller\\SubjectForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1651 => [[['_route' => 'subject_forum_edit', '_controller' => 'App\\Controller\\SubjectForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1660 => [[['_route' => 'subject_forum_delete', '_controller' => 'App\\Controller\\SubjectForumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1688 => [[['_route' => 'supprimer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::supprimer'], ['id'], null, null, false, true, null]],
        1713 => [[['_route' => 'activer_subject_forum', '_controller' => 'App\\Controller\\SubjectForumController::activer'], ['id'], null, null, false, true, null]],
        1748 => [[['_route' => 'time_stamp_show', '_controller' => 'App\\Controller\\TimeStampController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1762 => [[['_route' => 'time_stamp_edit', '_controller' => 'App\\Controller\\TimeStampController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1771 => [[['_route' => 'time_stamp_delete', '_controller' => 'App\\Controller\\TimeStampController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1799 => [[['_route' => 'supprimer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::supprimer'], ['id'], null, null, false, true, null]],
        1824 => [[['_route' => 'activer_time_stamp', '_controller' => 'App\\Controller\\TimeStampController::activer'], ['id'], null, null, false, true, null]],
        1851 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1865 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1874 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

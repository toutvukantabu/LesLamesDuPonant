<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'amhe_index' => [[], ['_controller' => 'App\\Controller\\AMHEController::index'], [], [['text', '/admin/amhe/']], [], []],
    'amhe_new' => [[], ['_controller' => 'App\\Controller\\AMHEController::new'], [], [['text', '/admin/amhe/new']], [], []],
    'amhe_show' => [['id'], ['_controller' => 'App\\Controller\\AMHEController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/amhe']], [], []],
    'amhe_edit' => [['id'], ['_controller' => 'App\\Controller\\AMHEController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/amhe']], [], []],
    'amhe_delete' => [['id'], ['_controller' => 'App\\Controller\\AMHEController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/amhe']], [], []],
    'supprimer_amhe' => [['id'], ['_controller' => 'App\\Controller\\AMHEController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/amhe/supprimer']], [], []],
    'activer_amhe' => [['id'], ['_controller' => 'App\\Controller\\AMHEController::activerAMHE'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/amhe/activer']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'category_forum_index' => [[], ['_controller' => 'App\\Controller\\CategoryForumController::index'], [], [['text', '/admin/category/forum/']], [], []],
    'category_forum_new' => [[], ['_controller' => 'App\\Controller\\CategoryForumController::new'], [], [['text', '/admin/category/forum/new']], [], []],
    'category_forum_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryForumController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/forum']], [], []],
    'category_forum_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryForumController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/forum']], [], []],
    'category_forum_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryForumController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/forum']], [], []],
    'supprimer_category_forum' => [['id'], ['_controller' => 'App\\Controller\\CategoryForumController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/forum/supprimer']], [], []],
    'activer_category_forum' => [['id'], ['_controller' => 'App\\Controller\\CategoryForumController::activerAMHE'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/forum/activer']], [], []],
    'contact_message_index' => [[], ['_controller' => 'App\\Controller\\ContactMessageController::index'], [], [['text', '/contact/message/']], [], []],
    'contact_message_new' => [[], ['_controller' => 'App\\Controller\\ContactMessageController::new'], [], [['text', '/contact/message/new']], [], []],
    'contact_message_show' => [['id'], ['_controller' => 'App\\Controller\\ContactMessageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact/message']], [], []],
    'contact_message_edit' => [['id'], ['_controller' => 'App\\Controller\\ContactMessageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contact/message']], [], []],
    'contact_message_delete' => [['id'], ['_controller' => 'App\\Controller\\ContactMessageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact/message']], [], []],
    'supprimer_contact_message' => [['id'], ['_controller' => 'App\\Controller\\ContactMessageController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact/message/supprimer']], [], []],
    'discipline_index' => [[], ['_controller' => 'App\\Controller\\DisciplineController::index'], [], [['text', '/admin/discipline/']], [], []],
    'discipline_new' => [[], ['_controller' => 'App\\Controller\\DisciplineController::new'], [], [['text', '/admin/discipline/new']], [], []],
    'discipline_show' => [['id'], ['_controller' => 'App\\Controller\\DisciplineController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discipline']], [], []],
    'discipline_edit' => [['id'], ['_controller' => 'App\\Controller\\DisciplineController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discipline']], [], []],
    'discipline_delete' => [['id'], ['_controller' => 'App\\Controller\\DisciplineController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discipline']], [], []],
    'supprimer_discipline' => [['id'], ['_controller' => 'App\\Controller\\DisciplineController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discipline/supprimer']], [], []],
    'activer_discipline' => [['id'], ['_controller' => 'App\\Controller\\DisciplineController::activerdiscipline'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discipline/activer']], [], []],
    'faq_index' => [[], ['_controller' => 'App\\Controller\\FaqController::index'], [], [['text', '/admin/faq/']], [], []],
    'faq_new' => [[], ['_controller' => 'App\\Controller\\FaqController::new'], [], [['text', '/admin/faq/new']], [], []],
    'faq_show' => [['id'], ['_controller' => 'App\\Controller\\FaqController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/faq']], [], []],
    'faq_edit' => [['id'], ['_controller' => 'App\\Controller\\FaqController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/faq']], [], []],
    'faq_delete' => [['id'], ['_controller' => 'App\\Controller\\FaqController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/faq']], [], []],
    'supprimer_FAQ' => [['id'], ['_controller' => 'App\\Controller\\FaqController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/faq/supprimer']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'home_discipline_index' => [[], ['_controller' => 'App\\Controller\\HomeDisciplineController::index'], [], [['text', '/admin/home/discipline/']], [], []],
    'home_discipline_new' => [[], ['_controller' => 'App\\Controller\\HomeDisciplineController::new'], [], [['text', '/admin/home/discipline/new']], [], []],
    'home_discipline_show' => [['id'], ['_controller' => 'App\\Controller\\HomeDisciplineController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/discipline']], [], []],
    'home_discipline_edit' => [['id'], ['_controller' => 'App\\Controller\\HomeDisciplineController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/discipline']], [], []],
    'home_discipline_delete' => [['id'], ['_controller' => 'App\\Controller\\HomeDisciplineController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/discipline']], [], []],
    'supprimer_home_discipline' => [['id'], ['_controller' => 'App\\Controller\\HomeDisciplineController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/discipline/supprimer']], [], []],
    'activer_home_discipline' => [['id'], ['_controller' => 'App\\Controller\\HomeDisciplineController::activerhomeDiscipline'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/home/discipline/activer']], [], []],
    'home_info_index' => [[], ['_controller' => 'App\\Controller\\HomeInfoController::index'], [], [['text', '/admin/info/']], [], []],
    'home_info_new' => [[], ['_controller' => 'App\\Controller\\HomeInfoController::new'], [], [['text', '/admin/info/new']], [], []],
    'home_info_show' => [['id'], ['_controller' => 'App\\Controller\\HomeInfoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/info']], [], []],
    'home_info_edit' => [['id'], ['_controller' => 'App\\Controller\\HomeInfoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/info']], [], []],
    'home_info_delete' => [['id'], ['_controller' => 'App\\Controller\\HomeInfoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/info']], [], []],
    'supprimer_home_info' => [['id'], ['_controller' => 'App\\Controller\\HomeInfoController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/info/supprimer']], [], []],
    'activer_home_info' => [['id'], ['_controller' => 'App\\Controller\\HomeInfoController::activerdiscipline'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/info/activer']], [], []],
    'home_pictures_index' => [[], ['_controller' => 'App\\Controller\\HomePicturesController::index'], [], [['text', '/admin/pictures/']], [], []],
    'home_pictures_new' => [[], ['_controller' => 'App\\Controller\\HomePicturesController::new'], [], [['text', '/admin/pictures/new']], [], []],
    'home_pictures_show' => [['id'], ['_controller' => 'App\\Controller\\HomePicturesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/pictures']], [], []],
    'home_pictures_edit' => [['id'], ['_controller' => 'App\\Controller\\HomePicturesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/pictures']], [], []],
    'home_pictures_deletes' => [['id'], ['_controller' => 'App\\Controller\\HomePicturesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/pictures']], [], []],
    'home_section_forum_index' => [[], ['_controller' => 'App\\Controller\\HomeSectionForumController::index'], [], [['text', '/admin/section-forumadmin/']], [], []],
    'home_section_forum_new' => [[], ['_controller' => 'App\\Controller\\HomeSectionForumController::new'], [], [['text', '/admin/section-forum/new']], [], []],
    'home_section_forum_show' => [['id'], ['_controller' => 'App\\Controller\\HomeSectionForumController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section-forum']], [], []],
    'home_section_forum_edit' => [['id'], ['_controller' => 'App\\Controller\\HomeSectionForumController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section-forum']], [], []],
    'home_section_forum_delete' => [['id'], ['_controller' => 'App\\Controller\\HomeSectionForumController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section-forum']], [], []],
    'supprimer_home_pictures' => [['id'], ['_controller' => 'App\\Controller\\HomeSectionForumController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section-forum/supprimer']], [], []],
    'activer_home_pictures' => [['id'], ['_controller' => 'App\\Controller\\HomeSectionForumController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section-forum/activer']], [], []],
    'how_we_are_index' => [[], ['_controller' => 'App\\Controller\\HowWeAreController::index'], [], [['text', '/how/we/are/']], [], []],
    'how_we_are_new' => [[], ['_controller' => 'App\\Controller\\HowWeAreController::new'], [], [['text', '/how/we/are/new']], [], []],
    'how_we_are_show' => [['id'], ['_controller' => 'App\\Controller\\HowWeAreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/how/we/are']], [], []],
    'how_we_are_edit' => [['id'], ['_controller' => 'App\\Controller\\HowWeAreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/how/we/are']], [], []],
    'how_we_are_delete' => [['id'], ['_controller' => 'App\\Controller\\HowWeAreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/how/we/are']], [], []],
    'supprimer_how_we_are' => [['id'], ['_controller' => 'App\\Controller\\HowWeAreController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/how/we/are/supprimer']], [], []],
    'activer_how_we_are' => [['id'], ['_controller' => 'App\\Controller\\HowWeAreController::activerHowWeAre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/how/we/are/activer']], [], []],
    'le_forum' => [[], ['_controller' => 'App\\Controller\\LeForumController::index'], [], [['text', '/forum/section']], [], []],
    'le_forum_category' => [['slug'], ['_controller' => 'App\\Controller\\LeForumController::showCategory'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/forum/categories']], [], []],
    'le_forum_subject' => [['slug'], ['_controller' => 'App\\Controller\\LeForumController::showMessage'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/forum/categories/sujet']], [], []],
    'les_amhe' => [[], ['_controller' => 'App\\Controller\\LesAMHEController::index'], [], [['text', '/lesamhe']], [], []],
    'les_disciplines' => [[], ['_controller' => 'App\\Controller\\LesDisciplinesController::index'], [], [['text', '/disciplines']], [], []],
    'les_infos' => [[], ['_controller' => 'App\\Controller\\LesInfosController::index'], [], [['text', '/infos']], [], []],
    'les_lames_du_ponant_index' => [[], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::index'], [], [['text', '/admin/LLDP/']], [], []],
    'les_lames_du_ponant_new' => [[], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::new'], [], [['text', '/admin/LLDP/new']], [], []],
    'les_lames_du_ponant_show' => [['id'], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/LLDP']], [], []],
    'les_lames_du_ponant_edit' => [['id'], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/LLDP']], [], []],
    'les_lames_du_ponant_delete' => [['id'], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/LLDP']], [], []],
    'supprimer_les_lames_du_ponant' => [['id'], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/LLDP/supprimer']], [], []],
    'activer_les_lames_du_ponant' => [['id'], ['_controller' => 'App\\Controller\\LesLamesDuPonantController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/LLDP/activer']], [], []],
    'medieval_family_index' => [[], ['_controller' => 'App\\Controller\\MedievalFamilyController::index'], [], [['text', '/admin/famille-medievale/']], [], []],
    'medieval_family_new' => [[], ['_controller' => 'App\\Controller\\MedievalFamilyController::new'], [], [['text', '/admin/famille-medievale/new']], [], []],
    'medieval_family_show' => [['id'], ['_controller' => 'App\\Controller\\MedievalFamilyController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/famille-medievale']], [], []],
    'medieval_family_edit' => [['id'], ['_controller' => 'App\\Controller\\MedievalFamilyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/famille-medievale']], [], []],
    'medieval_family_delete' => [['id'], ['_controller' => 'App\\Controller\\MedievalFamilyController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/famille-medievale']], [], []],
    'supprimer_medieval_family' => [['id'], ['_controller' => 'App\\Controller\\MedievalFamilyController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/famille-medievale/supprimer']], [], []],
    'activer_medieval_family' => [['id'], ['_controller' => 'App\\Controller\\MedievalFamilyController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/famille-medievale/activer']], [], []],
    'message_forum_index' => [[], ['_controller' => 'App\\Controller\\MessageForumController::index'], [], [['text', '/admin/message/forum/']], [], []],
    'message_forum_new' => [[], ['_controller' => 'App\\Controller\\MessageForumController::new'], [], [['text', '/admin/message/forum/new']], [], []],
    'message_forum_show' => [['id'], ['_controller' => 'App\\Controller\\MessageForumController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/message/forum']], [], []],
    'message_forum_edit' => [['id'], ['_controller' => 'App\\Controller\\MessageForumController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/message/forum']], [], []],
    'message_forum_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageForumController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/message/forum']], [], []],
    'supprimer_message_forum' => [['id'], ['_controller' => 'App\\Controller\\MessageForumController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/message/forum/supprimer']], [], []],
    'activer_message_forum' => [['id'], ['_controller' => 'App\\Controller\\MessageForumController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/message/forum/activer']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'subject_forum_index' => [[], ['_controller' => 'App\\Controller\\SubjectForumController::index'], [], [['text', '/admin/subject/forum/']], [], []],
    'subject_forum_new' => [[], ['_controller' => 'App\\Controller\\SubjectForumController::new'], [], [['text', '/admin/subject/forum/new']], [], []],
    'subject_forum_show' => [['id'], ['_controller' => 'App\\Controller\\SubjectForumController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subject/forum']], [], []],
    'subject_forum_edit' => [['id'], ['_controller' => 'App\\Controller\\SubjectForumController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subject/forum']], [], []],
    'subject_forum_delete' => [['id'], ['_controller' => 'App\\Controller\\SubjectForumController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subject/forum']], [], []],
    'supprimer_subject_forum' => [['id'], ['_controller' => 'App\\Controller\\SubjectForumController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subject/forum/supprimer']], [], []],
    'activer_subject_forum' => [['id'], ['_controller' => 'App\\Controller\\SubjectForumController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subject/forum/activer']], [], []],
    'time_stamp_index' => [[], ['_controller' => 'App\\Controller\\TimeStampController::index'], [], [['text', '/admin/timestamp/']], [], []],
    'time_stamp_new' => [[], ['_controller' => 'App\\Controller\\TimeStampController::new'], [], [['text', '/admin/timestamp/new']], [], []],
    'time_stamp_show' => [['id'], ['_controller' => 'App\\Controller\\TimeStampController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/timestamp']], [], []],
    'time_stamp_edit' => [['id'], ['_controller' => 'App\\Controller\\TimeStampController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/timestamp']], [], []],
    'time_stamp_delete' => [['id'], ['_controller' => 'App\\Controller\\TimeStampController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/timestamp']], [], []],
    'supprimer_time_stamp' => [['id'], ['_controller' => 'App\\Controller\\TimeStampController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/timestamp/supprimer']], [], []],
    'activer_time_stamp' => [['id'], ['_controller' => 'App\\Controller\\TimeStampController::activer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/timestamp/activer']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'supprimer_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/supprimer']], [], []],
    'activer_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::activerAMHE'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/activer']], [], []],
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::load'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/agenda' => [[['_route' => 'admin_agenda_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agenda/new' => [[['_route' => 'admin_agenda_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/agenda/batch-delete' => [[['_route' => 'admin_agenda_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/agenda/autocomplete' => [[['_route' => 'admin_agenda_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agenda/render-filters' => [[['_route' => 'admin_agenda_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agenda-slot-pattern' => [[['_route' => 'admin_agenda_slot_pattern_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agenda-slot-pattern/new' => [[['_route' => 'admin_agenda_slot_pattern_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/agenda-slot-pattern/batch-delete' => [[['_route' => 'admin_agenda_slot_pattern_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/agenda-slot-pattern/autocomplete' => [[['_route' => 'admin_agenda_slot_pattern_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/agenda-slot-pattern/render-filters' => [[['_route' => 'admin_agenda_slot_pattern_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article' => [[['_route' => 'admin_article_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'admin_article_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/article/batch-delete' => [[['_route' => 'admin_article_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/article/autocomplete' => [[['_route' => 'admin_article_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/render-filters' => [[['_route' => 'admin_article_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateurs/new' => [[['_route' => 'admin_utilisateurs_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateurs/batch-delete' => [[['_route' => 'admin_utilisateurs_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/utilisateurs/autocomplete' => [[['_route' => 'admin_utilisateurs_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateurs/render-filters' => [[['_route' => 'admin_utilisateurs_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page2' => [[['_route' => 'admin_wiki_page2_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page2/new' => [[['_route' => 'admin_wiki_page2_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/wiki-page2/batch-delete' => [[['_route' => 'admin_wiki_page2_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/wiki-page2/autocomplete' => [[['_route' => 'admin_wiki_page2_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page2/render-filters' => [[['_route' => 'admin_wiki_page2_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page' => [[['_route' => 'admin_wiki_page_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page/new' => [[['_route' => 'admin_wiki_page_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/wiki-page/batch-delete' => [[['_route' => 'admin_wiki_page_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/wiki-page/autocomplete' => [[['_route' => 'admin_wiki_page_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/wiki-page/render-filters' => [[['_route' => 'admin_wiki_page_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/agenda/book' => [[['_route' => 'app_agenda_book', '_controller' => 'App\\Controller\\AgendaBookingController::book'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'app_user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null],
        ],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wiki' => [[['_route' => 'app_wiki_index', '_controller' => 'App\\Controller\\WikiController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wiki/new' => [[['_route' => 'app_wiki_new', '_controller' => 'App\\Controller\\WikiController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|a(?'
                        .'|genda(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:49)'
                                    .'|delete(*:62)'
                                .')'
                                .'|(*:70)'
                            .')'
                            .'|\\-slot\\-pattern/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:113)'
                                    .'|delete(*:127)'
                                .')'
                                .'|(*:136)'
                            .')'
                        .')'
                        .'|rticle/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:172)'
                                .'|delete(*:186)'
                            .')'
                            .'|(*:195)'
                        .')'
                    .')'
                    .'|utilisateurs/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:237)'
                            .'|delete(*:251)'
                        .')'
                        .'|(*:260)'
                    .')'
                    .'|wiki\\-page(?'
                        .'|2/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:303)'
                                .'|delete(*:317)'
                            .')'
                            .'|(*:326)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:355)'
                                .'|delete(*:369)'
                            .')'
                            .'|(*:378)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:420)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:461)'
                .')'
                .'|/wiki/(?'
                    .'|([^/]++)/location/attach/([^/]++)(*:512)'
                    .'|(\\d+)(*:525)'
                    .'|([^/]++)/(?'
                        .'|delete(*:551)'
                        .'|pattern/([^/]++)/delete(*:582)'
                        .'|forum/create(*:602)'
                    .')'
                .')'
                .'|/tag/([^/]++)(?'
                    .'|(*:628)'
                    .'|/forum/create(*:649)'
                .')'
                .'|/u/([^/]++)(*:669)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'admin_agenda_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        62 => [[['_route' => 'admin_agenda_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        70 => [[['_route' => 'admin_agenda_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        113 => [[['_route' => 'admin_agenda_slot_pattern_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        127 => [[['_route' => 'admin_agenda_slot_pattern_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        136 => [[['_route' => 'admin_agenda_slot_pattern_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AgendaSlotPatternCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => 'admin_article_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        186 => [[['_route' => 'admin_article_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        195 => [[['_route' => 'admin_article_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'admin_utilisateurs_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        251 => [[['_route' => 'admin_utilisateurs_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        260 => [[['_route' => 'admin_utilisateurs_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateursCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateursCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'admin_wiki_page2_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        317 => [[['_route' => 'admin_wiki_page2_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        326 => [[['_route' => 'admin_wiki_page2_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPage2CrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPage2CrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'admin_wiki_page_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        369 => [[['_route' => 'admin_wiki_page_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        378 => [[['_route' => 'admin_wiki_page_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\WikiPageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\WikiPageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        461 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        512 => [[['_route' => 'app_wiki_location_attach', '_controller' => 'App\\Controller\\LocationAttachController::attach'], ['id', 'externalId'], ['POST' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_wiki_show', '_controller' => 'App\\Controller\\WikiController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        551 => [[['_route' => 'app_wiki_delete', '_controller' => 'App\\Controller\\WikiController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        582 => [[['_route' => 'app_wiki_pattern_delete', '_controller' => 'App\\Controller\\WikiController::deletePattern'], ['wikiId', 'id'], ['POST' => 0], null, false, false, null]],
        602 => [[['_route' => 'app_wiki_forum_create', '_controller' => 'App\\Controller\\WikiController::createForum'], ['id'], ['POST' => 0], null, false, false, null]],
        628 => [[['_route' => 'app_tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        649 => [[['_route' => 'app_tag_forum_create', '_controller' => 'App\\Controller\\TagController::createForum'], ['id'], ['POST' => 0], null, false, false, null]],
        669 => [
            [['_route' => 'app_user_public', '_controller' => 'App\\Controller\\UserController::publicPage'], ['identifier'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

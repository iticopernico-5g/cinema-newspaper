<?php
require_once __DIR__ . '/../camezilla/camezilla.php';

use App\Models\Article;
use App\Models\Category;
use App\Models\PriorityLevel;
use App\Services\ArticleService;
use Camezilla\Dispatchers\Dispatcher;

$dispatcher = new Dispatcher(page('not-found.php'), page('error.php'));
$articleService = new ArticleService();

$dispatcher->post('create', function($params) use ($articleService) {
    $article = new Article(null, $params['title'], $params['description'], Category::PressReview, "link", $params['text'], PriorityLevel::MEDIUM, "Autore Anonimo", new DateTime());
    
    try {
        $articleService->create($article);
        Dispatcher::ok_redirect();
    } catch (Exception $e) {
        Dispatcher::error_go_back($e->getMessage());
    }
});

$dispatcher->post('update', function($params) use ($articleService) {
    $article = new Article($params['id'], $params['title'], $params['description'], Category::PressReview, "link", $params['text'], PriorityLevel::MEDIUM, "Autore Anonimo", new DateTime());
    
    try {
        $articleService->update($article);
        Dispatcher::ok_redirect();
    } catch (Exception $e) {
        Dispatcher::error_go_back($e->getMessage());
    }
});

$dispatcher->post('delete', function($params) use ($articleService) {
    $article = new Article($params['id'], null, null, null, null, null, null, null, null);

    try {
        $articleService->delete($article);
        Dispatcher::ok_redirect();
    } catch (Exception $e) {
        Dispatcher::error_go_back($e->getMessage());
    }
});

$dispatcher->dispatch();
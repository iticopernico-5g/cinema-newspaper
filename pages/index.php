<?php
require_once __DIR__ . '/../camezilla/camezilla.php';

use App\Components\Article;
use App\Components\ArticleForm;
use App\Components\ArticleItem;
use App\Layouts\MainLayout;
use App\Services\ArticleService;
use Camezilla\Pages\Page;

require_user_authentication();

$page = new class extends Page {

    public function __construct() {
        $articleService = new ArticleService();
        $articles = $articleService->get_all();

        parent::__construct(new MainLayout("Home"), function () use ($articles) { ?>

            <h1>Home - Articoli</h1>

            <?= new ArticleForm('index.php') ?>

            <?php foreach ($articles as $article): ?>
                <?= new ArticleItem($article) ?>
            <?php endforeach; ?>            

            <a href="<?= action('authentication.php', 'logout', 'index.php') ?>">Logout</a>
            
        <?php });
    }
};

echo $page->render();
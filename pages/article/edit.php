<?php
require_once __DIR__ . '/../../camezilla/camezilla.php';

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
        $article = $articleService->get_by_id($_GET['id']);

        parent::__construct(new MainLayout("Modifica Articolo"), function () use ($article) { ?>

            <h1 class="x">Modifica Articolo</h1>

            <?= new ArticleForm('index.php', $article) ?>
            
        <?php });
    }
};

echo $page->render();
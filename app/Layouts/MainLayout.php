<?php

namespace App\Layouts;

use Camezilla\Layouts\Layout;

class MainLayout extends Layout {

    public function __construct(string $title) {
        parent::__construct($title);
    }

    protected function build(): void { ?>
        <!DOCTYPE html>
        <html lang="<?= get_language() ?>">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>
                    <?= $this->title ?>
                </title>
            </head>
            <body class="body">

                <main class="main">
                    <?php $this->render_content(); ?>
                </main>

            </body>
        </html>
    <?php }
}
<?php
require_once __DIR__ . '/../camezilla/camezilla.php';

use App\Layouts\MainLayout;
use App\Models\Role;
use Camezilla\Pages\Page;

$page = new class extends Page {

    public function __construct() {
        parent::__construct(new MainLayout("Login"), function () { ?>

            <?= get_action_error() ?>

            Login

            <form method="post" action="<?= action('authentication.php', 'login', 'index.php') ?>" >
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

            Register

            <form method="post" action="<?= action('authentication.php', 'register', 'index.php') ?>" >
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="hidden" name="role" value="<?= Role::VIEWER->value ?>">
                <button type="submit">Register</button>
            </form>
            
        <?php });
    }
};

echo $page->render();
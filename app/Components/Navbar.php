<?php

namespace App\Components;

use Camezilla\Components\Component;

class Navbar extends Component
{

    protected function build(): void
    { ?>
        <nav class="filter-menu">
            <div class="header-container menu-wrapper">
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul id="nav-links">
                    <li><a href="index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="rassegna.php"><i class="far fa-newspaper"></i> Rassegna Stampa</a></li>
                    <li><a href="tuttiArticoli.php"><i class="fas fa-book-open"></i> Tutti gli Articoli</a></li>
                    <li><a href="video.php"><i class="fas fa-video"></i> Video</a></li>
                </ul>
            </div>
        </nav>
<?php }
}

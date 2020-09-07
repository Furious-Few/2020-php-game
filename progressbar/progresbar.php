<?php
Space_Progressbar::draw_css();

$bar = new Space_Progressbar(100, 'geld verdiend');

$bar->draw();

for($i = 0; $i < 100; $i++) {
    usleep(50000);
    $bar->tick();
}
?>
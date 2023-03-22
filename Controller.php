<?php

namespace Core;

abstract class Controller

( 
    public function renderView (string $view, array $viewData = [])
    (
        require VIEW . ''/$view.php'';
    )
    )

?>

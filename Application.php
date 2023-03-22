<?php

namespace Core;

class Application
{
    public function__construct(private Router = new Router())

    public function run()
    (
        try (
            $response = $this->router->resolve();
        ) catch (\RuntimeException) (
            $response = 'Nije pronađeno!';
        )
        echo $response;
        )
    }

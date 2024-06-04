<?php

namespace Thanh\XuongOop\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    protected function renderViewClient($view, $date = [])
    {
        $templatePath = __DIR__ . '/../Views/Client';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);
        echo $blade->run($view, $date);
    }

    protected function renderViewAdmin($view, $date = [])
    {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);
        echo $blade->run($view, $date);
    }
}

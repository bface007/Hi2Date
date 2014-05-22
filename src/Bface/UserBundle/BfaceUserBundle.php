<?php

namespace Bface\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BfaceUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

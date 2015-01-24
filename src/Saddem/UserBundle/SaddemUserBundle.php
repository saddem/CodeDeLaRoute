<?php

namespace Saddem\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SaddemUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

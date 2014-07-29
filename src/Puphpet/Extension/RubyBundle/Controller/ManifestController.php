<?php

namespace Puphpet\Extension\RubyBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManifestController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetExtensionRubyBundle:manifest:Ruby.pp.twig', [
            'data' => $data,
        ]);
    }
}

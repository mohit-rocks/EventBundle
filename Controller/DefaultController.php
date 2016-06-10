<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(array(
          'name' => 'Test event 1',
        ));
        return $this->render(
          'EventBundle:Default:index.html.twig',
          array('event' => $event)
        );
    }
}

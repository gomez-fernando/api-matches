<?php


namespace App\Api\Action;


use App\Entity\Match;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\SerializerInterface;


class DbController
{
    // Dispatcher Event
    private $dispatcher;
    // Data persistence
    private $managerRegistry = null;
    // Object serializer
    private $serializer = null;
    // Dependencies Injection
    public function __construct(EventDispatcherInterface $dispatcher,ManagerRegistry $managerRegistry,SerializerInterface $serializer)
    {
        $this->managerRegistry = $managerRegistry;
        $this->serializer = $serializer;
        $this->dispatcher = $dispatcher;
    }
    /**
     * @Route("/db-views", methods={"GET"})
     * @return Response
     */
    public function dbViews(){
        $matches = $this->managerRegistry
            ->getRepository(Match::class)
            ->findAll();

        //
        $jsonResponse = $this->prepareJsonResponse($matches);
        //dd($jsonResponse);
        return new Response($jsonResponse);
    }

    /**
     * @param $object
     * @return string
     */
    public function prepareJsonResponse($object) {

        return $this->serializer->serialize([$object],'json',[
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);
    }
}
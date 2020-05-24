<?php
namespace App\Api\Action;


use App\Entity\Card;
use App\Entity\Match;
use App\Entity\Player;
use App\Entity\Team;
use App\Entity\Score;
use App\Events\SneakEvent;
use DateTime;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MatchController
{

    // Data persistence
    private $managerRegistry = null;
    // Object serializer
    private $serializer = null;

    // Dependencies Injection
    public function __construct(ManagerRegistry $managerRegistry, SerializerInterface $serializer){
        $this->managerRegistry = $managerRegistry;
        $this->serializer = $serializer;
    }

    // endpoint
    /**
     * @Route("bnzsa/match-data", methods={"GET", "POST"})
     */
    public function __invoke(Request $request): Response{
        return new Response('OK');
    }


}

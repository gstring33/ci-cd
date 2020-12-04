<?php

namespace App\Controller;

use App\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevController extends AbstractController
{
    /** @var Calculator */
    private $calculator;

    /**
     * DevController constructor.
     * @param Calculator $calculator
     */
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/", name="dev")
     */
    public function index(): Response
    {
        $total = $this->calculator->add(2, 10);

        return $this->render('dev/index.html.twig', [
            'total' => $total,
            'user' => 'John Doe'
        ]);
    }
}

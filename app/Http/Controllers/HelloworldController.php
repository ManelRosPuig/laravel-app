<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloworldController extends Controller
{
    public function sum($x, $y)
    {
        // return "El resultat és " . $x + $y;
        return new JsonResponse([
            'result' => $x + $y
        ]);
    }

    public function min($x, $y)
    {
        // return "El resultat és " . $x - $y;
        return new JsonResponse([
            'result' => $x - $y
        ]);
    }

    public function mul($x, $y)
    {
        // return "El resultat és " . $x * $y;
        return new JsonResponse([
            'result' => $x * $y
        ]);
    }

    public function div($x, $y)
    {
        // return "El resultat és " . $x / $y;
        return new JsonResponse([
            'result' => $x / $y
        ]);
    }
}

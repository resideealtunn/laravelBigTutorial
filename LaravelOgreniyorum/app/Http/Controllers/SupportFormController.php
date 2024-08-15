<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Illuminate\Http\Request;
class SupportFormController extends Controller
{
    public function support(Request $request)
    {
        dd($request->all());
    }
}

<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        return new Response('<html><body>
            <h1 style="text-align: center; font-family: sans-serif; margin-top: 150px;">Welcome to your homepage '. $request->query->get('name') .'!</h1>
            <img src="https://heavyeditorial.files.wordpress.com/2018/02/screen-shot-2018-02-06-at-4-56-27-pm1.jpg" alt="starman" style="margin: 100px auto; display: block;">
        </body></html>');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return new Response('<html><body><h1 style="text-align: center; font-family: sans-serif; margin-top: 150px;">Welcome to your blog controller!</h1></body></html>');
    }
}



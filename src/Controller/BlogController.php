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
    public function index()
    {
        return new Response('
<html>
    <body>
        <h1 style="text-align: center; font-family: sans-serif; margin-top: 150px;">
            Welcome to your blog controller! 
        </h1>
    </body>
</html>');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(Request $request)
    {
        $name = $request->query->get('name');

        return $this->render('blog.html.twig', [
            'blog_title' => 'Mon super blog',
            'name' => $name,
        ]);
    }
}











<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        $number = random_int(0, 1000);
        if ($number < 50)
        {
            $number=50;
        }
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }


    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show2($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }


    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }


    /**
     * Matches /blog4/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show4($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }

    /**
     * Matches /blog3/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show3($slug)
    {
        //l9lawi
    }


    /**
     * Matches /blog5/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show11($slug)
    {
        //ikhrawen
    }

    /**
     * Matches /blog6/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show10($slug)
    {
        //i9lawen
    }


    /**
     * Matches /blog7/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show9($slug)
    {
      //ou ana zbiloux 2
    }
}
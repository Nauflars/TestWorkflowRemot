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
     * Matches /blog3/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show3($slug)
    {
        //zbouba
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
     * @Route("/lucky/number20")
     */
    public function number20()
    {
        $number = random_int(0, 1000);
        if ($number > 50)
        {
            $number=50;
        }else if ($number<20)
        {
            $number=0;
        }else if ($number==20){
            $number=20;
        }else if ($number>20)
        {
            $number=30;
        }else if ($number==0)
        {
            $number=0;
        }


        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
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


    /**
     * Matches /blog12/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show12($slug)
    {
        //show12
    }

    /**
     * Matches /blog13/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show20($slug)
    {
        //ou ana zbiloux 2
    }
    /**
     * @Route("/lucky/number8")
     */
    public function number130()
    {
        $number = random_int(0, 1000);
        if ($number > 50)
        {
            $number=50;
        }else if ($number<20)
        {
            $number=0;
        }else if ($number==20){
            $number=20;
        }else if ($number>20)
        {
            $number=30;
        }else if ($number==0)
        {
            $number=0;
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    /**
     * Matches /blog13/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show13($slug)
    {
        //ou ana zbiloux 2
    }

    /**
     * Matches /blog13/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show14($slug)
    {
        //ou ana zbiloux 2
    }

    /**
 * Matches /blog13/*
 *
 * @Route("/blog/{slug}", name="blog_show")
 */
    public function show15($slug)
    {
        //ou ana zbiloux 2
    }

    /**
     * Matches /blog16/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show16($slug)
    {
        //ou ana zbiloux 2
    }
    /**
     * @Route("/lucky/number8")
     */
    public function number14()
    {
        $number = random_int(0, 1000);
        if ($number > 50)
        {
            $number=50;
        }else if ($number>20)
        {
            $number=0;
        }else if ($number<20){
            $number=20;
        }else if ($number<20)
        {
            $number=30;
        }else if ($number>0)
        {
            $number=0;
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
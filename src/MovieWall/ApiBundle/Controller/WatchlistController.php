<?php

namespace MovieWall\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use MovieWall\ApiBundle\Model\WatchlistManager;
use MovieWall\ApiBundle\Document\Movie;

/**
 * Class WatchlistController
 * @package MovieWall\ApiBundle\Controller
 * @Route("/watchlist")
 */
class WatchlistController extends Controller
{
    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method"
     * )
     *
     * @Route("/all")
     * @Rest\View
     *
     */
    public function allAction()
    {
        $movies = WatchlistManager::findMovies();

        return array('movies' => $movies);
    }

    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @Route("/get/{id}")
     * @Rest\View
     *
     * @param integer $id Movie id
     * @ApiDoc()
     *
     */
    public function getAction($id)
    {
        $movie = WatchlistManager::getMovie($id);

        if(!$movie instanceof Movie){
            throw new NotFoundHttpException('Movie not found');
        }

        return array('movie' => $movie);
    }
}

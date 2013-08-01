<?php
namespace MovieWall\ApiBundle\Model;


interface MovieableInterface {

    public function getMovie($movie);

    public function addMovie();

    public function removeMovie($movie);

    public function findMovies();

}
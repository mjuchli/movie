<?php
namespace MovieWall\ApiBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="MovieWall\ApiBundle\Document\MovieRepository")
 */
class Movie
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Timestamp
     */
    protected $addedAt;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set addedAt
     *
     * @param timestamp $addedAt
     * @return self
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
        return $this;
    }

    /**
     * Get addedAt
     *
     * @return timestamp $addedAt
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }
}

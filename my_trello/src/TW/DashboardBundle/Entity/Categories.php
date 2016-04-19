<?php

namespace TW\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="TW\DashboardBundle\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="project", type="integer")
     */
    private $project;

    /**
     * @var int
     *
     * @ORM\Column(name="orderr", type="integer")
     */
    private $orderr;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Categories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set project
     *
     * @param integer $project
     *
     * @return Categories
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return int
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set orderr
     *
     * @param integer $orderr
     *
     * @return Categories
     */
    public function setOrderr($orderr)
    {
        $this->orderr = $orderr;

        return $this;
    }

    /**
     * Get orderr
     *
     * @return int
     */
    public function getOrderr()
    {
        return $this->orderr;
    }
}

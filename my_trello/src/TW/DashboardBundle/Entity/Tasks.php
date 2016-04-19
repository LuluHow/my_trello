<?php

namespace TW\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity(repositoryClass="TW\DashboardBundle\Repository\TasksRepository")
 */
class Tasks
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
     * @var int
     *
     * @ORM\Column(name="project", type="integer")
     */
    private $project;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_tasks", type="string", length=255)
     */
    private $subTasks;

    /**
     * @var int
     *
     * @ORM\Column(name="orderr", type="integer")
     */
    private $orderr;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;


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
     * Set project
     *
     * @param integer $project
     *
     * @return Tasks
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
     * Set owner
     *
     * @param integer $owner
     *
     * @return Tasks
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tasks
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
     * Set content
     *
     * @param string $content
     *
     * @return Tasks
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return Tasks
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subTasks
     *
     * @param string $subTasks
     *
     * @return Tasks
     */
    public function setSubTasks($subTasks)
    {
        $this->subTasks = $subTasks;

        return $this;
    }

    /**
     * Get subTasks
     *
     * @return string
     */
    public function getSubTasks()
    {
        return $this->subTasks;
    }

    /**
     * Set orderr
     *
     * @param integer $orderr
     *
     * @return Tasks
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

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Tasks
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}

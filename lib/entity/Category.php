<?php

class Category
{
    private $id;
    private $name;
    private $description;
    private $img;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $img
     */
    public function __construct($id, $name, $description,$img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }


}
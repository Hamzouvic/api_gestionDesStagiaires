<?php


class Domain
{
    protected int $id;
    protected string $designation;

    public function __construct($options = array())
    {
        if(key_exists("id",$options))
            $this->id = $options["id"];
        if(key_exists("designation",$options))
            $this->designation = $options["designation"];
    }

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed|string $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }
}
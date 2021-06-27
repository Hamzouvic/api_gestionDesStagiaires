<?php

class Document
{
    protected int $id;
    protected string $nomDoc;
    protected string $dateUpload;

    public function __construct($options = array())
    {
        if (key_exists("id", $options))
            $this->id = $options["id"];
        if (key_exists("nomDoc", $options))
            $this->nomDoc = $options["nomDoc"];
        if (key_exists("dateUpload", $options))
            $this->dateUpload = $options["dateUpload"];
    }

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }

    /**
     * @param mixed|string $dateUpload
     */
    public function setDateUpload($dateUpload): void
    {
        $this->dateUpload = $dateUpload;
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
        return $this->nomDoc;
    }

    /**
     * @param mixed|string $nomDoc
     */
    public function setDesignation($nomDoc): void
    {
        $this->nomDoc = $nomDoc;
    }
}

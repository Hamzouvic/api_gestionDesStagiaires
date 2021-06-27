<?php


class Formation
{
    protected int $id;
    protected string $designation;
    protected string $description;
    protected int $idPersonnel;
    protected array $domains;
    protected Document $document;

    public function __construct($options = array())
    {
        if(key_exists("id",$options))
            $this->id = $options["id"];
        if(key_exists("designation",$options))
            $this->designation = $options["designation"];
        if(key_exists("description",$options))
            $this->description = $options["description"];
        if(key_exists("idPersonnel",$options))
            $this->idPersonnel = $options["idPersonnel"];
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

    /**
     * @return mixed|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed|string $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|mixed
     */
    public function getIdPersonnel()
    {
        return $this->idPersonnel;
    }

    /**
     * @param int|mixed $idPersonnel
     */
    public function setIdPersonnel($idPersonnel): void
    {
        $this->idPersonnel = $idPersonnel;
    }

    /**
     * @return array
     */
    public function getDomains(): array
    {
        return $this->domains;
    }

    /**
     * @param array $domains
     */
    public function addDomain(Domain $domain): void
    {
        array_push($this->domains,$domain);
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document): void
    {
        $this->document = $document;
    }

}
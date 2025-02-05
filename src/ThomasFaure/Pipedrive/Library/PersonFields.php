<?php

namespace ThomasFaure\Pipedrive\Library;

use ThomasFaure\Pipedrive\Exceptions\PipedriveMissingFieldError;

/**
 * Pipedrive PersonFields Methods
 *
 */
class PersonFields
{
    /**
     * Hold the pipedrive cURL session
     * @var \ThomasFaure\Pipedrive\Library\Curl Curl Object
     */
    protected $curl;

    /**
     * Initialise the object load master class
     */
    public function __construct(\ThomasFaure\Pipedrive\Pipedrive $master)
    {
        //associate curl class
        $this->curl = $master->curl();
    }

    /**
     * Returns all person fields
     *
     * @return array returns all personFields
     */
    public function getAll()
    {
        return $this->curl->get('personFields');
    }

    /**
     * Returns a person field
     *
     * @param  int   $id pipedrive personField id
     * @return array returns details of a personField
     */
    public function getById($id)
    {
        return $this->curl->get('personFields/' . $id);
    }
}

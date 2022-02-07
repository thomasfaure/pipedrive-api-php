<?php

namespace ThomasFaure\Pipedrive\Library;

use ThomasFaure\Pipedrive\Exceptions\PipedriveMissingFieldError;

/**
 * Pipedrive OrganizationFields Methods
 *
 */
class OrganizationFields
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
     * Returns all organization fields
     *
     * @return array returns all organizationFields
     */
    public function getAll()
    {
        return $this->curl->get('organizationFields');
    }

    /**
     * Returns a organization field
     *
     * @param  int   $id pipedrive organizationField id
     * @return array returns details of a organizationField
     */
    public function getById($id)
    {
        return $this->curl->get('organizationFields/' . $id);
    }
}

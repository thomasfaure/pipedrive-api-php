<?php

namespace ThomasFaure\Pipedrive\Library;

use ThomasFaure\Pipedrive\Exceptions\PipedriveMissingFieldError;

/**
 * Pipedrive Products Methods
 *
 * Products are the goods or services you are dealing with.
 * Each product can have N different price points - first, each Product can
 * have a price in N different currencies, and secondly, each Product can
 * have N variations of itself, each having N prices different currencies.
 * Note that only one price per variation per currency is supported.
 * Products can be instantiated to Deals. In the context of instatiation,
 * a custom price, quantity, duration and discount can be applied.
 */
class Products
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
     * Returns a product / products
     *
     * @param  string $name pipedrive prodeuct name
     * @return array  returns detials of a product
     */
    public function getByName($name)
    {
        $params = array('term' => $name);
        return $this->curl->get('products/find', $params);
    }
}

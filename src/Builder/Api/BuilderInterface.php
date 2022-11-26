<?php

namespace Zwolin\DesignPatterns\Builder\Api;

interface BuilderInterface
{
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @return $this
     */
    public function addCountryPl();

    /**
     * @return $this
     */
    public function addCountryUk();

    /**
     * @return $this
     */
    public function addCountryUs();

    /**
     * @param float $name
     * @return $this
     */
    public function setPrice(float $price);    

    /**
     * @return $this
     */
    public function publish();

    /**
     * @return $this
     */
    public function setAsExternal();

        /**
     * @return $this
     */
    public function useInFeed();

}
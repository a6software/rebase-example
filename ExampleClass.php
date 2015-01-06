<?php

class ExampleClass
{
    private $property;

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param mixed $property
     * @return ExampleClass
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }
}
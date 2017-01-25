<?php

/**
 * Widget
 *
 * @copyright 2017 Phil Thompson
 */
class Widget extends Eloquent
{
    /** @var string $table */
    protected $table = "widgets";

    /** @var array $fillable */
    protected $fillable = ["size"];

    /**
     * getId
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * getSize
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * setSize
     *
     * @param int $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}

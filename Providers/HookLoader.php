<?php

namespace UserExpirance\Providers;

/**
 * HookLoader class
 */
class HookLoader
{
    /**
     * array containing actions
     * @var array $actions
     */
    protected $actions;

    /**
     * array containing filters
     * @var array $filters
     */
    protected $filters;

    /**
     * class constructor
     * @return void
     */
    public function __construct()
    {
        /**
         * set the params to be arrays
         */
        $this->actions = [];
        $this->filters = [];
    }

    /**
     * add filter method
     * @param string $filter
     * @param instance $object
     * @param string $method
     */
    public function addFilter($filter, $object, $method)
    {
        $this->filters = $this->add($this->filters, $filter, $object, $method);
    }

    /**
     * add action method
     * @param string $filter
     * @param instance $object
     * @param string $method
     */
    public function addAction($action, $object, $method)
    {
        $this->actions = $this->add($this->actions, $action, $object, $method);
    }

    /**
     * get filters
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * get actions
     * @return array
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * method which puts the actions and filters and theirs object methods callbacks into array
     * @return array
     */
    protected function add($array, $hook, $object, $method)
    {
        $array[] = [
            'hook'    => $hook,
            'object'  => $object,
            'method'  => $method
        ];

        return $array;
    }
}

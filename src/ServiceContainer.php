<?php

namespace Framework;

use Exception;

class ServiceContainer
{
    /** @var array<class-string, object>  */
    private array $instances = [];

    /**
     * @param class-string $id
     * @param object $instance
     * @throws Exception
     */
    public function set(string $id, object $instance): void
    {
        if (!$instance instanceof $id) {
            throw new Exception("Instance must be of type $id");
        }
        if (isset($this->instances[$id])) {
            throw new Exception("Instance already exists");
        }
        $this->instances[$id] = $instance;
    }

    /**
     * @throws Exception
     */
    public function get(string $id): object
    {
        if (!isset($this->instances[$id])) {
            throw new Exception("Target binding $id does not exist");
        }

        return $this->instances[$id];
    }
}

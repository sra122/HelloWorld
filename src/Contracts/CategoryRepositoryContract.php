<?php

namespace HelloWorld\Contracts;

/**
 * Interface CategoryRepositoryContract
 */
interface CategoryRepositoryContract
{
    /**
     * Get all taxonomies.
     *
     * @param array $filters
     * @param array $with
     *
     * @return array
     */
    public function all(array $filters = [], array $with = []);
}

<?php

namespace MinimumViableTests\FizzBuzz;

class FizzBuzz
{
    public function process($collection)
    {
        $filteredCollection = array_filter($collection, function ($item) {
            return is_int($item);
        });
        if ($filteredCollection !== $collection) {
            throw new \Exception('Did not receive a collection of integers');
        }

        return $filteredCollection;
    }
}

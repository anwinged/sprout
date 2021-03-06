<?php
declare(strict_types=1);

namespace Sprout;

if (!function_exists('Sprout\root')) {
    /**
     * Creates root node.
     *
     * @param string      $name
     * @param string|null $attributes
     *
     * @return Node
     */
    function root(string $name, string $attributes = null): Node
    {
        return new Node($name, $attributes);
    }
}

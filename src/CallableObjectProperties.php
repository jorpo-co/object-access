<?php declare(strict_types=1);

namespace Jorpo\ObjectAccess;

trait CallableObjectProperties
{
    /**
     * @return mixed 
     */
    public function __call(string $property, $value = null)
    {
        if (!property_exists($this, $property) || null === $value) {
            return;
        }

        if (property_exists($this, $property) && empty($this->{$property})) {
            $this->{$property} = $value;
        }

        return $this->{$property};
    }
}

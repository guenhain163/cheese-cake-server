<?php


namespace App\Serializer;


use League\Fractal\Serializer\ArraySerializer;

class SimpleArraySerializer extends ArraySerializer
{
    /**
     * Serialize a collection without "data" key.
     *
     * @param string $resourceKey
     * @param array $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $data;
    }
}

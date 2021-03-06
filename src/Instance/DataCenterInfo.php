<?php

namespace EurekaClient\Instance;

/**
 * Class DataCenterInfo
 *
 * @package EurekaClient\Instance
 */
class DataCenterInfo extends Parameters
{
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->set('name', $name);
    }

    /**
     * @param string $class
     *
     * @return $this
     */
    public function setClass($class)
    {
        return $this->set('@class', $class);
    }

    /**
     * @param Metadata $metadata
     *
     * @return $this
     */
    public function setMetadata(Metadata $metadata)
    {
        return $this->set('metadata', $metadata->export());
    }
}

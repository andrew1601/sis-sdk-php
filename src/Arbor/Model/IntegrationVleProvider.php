<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntegrationVleProvider extends ModelBase
{
    const NAME = 'name';

    const CONFIGURATION = 'configuration';

    const ENABLED = 'enabled';

    const CODE = 'code';

    protected $_resourceType = ResourceType::INTEGRATION_VLE_PROVIDER;

    /**
     * @param Query $query
     * @return IntegrationVleProvider[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::INTEGRATION_VLE_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationVleProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATION_VLE_PROVIDER, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->getProperty('configuration');
    }

    /**
     * @param string $configuration
     */
    public function setConfiguration($configuration = null)
    {
        $this->setProperty('configuration', $configuration);
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty('enabled');
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }
}

<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntegrationsCashlessCateringSystemProvider extends ModelBase
{
    const NAME = 'name';

    const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    const PROVIDER = 'provider';

    const ENABLED = 'enabled';

    protected $_resourceType = ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER;

    /**
     * @param Query $query
     * @return IntegrationsCashlessCateringSystemProvider[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsCashlessCateringSystemProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER, $id);
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
     * @return CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }

    /**
     * @param string $provider
     */
    public function setProvider($provider = null)
    {
        $this->setProperty('provider', $provider);
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
}

<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DataSource extends ModelBase
{
    const DOMAIN = 'domain';

    const PROVIDER = 'provider';

    protected $_resourceType = ResourceType::DATA_SOURCE;

    /**
     * @param Query $query
     * @return DataSource[] | Collection
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

        $query->setResourceType(ResourceType::DATA_SOURCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataSource
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_SOURCE, $id);
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->getProperty('domain');
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain = null)
    {
        $this->setProperty('domain', $domain);
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

}

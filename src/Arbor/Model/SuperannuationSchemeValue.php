<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SuperannuationSchemeValue extends ModelBase
{
    const SUPERANNUATION_SCHEME = 'superannuationScheme';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const VALUE = 'value';

    protected $_resourceType = ResourceType::SUPERANNUATION_SCHEME_VALUE;

    /**
     * @param Query $query
     * @return SuperannuationSchemeValue[] | Collection
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

        $query->setResourceType(ResourceType::SUPERANNUATION_SCHEME_VALUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SuperannuationSchemeValue
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUPERANNUATION_SCHEME_VALUE, $id);
    }

    /**
     * @return SuperannuationScheme
     */
    public function getSuperannuationScheme()
    {
        return $this->getProperty('superannuationScheme');
    }

    /**
     * @param SuperannuationScheme $superannuationScheme
     */
    public function setSuperannuationScheme(SuperannuationScheme $superannuationScheme = null)
    {
        $this->setProperty('superannuationScheme', $superannuationScheme);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param float $value
     */
    public function setValue($value = null)
    {
        $this->setProperty('value', $value);
    }
}

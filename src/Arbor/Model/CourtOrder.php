<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CourtOrder extends ModelBase
{
    const SUMMARY = 'summary';

    const CONTENT = 'content';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::COURT_ORDER;

    /**
     * @param Query $query
     * @return CourtOrder[] | Collection
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

        $query->setResourceType(ResourceType::COURT_ORDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CourtOrder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COURT_ORDER, $id);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty('summary', $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param string $content
     */
    public function setContent($content = null)
    {
        $this->setProperty('content', $content);
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

}

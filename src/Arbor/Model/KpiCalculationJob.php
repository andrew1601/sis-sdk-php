<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class KpiCalculationJob extends ModelBase
{

    const KPI = 'kpi';

    const REFERENCE_DATE = 'referenceDate';

    const REQUESTED_DATETIME = 'requestedDatetime';

    const STARTED_DATETIME = 'startedDatetime';

    const COMPLETED_DATETIME = 'completedDatetime';

    const THREAD_ID = 'threadId';

    protected $_resourceType = ResourceType::KPI_CALCULATION_JOB;

    /**
     * @param Query $query
     * @return KpiCalculationJob[] | Collection
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

        $query->setResourceType(ResourceType::KPI_CALCULATION_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return KpiCalculationJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::KPI_CALCULATION_JOB, $id);
    }

    /**
     * @return Kpi
     */
    public function getKpi()
    {
        return $this->getProperty('kpi');
    }

    /**
     * @param Kpi $kpi
     */
    public function setKpi(Kpi $kpi = null)
    {
        $this->setProperty('kpi', $kpi);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->getProperty('referenceDate');
    }

    /**
     * @param \DateTime $referenceDate
     */
    public function setReferenceDate(\DateTime $referenceDate = null)
    {
        $this->setProperty('referenceDate', $referenceDate);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty('requestedDatetime');
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty('requestedDatetime', $requestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getStartedDatetime()
    {
        return $this->getProperty('startedDatetime');
    }

    /**
     * @param \DateTime $startedDatetime
     */
    public function setStartedDatetime(\DateTime $startedDatetime = null)
    {
        $this->setProperty('startedDatetime', $startedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return string
     */
    public function getThreadId()
    {
        return $this->getProperty('threadId');
    }

    /**
     * @param string $threadId
     */
    public function setThreadId($threadId = null)
    {
        $this->setProperty('threadId', $threadId);
    }


}

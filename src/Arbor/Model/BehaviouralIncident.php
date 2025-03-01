<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncident extends ModelBase
{
    const BEHAVIOUR = 'behaviour';

    const INCIDENT_NAME = 'incidentName';

    const NARRATIVE = 'narrative';

    const INCIDENT_DATETIME = 'incidentDatetime';

    const SEVERITY = 'severity';

    const EVENT = 'event';

    const LOCATION = 'location';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const LOGGED_BY_STAFF = 'loggedByStaff';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT;

    /**
     * @param Query $query
     * @return BehaviouralIncident[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncident
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT, $id);
    }

    /**
     * @return Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty('behaviour');
    }

    /**
     * @param Behaviour $behaviour
     */
    public function setBehaviour(Behaviour $behaviour = null)
    {
        $this->setProperty('behaviour', $behaviour);
    }

    /**
     * @return string
     */
    public function getIncidentName()
    {
        return $this->getProperty('incidentName');
    }

    /**
     * @param string $incidentName
     */
    public function setIncidentName($incidentName = null)
    {
        $this->setProperty('incidentName', $incidentName);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getIncidentDatetime()
    {
        return $this->getProperty('incidentDatetime');
    }

    /**
     * @param \DateTime $incidentDatetime
     */
    public function setIncidentDatetime(\DateTime $incidentDatetime = null)
    {
        $this->setProperty('incidentDatetime', $incidentDatetime);
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty('severity');
    }

    /**
     * @param string $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty('resolvedDatetime');
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty('resolvedDatetime', $resolvedDatetime);
    }

    /**
     * @return Staff
     */
    public function getLoggedByStaff()
    {
        return $this->getProperty('loggedByStaff');
    }

    /**
     * @param Staff $loggedByStaff
     */
    public function setLoggedByStaff(Staff $loggedByStaff = null)
    {
        $this->setProperty('loggedByStaff', $loggedByStaff);
    }
}

<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SchoolEvent extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHOOL_EVENT_TYPE = 'schoolEventType';

    const REPEATING_SCHOOL_EVENT = 'repeatingSchoolEvent';

    const SCHOOL_EVENT_NAME = 'schoolEventName';

    const TIMETABLE_SLOT = 'timetableSlot';

    const NARRATIVE = 'narrative';

    const COVER_REQUIRED = 'coverRequired';

    protected $_resourceType = ResourceType::SCHOOL_EVENT;

    /**
     * @param Query $query
     * @return SchoolEvent[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_EVENT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty('locationText', $locationText);
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
     * @return SchoolEventType
     */
    public function getSchoolEventType()
    {
        return $this->getProperty('schoolEventType');
    }

    /**
     * @param SchoolEventType $schoolEventType
     */
    public function setSchoolEventType(SchoolEventType $schoolEventType = null)
    {
        $this->setProperty('schoolEventType', $schoolEventType);
    }

    /**
     * @return RepeatingSchoolEvent
     */
    public function getRepeatingSchoolEvent()
    {
        return $this->getProperty('repeatingSchoolEvent');
    }

    /**
     * @param RepeatingSchoolEvent $repeatingSchoolEvent
     */
    public function setRepeatingSchoolEvent(RepeatingSchoolEvent $repeatingSchoolEvent = null)
    {
        $this->setProperty('repeatingSchoolEvent', $repeatingSchoolEvent);
    }

    /**
     * @return string
     */
    public function getSchoolEventName()
    {
        return $this->getProperty('schoolEventName');
    }

    /**
     * @param string $schoolEventName
     */
    public function setSchoolEventName($schoolEventName = null)
    {
        $this->setProperty('schoolEventName', $schoolEventName);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
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
     * @return bool
     */
    public function getCoverRequired()
    {
        return $this->getProperty('coverRequired');
    }

    /**
     * @param bool $coverRequired
     */
    public function setCoverRequired($coverRequired = null)
    {
        $this->setProperty('coverRequired', $coverRequired);
    }
}

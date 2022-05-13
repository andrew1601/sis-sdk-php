<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetableSlotLocation extends ModelBase
{
    const TIMETABLE_SLOT = 'timetableSlot';

    const LOCATION = 'location';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT_LOCATION;

    /**
     * @param Query $query
     * @return TimetableSlotLocation[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_SLOT_LOCATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableSlotLocation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT_LOCATION, $id);
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
     * @return Room
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param Room $location
     */
    public function setLocation(Room $location = null)
    {
        $this->setProperty('location', $location);
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

<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubSessionInterval extends ModelBase
{
    const CLUB = 'club';

    const TIMETABLE_SLOT = 'timetableSlot';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    const NAME = 'name';

    protected $_resourceType = ResourceType::CLUB_SESSION_INTERVAL;

    /**
     * @param Query $query
     * @return ClubSessionInterval[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_SESSION_INTERVAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubSessionInterval
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_SESSION_INTERVAL, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty('club', $club);
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
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty('endTime', $endTime);
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
}

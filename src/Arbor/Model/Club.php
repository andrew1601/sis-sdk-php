<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Club extends ModelBase
{
    const NAME = 'name';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const MAX_MEMBERS_PER_SESSION = 'maxMembersPerSession';

    const REQUIRE_CONSENT = 'requireConsent';

    const COPIED_TO_CLUB = 'copiedToClub';

    protected $_resourceType = ResourceType::CLUB;

    /**
     * @param Query $query
     * @return Club[] | Collection
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

        $query->setResourceType(ResourceType::CLUB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Club
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB, $id);
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
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getMaxMembersPerSession()
    {
        return $this->getProperty('maxMembersPerSession');
    }

    /**
     * @param int $maxMembersPerSession
     */
    public function setMaxMembersPerSession($maxMembersPerSession = null)
    {
        $this->setProperty('maxMembersPerSession', $maxMembersPerSession);
    }

    /**
     * @return bool
     */
    public function getRequireConsent()
    {
        return $this->getProperty('requireConsent');
    }

    /**
     * @param bool $requireConsent
     */
    public function setRequireConsent($requireConsent = null)
    {
        $this->setProperty('requireConsent', $requireConsent);
    }

    /**
     * @return Club
     */
    public function getCopiedToClub()
    {
        return $this->getProperty('copiedToClub');
    }

    /**
     * @param Club $copiedToClub
     */
    public function setCopiedToClub(Club $copiedToClub = null)
    {
        $this->setProperty('copiedToClub', $copiedToClub);
    }
}

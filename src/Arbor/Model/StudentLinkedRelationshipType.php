<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentLinkedRelationshipType extends ModelBase
{
    const STUDENT_LINKED_RELATIONSHIP_TYPE_NAME = 'studentLinkedRelationshipTypeName';

    const IS_MEDICAL = 'isMedical';

    const IS_ACADEMIC = 'isAcademic';

    protected $_resourceType = ResourceType::STUDENT_LINKED_RELATIONSHIP_TYPE;

    /**
     * @param Query $query
     * @return StudentLinkedRelationshipType[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_LINKED_RELATIONSHIP_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentLinkedRelationshipType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_LINKED_RELATIONSHIP_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getStudentLinkedRelationshipTypeName()
    {
        return $this->getProperty('studentLinkedRelationshipTypeName');
    }

    /**
     * @param string $studentLinkedRelationshipTypeName
     */
    public function setStudentLinkedRelationshipTypeName($studentLinkedRelationshipTypeName = null)
    {
        $this->setProperty('studentLinkedRelationshipTypeName', $studentLinkedRelationshipTypeName);
    }

    /**
     * @return bool
     */
    public function getIsMedical()
    {
        return $this->getProperty('isMedical');
    }

    /**
     * @param bool $isMedical
     */
    public function setIsMedical($isMedical = null)
    {
        $this->setProperty('isMedical', $isMedical);
    }

    /**
     * @return bool
     */
    public function getIsAcademic()
    {
        return $this->getProperty('isAcademic');
    }

    /**
     * @param bool $isAcademic
     */
    public function setIsAcademic($isAcademic = null)
    {
        $this->setProperty('isAcademic', $isAcademic);
    }

}

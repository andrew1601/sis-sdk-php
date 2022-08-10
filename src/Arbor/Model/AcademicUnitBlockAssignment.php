<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitBlockAssignment extends ModelBase
{
    const ACADEMIC_UNIT = 'academicUnit';

    const BLOCK_NAME = 'blockName';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT;

    /**
     * @param Query $query
     * @return AcademicUnitBlockAssignment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitBlockAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_BLOCK_ASSIGNMENT, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return string
     */
    public function getBlockName()
    {
        return $this->getProperty('blockName');
    }

    /**
     * @param string $blockName
     */
    public function setBlockName($blockName = null)
    {
        $this->setProperty('blockName', $blockName);
    }
}

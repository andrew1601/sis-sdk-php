<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\StudentEmploymentRecord;

class StudentEmploymentRecord extends ModelBase
{
    const BSI1 = 'bsi1';

    const BSI2 = 'bsi2';

    const BSI3 = 'bsi3';

    const BSI4 = 'bsi4';

    const RON1 = 'ron1';

    const MADE_REDUNDANT_STUDENT_EMPLOYMENT_RECORD = 'madeRedundantStudentEmploymentRecord';

    protected $_resourceType = ResourceType::UK_ILR_STUDENT_EMPLOYMENT_RECORD;

    /**
     * @param Query $query
     * @return StudentEmploymentRecord[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_STUDENT_EMPLOYMENT_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentEmploymentRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_STUDENT_EMPLOYMENT_RECORD, $id);
    }

    /**
     * @return bool
     */
    public function getBsi1()
    {
        return $this->getProperty('bsi1');
    }

    /**
     * @param bool $bsi1
     */
    public function setBsi1($bsi1 = null)
    {
        $this->setProperty('bsi1', $bsi1);
    }

    /**
     * @return bool
     */
    public function getBsi2()
    {
        return $this->getProperty('bsi2');
    }

    /**
     * @param bool $bsi2
     */
    public function setBsi2($bsi2 = null)
    {
        $this->setProperty('bsi2', $bsi2);
    }

    /**
     * @return bool
     */
    public function getBsi3()
    {
        return $this->getProperty('bsi3');
    }

    /**
     * @param bool $bsi3
     */
    public function setBsi3($bsi3 = null)
    {
        $this->setProperty('bsi3', $bsi3);
    }

    /**
     * @return bool
     */
    public function getBsi4()
    {
        return $this->getProperty('bsi4');
    }

    /**
     * @param bool $bsi4
     */
    public function setBsi4($bsi4 = null)
    {
        $this->setProperty('bsi4', $bsi4);
    }

    /**
     * @return bool
     */
    public function getRon1()
    {
        return $this->getProperty('ron1');
    }

    /**
     * @param bool $ron1
     */
    public function setRon1($ron1 = null)
    {
        $this->setProperty('ron1', $ron1);
    }

    /**
     * @return StudentEmploymentRecord
     */
    public function getMadeRedundantStudentEmploymentRecord()
    {
        return $this->getProperty('madeRedundantStudentEmploymentRecord');
    }

    /**
     * @param StudentEmploymentRecord $madeRedundantStudentEmploymentRecord
     */
    public function setMadeRedundantStudentEmploymentRecord(StudentEmploymentRecord $madeRedundantStudentEmploymentRecord = null)
    {
        $this->setProperty('madeRedundantStudentEmploymentRecord', $madeRedundantStudentEmploymentRecord);
    }
}

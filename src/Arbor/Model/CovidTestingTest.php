<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CovidTestingTest extends ModelBase
{
    const PERSON = 'person';

    const TEST_TYPE = 'testType';

    const BARCODE = 'barcode';

    const RESULT = 'result';

    const RESULT_DATETIME = 'resultDatetime';

    const ADMINISTERED_BY = 'administeredBy';

    const ADMINISTERED_DATETIME = 'administeredDatetime';

    protected $_resourceType = ResourceType::COVID_TESTING_TEST;

    /**
     * @param Query $query
     * @return CovidTestingTest[] | Collection
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

        $query->setResourceType(ResourceType::COVID_TESTING_TEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CovidTestingTest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COVID_TESTING_TEST, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getTestType()
    {
        return $this->getProperty('testType');
    }

    /**
     * @param string $testType
     */
    public function setTestType($testType = null)
    {
        $this->setProperty('testType', $testType);
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->getProperty('barcode');
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode = null)
    {
        $this->setProperty('barcode', $barcode);
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->getProperty('result');
    }

    /**
     * @param string $result
     */
    public function setResult($result = null)
    {
        $this->setProperty('result', $result);
    }

    /**
     * @return \DateTime
     */
    public function getResultDatetime()
    {
        return $this->getProperty('resultDatetime');
    }

    /**
     * @param \DateTime $resultDatetime
     */
    public function setResultDatetime(\DateTime $resultDatetime = null)
    {
        $this->setProperty('resultDatetime', $resultDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getAdministeredBy()
    {
        return $this->getProperty('administeredBy');
    }

    /**
     * @param ModelBase $administeredBy
     */
    public function setAdministeredBy(ModelBase $administeredBy = null)
    {
        $this->setProperty('administeredBy', $administeredBy);
    }

    /**
     * @return \DateTime
     */
    public function getAdministeredDatetime()
    {
        return $this->getProperty('administeredDatetime');
    }

    /**
     * @param \DateTime $administeredDatetime
     */
    public function setAdministeredDatetime(\DateTime $administeredDatetime = null)
    {
        $this->setProperty('administeredDatetime', $administeredDatetime);
    }
}

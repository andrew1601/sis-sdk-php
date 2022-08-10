<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserDefinedFieldOption extends ModelBase
{
    const USER_DEFINED_FIELD = 'userDefinedField';

    const NAME = 'name';

    const CODE = 'code';

    const ACTIVE = 'active';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD_OPTION;

    /**
     * @param Query $query
     * @return UserDefinedFieldOption[] | Collection
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

        $query->setResourceType(ResourceType::USER_DEFINED_FIELD_OPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedFieldOption
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD_OPTION, $id);
    }

    /**
     * @return UserDefinedField
     */
    public function getUserDefinedField()
    {
        return $this->getProperty('userDefinedField');
    }

    /**
     * @param UserDefinedField $userDefinedField
     */
    public function setUserDefinedField(UserDefinedField $userDefinedField = null)
    {
        $this->setProperty('userDefinedField', $userDefinedField);
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
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }
}

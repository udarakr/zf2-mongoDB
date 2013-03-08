<?php
namespace Course\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="course") */
class Course
{
    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="string") */
    private $name;

    
    /** @ODM\Field(type="string") */
    private $teacher;

    public function __get($property) {
        return $this->$property;
    }

    /**
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return the $teacher
     */
    public function getTeacher() {
        return $this->teacher;
    }

    /**
     * @param field_type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @param field_type $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @param field_type $teacher
     */
    public function setTeacher($teacher) {
        $this->teacher = $teacher;
    }

}

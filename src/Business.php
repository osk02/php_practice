<?php
namespace PHP_Practice;
class Business {
    protected $staff;
    public function __construct(Staff $staff) {
        $this->staff = $staff;
    }
    public function hire(Person $person) {
        // add person to Staff
        $this->staff->add($person);
    }
    public function getStaffMembers() {
        return $this->staff->getMembers();
    }
}
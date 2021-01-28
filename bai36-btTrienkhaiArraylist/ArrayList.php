<?php
include('AbstractArrayList.php');

class ArrayList extends AbstractArrayList
{

    public $element = array();
    public $firstArr;

    public function firstArr() {
        return $this->firstArr = $this->element;
    }
    //them moi phan tu vao danh sach
    public function add($value)
    {
        array_push($this->element, $value);
    }

    //lay ve gia tri cua phan tu co chi so $index
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->element[$index];
        } else {
            die("ERROR in element.get");
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    //xoa phan tu co chi so $index
    public function remove($index)
    {
        if ($index < 0 && $index > $this->size()-1) {
            return -1;
        }
        array_splice($this->element, $index,1);
    }

    //lay ve kich thuoc cua danh sach
    public function size()
    {
        return count($this->element);
    }

    //tim vi tri cua phan tu co gia tri $value
    public function indexOf($value)
    {
        for ($i = 0; $i<$this->size() ;$i++) {
            if ($this->element[$i] == $value) {
                return $i;
            }
        }
        return -1;
    }

    //kiem tra rong
    public function IsEmpty($index)
    {
        return empty($this->element);
    }

    //xoa het gia tri trong danh sach
    public function clear() {
        $this->element = array();
    }

    public function addAll($arr) {
        $this->element = array_merge($this->element,$arr);
    }

    //sap xep danh sach
    public function sort() {
        sort($this->element);
    }

    public function reset() {
        return $this->element = $this->firstArr;
    }

}

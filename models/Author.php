<?php
namespace app\models;
use yii\db\ActiveRecord;

Class Author extends ActiveRecord{
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['Author_id'=>'id']);
    }
}
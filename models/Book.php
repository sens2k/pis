<?php
namespace app\models;
use yii\db\ActiveRecord;

Class Book extends ActiveRecord{
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'Author_id']);
    }

    public function getGenre()
    {
        return $this->hasOne(Genre::class, ['id' => 'Genre_id']);
    }
}

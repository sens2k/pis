<?php
namespace app\models;
use yii\base\Model;

class Laba1Form extends Model
{
    public $name;
    public $email;
    public $age;
    public $date;
    public $isRep;
    public $review;

    public function rules()
    {
        return [
            [['name', 'email', 'date', 'age', 'isRep', 'review'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'length' => [5, 30]],
            ['date', 'date', 'format' => 'yyyy-MM-dd'],
            ['age', 'integer', 'min' => 18, 'max' => 100],
            ['review', 'trim'],
            ['isRep', 'boolean'],

        ];
    }
}
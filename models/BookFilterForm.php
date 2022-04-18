<?php
namespace app\models;
use yii\base\Model;

class BookFilterForm extends Model
{
    public $name;
    public function rules()
    {
        return[
            ['name', 'required'],
            ['name', 'trim']
        ];
    }
}
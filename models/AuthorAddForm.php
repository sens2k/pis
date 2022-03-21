<?php
namespace app\models;
use yii\base\Model;
class AuthorAddForm extends Model
{
    public $name;
    public $surname;
    public function rules()
    {
        return[
            [['name', 'surname'], 'required'],
            ['name', 'string', 'length' => [5, 30]],
            ['surname', 'string', 'length' => [5, 30]]
        ];
    }
}
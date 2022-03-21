<?php
namespace app\models;
use yii\base\Model;

class AuthorDeleteForm extends Model
{
    public $id;
    public function rules()
    {
       return[
         ['id', 'required']
       ];
    }
}
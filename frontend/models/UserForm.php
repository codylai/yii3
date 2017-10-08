<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/8
 * Time: 9:22
 */

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules(){

        return [

            [['name','email'],'required'],
            ['email','email'],

        ];


    }

}
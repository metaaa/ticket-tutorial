<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/6/19
 * Time: 4:27 PM
 */

namespace app\models;


use yii\base\Model;

class SignUpForm extends Model
{
    public $username;
    public $password;
    public $password_hash;

    private $_user;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signUp()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        return $user->save();

    }
}
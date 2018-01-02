<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $authKey
 * @property string $password_reset_token
 * @property string $user_image
 * @property string $user_level
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'phone_number', 'username', 'email', 'password', 'authKey', 'password_reset_token', 'user_level'], 'required'],
            [['user_level'], 'string'],
            [['first_name', 'last_name', 'username', 'password', 'authKey', 'password_reset_token'], 'string', 'max' => 250],
            [['phone_number'], 'string', 'max' => 30],
            [['email', 'user_image'], 'string', 'max' => 500],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'authKey' => Yii::t('app', 'Auth Key'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'user_image' => Yii::t('app', 'User Image'),
            'user_level' => Yii::t('app', 'User Level'),
        ];
    }

    public static function findIdentity($id) {
        $user = self::find()
                ->where([
                    "id" => $id
                ])
                ->one();
        if ($user==NULL) {
            return null;
        }
        return new static($user);
    }
     
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $userType = null) {
     
        $user = self::find()
                ->where(["accessToken" => $token])
                ->one();
        if (!count($user)) {
            return null;
        }
        return new static($user);
    }
     
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        $user = self::find()
                ->where([
                    "username" => $username
                ])
                ->one();
        if (!$user) {
            return null;
        }
        return new static($user);
    }
     
    public static function findByUser($username) {
        $user = self::find()
                ->where([
                    "username" => $username
                ])
                ->one();
        if (!count($user)) {
            return null;
        }
        return $user;
    }
     
    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->id;
    }
     
    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }
     
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }
     
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password ===  md5($password);
    }
}

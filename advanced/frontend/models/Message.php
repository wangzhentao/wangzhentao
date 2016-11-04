<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $aid
 * @property string $title
 * @property string $content
 * @property integer $addtime
 * @property string $author
 * @property integer $c_number
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['addtime', 'c_number'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['author'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'name' => 'Name',
            'content' => 'Content',
            'addtime' => 'Addtime',
        ];
    }
}

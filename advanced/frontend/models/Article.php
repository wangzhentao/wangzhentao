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
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
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
            'aid' => 'Aid',
            'title' => 'Title',
            'content' => 'Content',
            'addtime' => 'Addtime',
            'author' => 'Author',
            'c_number' => 'C Number',
        ];
    }
}

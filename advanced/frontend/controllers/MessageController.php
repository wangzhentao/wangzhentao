<?php

namespace frontend\controllers;

use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Message;
use yii\data\Pagination;

/**
 * 留言板类
 */
class MessageController extends Controller
{
	public $enableCsrfValidation = false; //禁止表单提交验证

	/**
	 * 添加数据
	 * @return string [description]
	 */
	public function actionAdd()
	{
		$yii     = Yii::$app->request;
		$name    = $yii->get('name');
		$content = $yii->get('content');
		$addtime = date('Y-m-d H:i:s',time());

		//实例化数据库对象
		$db      = Yii::$app->db;
		$sql     = "insert into message (`name`,`content`,`addtime`) values ('$name','$content','$addtime')";
		$res     = $db->createCommand($sql)->execute();
		if($res)
		{
			$string = "<hr /><table><tr class='tr'><td>".$name."</td><td>".$addtime."</td><td><a href=''>删除</a></td></tr><tr class='tr'><td colspan='3'>".$content."</td></tr></table>";
			return $string;
		}
	}

	/**
	 * 删除数据
	 * @return integer 成功时为1，失败为0
	 */
	public function actionDelete()
	{
		$id  = Yii::$app->request->get('id');

		//实例化数据库对象
		$db  = Yii::$app->db;
		$sql = "delete from message where id=".$id;
		$res = $db->createCommand($sql)->execute();
		if($res)
		{
			return $res;
		}
	}

	/**
	 * 展示模板
	 * @return html 模板
	 */
	public function actionShow()
	{
		$db      = Yii::$app->db;

		$test=New Message();
		$message=Message::find();
		$pages = new Pagination([
            'totalCount' => $message->count(),
            'pageSize'   => 4   //每页显示条数
        ]);
		$res = $message->select('*')
                ->from('message')
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->orderBy(["id"=>SORT_DESC])
                ->asArray()
                ->all();
        return $this->render('sendmessage.html',['info'=>$res,'pages'=>$pages]);
	}
}
?>
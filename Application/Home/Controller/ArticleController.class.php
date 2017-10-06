<?php
namespace Home\Controller;
use Common\Model\ArticleModel;
use Think\Controller;
class ArticleController extends Controller {
    public function detailAction(){
        $articleId = I('article_id');

        $key = 'article_detail_'.$articleId;
        if(S($key)){
            $articleDetail = S($key);
        }else{
            $articleDetail = ArticleModel::instance()->where('article_id ='.$articleId)->find();
            S($key,$articleDetail,60);
        }
        $this->assign('articleDetail', $articleDetail);

        $this->display();
    }
}
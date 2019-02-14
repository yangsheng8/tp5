<?php
namespace app\Admin\controller;
use think\Controller;
use app\Admin\model\Links as LinksModel;
class Links extends  Controller
{
    public function lst(){

        $list = LinksModel::paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add(){
      if(request()->isPost()){
          $data =[
              'title'=>input('title'),
              'url'=>input('url'),
              'desc'=>input('desc'),
          ];
          $validate = \think\Loader::validate('Links');
          if(!$validate->scene('add')->check($data)){
              $this->error($validate->getError());
              die;
          }
         if(db('links')->insert($data)){
             return $this->success('添加友情链接成功！','lst');
         }else{
             return $this->error('添加友情链接失败！');
         }
          return;
      }
        return $this->fetch();
    }

    public function edit(){
        $id = input('id');
        $linkss = db('links')->find($id);
        if(request()->isPost()){
            $data = [
                'id'=>input('id'),
                'title'=>input('title'),
                'url'=>input('url'),
                'desc'=>input('desc'),
            ];
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('links')->update($data)){
                $this->success('修改友情链接信息成功！','lst');
            }else{
                $this->error('修改友情链接信息失败！');
            }
           return ;    
        }
    
        $this->assign('linkss',$linkss);
        return $this->fetch();
    }

    public function del(){
       $id = input('id');
       if(db('links')->delete(input('id'))){
            $this->success('删除友情链接成功！','lst');
        }else{
            $this->error('删除友情链接失败！');
        }
    }
}

<?php
//网购家具
namespace App\Controller;
class FurnitureController extends ApibaseController{
	 protected $positiondata=NULL;
    protected function _initialize() {
        parent::_initialize();
        $this->positiondata= D('Admin/PositionData');
    }
  public function furniture(){

      $posdata=$this->positiondata->getDataByPageID("5");
       foreach ($posdata as $key=>$value){

           foreach ($value as $k=>$v){
                if(empty($v['wap_picture'])){
                    $posdata[$key][$k]['wap_picture']=$v['picture'][0];
                }
               
           }
          
       }
       //var_dump($posdata);
        //exit;
      if(empty($posdata)){$this->ajaxReturn(array('status'=>0,'msg'=>'数据获取失败！'));}

      $this->ajaxReturn(array('status'=>1,'msg'=>'数据获取成功！','data'=>$posdata));
  }
  
}
?>
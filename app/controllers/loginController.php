<?PHP
use coreAppNS\Controller;
class loginController extends Controller{
public $controller;



function __construct(){

    $this->controller=new Controller();
    
     @session_start();
    if(isset($_SESSION['uid'])){
     $this->u=$_SESSION['uid'];}else{
     $this->u=0;}
    $page=$_GET['page'];
      $user_model=$this->controller->model_object->create_model('users');
    $order_model=$this->controller->model_object->create_model('order');
    $compare_product_model=$this->controller->model_object->create_model('compare_product');
    $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
    $cat_model=$this->controller->model_object->create_model('category');
    $user_model->loginhere($page);
    $homeItems=array(
        'categories'=>$cat_model->getDataWhereOrder(),
         'cartitem'=>$order_model->getOne($this->u),
         'favoriteitem'=>$favorite_product_model->getOnef($this->u),
         'filteritem'=>$compare_product_model->getOnefilter($this->u)
        
    );

    $this->controller->view_object->create_view('login',$homeItems);

   }


}


?>
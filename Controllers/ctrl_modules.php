<?php 

    include('Models/mdl_module.php');
    class Ctrl_modules{

        public static function index()
        {
              $data_result = Mdl_module::get_data();
        //    echo '<pre>';
        //    print_r($data_result);
           include('Views/modules/list_modules.php');
        //    return $data_result;
        }
        public function add()
        {
            # code...
        }
        public function save()
        {
            # code...
        }
        public function update()
        {
            # code...
        }
        public function delete()
        {
            # code...
        }
    }
    // Ctrl_modules::index();    
?>

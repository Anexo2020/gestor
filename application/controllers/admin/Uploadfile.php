<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadfile extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
	   $this->load->helper(array('form', 'url'));
    }




    public function index()
    {
        //$data = array();
        //$data['page_title'] = 'User';
        //$data['country'] = $this->common_model->select('country');
		//$data['error'] = $this->upload->display_errors();
        /*$data['main_content'] = */$this->load->view('admin/form/form_upfile', array('error' => ' ' ));
        //$this->load->view('admin/index', $data);
    }
	
	
	
    public function nuevaimagen()
    {   
				$id = $_POST['userid'];
				
     			
				$config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                 $this->load->library('upload', $config);
				 
				 $files = $_FILES;
  				 $cpt = count($_FILES['files']['name']);
 				 for($i=0; $i<$cpt; $i++)
 				 {           
    				$_FILES['files']['name']= $files['files']['name'][$i];
        			$_FILES['files']['type']= $files['files']['type'][$i];
        			$_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
        			$_FILES['files']['error']= $files['files']['error'][$i];
        			$_FILES['files']['size']= $files['files']['size'][$i];    

                if ( ! $this->upload->do_upload('files'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/form/form_upfile', $error);
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
						$data = $this->upload->data();
						
						//-- set upload path
                $source             = "./assets/images/".$data['file_name'] ;
                $destination_thumb  = "./assets/images/thumbnail/" ;
				$destination_medium = "./assets/images/docu/" ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;

                /* Resizing Processing */
                // Configuration Of Image Manipulation :: Static
                $this->load->library('image_lib') ;
                $img['image_library'] = 'GD2';
                $img['create_thumb']  = TRUE;
                $img['maintain_ratio']= TRUE;

                /// Limit Width Resize
				$max_size = 2000;
                $limit_medium   = $max_size ;
                $limit_thumb    = 200 ;

                // Size Image Limit was using (LIMIT TOP)
                $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;

                // Percentase Resize
                if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
                    $percent_medium = $limit_medium/$limit_use ;
                    $percent_thumb  = $limit_thumb/$limit_use ;
                }

                //// Making THUMBNAIL ///////
                $img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
                $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_thumb-' ;
                $img['quality']      = ' 100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_thumb ;

                $thumb_nail = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                ////// Making MEDIUM /////////////
                $img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
                $img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_medium-' ;
                $img['quality']      = '100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_medium ;

                $mid = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                //-- set upload path
                $images = 'assets/images/docu/'.$mid;
                $thumb  = 'assets/images/thumbnail/'.$thumb_nail;
                unlink($source) ;

               /* return array(
                    'images' => $images,
                    'thumb' => $thumb
                );*/
						
						$data = array( 
							'name' => $mid,
							'id_user' => $id
							);
						$this->common_model->insert($data, 'documentos');
                        
                }
			}
			//$this->load->view('admin/form/upload_success');

    }
	
	
	
}

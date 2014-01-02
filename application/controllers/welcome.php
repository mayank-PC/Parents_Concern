<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	   public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model('attendence_model');
        $this->load->library("pagination");
    }


	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('attendence/index');
	}



/*Function To display attendence as per user */
	public function show_attendence()
	{
		//$this->load->helper('url');
       // $this->load->view('attendence');	
	    $user_type = 2;

	   if($user_type == 0)
		{
			///$this->load->model('attendence_model');
			//$data['res'] = $this->attendence_model->show_attendence();
			$this->load->view('attendence/attendence_admin_1');
		}
		elseif($user_type == 1)
		{

            $this->load->model('attendence_model');
			$data['res'] = $this->attendence_model->show_attendence();
			$this->load->view('attendence/attendence_parents',$data);
		}elseif($user_type == 2)
		{
			$this->load->model('attendence_model');
			$data['res'] = $this->attendence_model->show_attendence();
			$this->load->view('attendence/attendence_student',$data);
		}elseif($user_type == 3){

			$this->load->model('attendence_model');
			$data['res'] = $this->attendence_model->show_attendence_teacher();
             //$count = count($data);
			//echo $page = $this->uri->segment();
			//$this->load->library('pagination');
			//$config['base_url'] = base_url() . "index.php/welcome/get_attendence";
			
			//$config['total_rows'] = 5;
			//$config['per_page'] = 2; 
			
			//$this->pagination->initialize($config);
			//$data['links'] = $this->pagination->create_links();
			$this->load->view('attendence/attendence_teacher',$data);

		}

   }


/*Function To Insert Parents Remark On Attendence*/

		public function insert_parents_remark()
	{
	    $attendence_id = $_POST['stud_id'];
	    $parents_remark =  $_POST['premark'];
		$datar = array(
			'attendence_id'=>$attendence_id,
            'parents_remark'=>$parents_remark 
			);
		

		$this->load->model('attendence_model');
		$data1[] = $this->attendence_model->insert_parents_remark($datar);
		$this->show_attendence();

	}

 

 /*Function To Insert Teachers Remark On Attendence*/
	public function insert_teachers_remark()
	{
	    $attendence_id = $_POST['stud_id'];
	    $teachers_remark =  $_POST['tremark'];
		$datar = array(
			'attendence_id'=>$attendence_id,
            'teachers_remark'=>$teachers_remark 
			);
		




		$this->load->model('attendence_model');
		$data1[] = $this->attendence_model->insert_teachers_remark($datar);
		$this->show_attendence();
		
	}


	 /*Function add attendence*/
	public function display_add_attendence_page()
	{
	   error_reporting(0);
	  $this->load->view('attendence/add_attendence'); 
		
	}

	 /*Function add Student*/
	public function display_add_student_page()
	{
	  $this->load->view('attendence/add_student'); 
		
	}

	public function add_student()
	{
		//print_r($_POST);
	
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$class = $_POST['class'];
        $adm_no = $_POST['adm_no'];
		$adm_date = $_POST['adm_date'];
		$blood_group = $_POST['blood_group'];
        $gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
        $fathersname = $_POST['fathersname'];
		$mothersname = $_POST['mothersname'];
        $facultyname = $_POST['facultyname'];
		$schoolname = $_POST['schoolname'];

        $data = array(
		    'firstname'=>$firstname,
			'middlename'=>$middlename,
			'lastname'=>$lastname,
			'class'=>$class,
			'adm_no'=>$adm_no,
			'adm_date'=>$adm_date,
			'blood_group'=>$blood_group,
			'nationality'=>$nationality,
			'gender'=>$gender,
			'address'=>$address,
			'mobile'=>$mobile,
			'fathersname'=>$fathersname,
			'mothersname'=>$mothersname,
			'facultyname'=>$facultyname,
			'schoolname'=>$schoolname
		
		);
		

		$this->load->model('attendence_model');
		$data1 = $this->attendence_model->add_attendence($data);
		//$this->show_attendence();

      //echo $data1;
      $data['success_messsage'] = "Student Added Successfully"; 

		 $this->load->view('attendence/add_student', $data); 

	  
		  
		
	}


/* Function to implement Pagination */
  public function init_pagination($uri,$total_rows,$per_page=5,$segment=3){
       $ci                          =& get_instance();
       $config['per_page']          = $per_page;
       $config['uri_segment']       = $segment;
       $config['base_url']          = base_url().$uri;
       $config['total_rows']        = $total_rows;
       $config['use_page_numbers']  = TRUE;
	  // echo"<pre>";
	  // print_r($config);
	  // exit;
 
       echo $ci->pagination->initialize($config);
	   echo "<pre>";
	   print_r($config);
	   exit;
       return $config;   
   } 

/* Function to get attendence by date for students */
	public function get_attendence()
	{
		$date = $_REQUEST['cal_date'];
		$this->load->model('attendence_model');
		$data1['res'] = $this->attendence_model->get_attendence($date);
		$count = count($data1);
        //print_r($data1);
		$this->load->view('attendence/attendence_student',$data1); 
    }


	/* Function to get attendence by date for students */
	public function get_attendence_student()
	{
		$date = $_REQUEST['cal_date'];
		$this->load->model('attendence_model');
		$data1['res'] = $this->attendence_model->get_attendence($date);
		$count = count($data1);
        //print_r($data1);
		$this->load->view('attendence/attendence_parents',$data1); 
    }


   /* Function to get attendence by date for teachers */
	public function get_attendence_for_teachers()
	{
		
		$date = $_REQUEST['cal_date'];
		$this->load->model('attendence_model');
		$data1['res'] = $this->attendence_model->get_attendence_for_teachers($date);
        //print_r($data1);
		$this->load->view('attendence/attendence_teacher',$data1); 
    }


	
	/* Function to get attendence by date for teachers */
	public function get_attendence_for_admin()
	{
		$date = $_POST['date_time'];
		$class = $_POST['class'];
	    $adata = array(
			'date'=>$date,
			'class'=>$class,	 
		 );
		
	   $this->load->model('attendence_model');
	   $data1['res'] = $this->attendence_model->get_attendence_for_admin($adata);
	   //print_r($data1);
	   $this->load->view('attendence/attendence_admin',$data1); 
    }




	/* Function to display Edit Attendence Page */
	public function edit_attendence_page()
	{
		//echo "<pre>";
		//print_r($_POST);
		$stud_id = $_POST['stud_id'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		$parents_remark = $_POST['parents_remark'];
		$teachers_remark = $_POST['teachers_remark'];
		$data['res'] = array(
			'stud_id'=>$stud_id,
			'name'=>$name,
			'date'=>$date,
			'status'=>$status,
			'parents_remark'=>$parents_remark,
			'teachers_remark'=>$teachers_remark
		);
		
		 $this->load->view('attendence/edit_attendence',$data); 
    }


/* Function  to Edit Attendence*/
	public function edit_attendence()
	{
		//echo "<pre>";
		//print_r($_POST);
		
		$attendence_id = $_POST['attendence_id'];
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$time = $_POST['time'];
        $date = $_POST['date'];
		$status = $_POST['status'];
		$parents_remark = $_POST['parents_remark'];
		$teachers_remark = $_POST['teachers_remark'];
		$data = array(
			'attendence_id'=>$attendence_id,
			'name'=>$name,
			'time'=>$time,
			'subject'=>$subject,
			'date'=>$date,
			'status'=>$status,
			'parents_remark'=>$parents_remark,
			'teachers_remark'=>$teachers_remark
		);
          $this->load->model('attendence_model');
		 $data1['res'] = $this->attendence_model->edit_attendence($data);
		 $this->show_attendence();
		 //$this->load->view('attendence_admin_1');
		 //$this->load->view('edit_attendence',$data); 
    }


	   public function get_student_by_class(){
	   
	
		 $class = $_POST['class'];
		$data = array(
			
			'class'=>$class,
		);

		$this->load->model('attendence_model');
		$data1['res'] = $this->attendence_model->get_student_by_class($data);
        $this->load->view('attendence/add_attendence',$data1); 
     }


	 
	 public function mark_attendAnce(){
		 
	  // echo $option = $_POST['submit'];
	  // echo"<pre>";
	  
		
	        $date = $_POST['date'];
	        $firstname = $_POST['firstname'];
			$class = $_POST['class'];
			$time = $_POST['time'];
            $subject = $_POST['subject'];
			$status = $_POST['status'];
			$parents_remark = $_POST['parents_remark'];
			$student_id = $_POST['student_id'];
			$school_id = '11';

			$data= array(
			'date'=>$date,
			'name'=>$firstname,
			'class'=>$class,
            'time'=>$time,
            'subject'=>$subject,
            'status'=>$status,
			'parents_remark'=>$parents_remark,	
			'student_id'=>$student_id,	
			'school_id'=>$school_id,
			
			);

        $this->load->model('attendence_model');
		$data1['res'] = $this->attendence_model->mark_attendance($data); 
		
		  $this->get_student_by_class();
	//print_r($data1);
       }


		public function display_attendence_class_date()
		{
			//echo"<pre>";
			//print_r($_POST);
           	$date = $_POST['date'];
			$class = $_POST['class'];
			$school_id = '11';
			$data= array
			(
				'date'=>$date,
				'class'=>$class,
				'school_id'=>$school_id,
			);

			$this->load->model('attendence_model');
			$data1['res'] = $this->attendence_model->display_attendence_class_date($data); 
			//$this->get_student_by_class();
			$this->load->view('attendence/display_attendence',$data1);
	
		}



       public function uplode_csv()
		{
	   
		 $this->load->view('attendence/upload_csv');
		
        }

		 public function csv_upload_success()
		{
		  $this->load->view('attendence/csv_upload_success');
		
        }


		 public function edit_attandance_of_student()
		{

			$data = $_GET['id'];
	        $this->load->model('attendence_model');
			$data1['res'] = $this->attendence_model->get_attendence_by_id($data); 
		
		  $this->load->view('attendence/edit_attendence',$data1);
		
        }


		 public function delete_attendence()
		{
          
			$data = $_GET['id'];
			$message = "Are you Sure you want delete the record";
			if(isset($data))
			{
				echo '<script> alert("'.$message.'"); </script>';
			}
			
			  //$this->set_message('Your error Msg', 'error');
	        $this->load->model('attendence_model');
		   $data1['res'] = $this->attendence_model->delete_attendence($data); 
		$this->show_attendence();
			
		  //$this->load->view('edit_attendence',$data1);
		
        }







/* Functions For Time table  Module --------------------------------------------------- START */


      public function display_timetable()
		{
		  $user_type = "0";
		     if($user_type == 0)
			  {
				$this->load->view('timetable/admin_timetable');
			  }
			 elseif($user_type == 2)
			   {
				$this->load->model('attendence_model');
				$data['res'] = $this->attendence_model->get_timetable_of_last5_days();
				$this->load->view('timetable/student_timetable',$data);
			   }
	
		 }


	   public function show_timetable()
		{
		   $user_type = "0";
          
			if($user_type == 0)
				{
					///$this->load->model('attendence_model');
					//$data['res'] = $this->attendence_model->show_attendence();
					$this->load->view('timetable/add_timetable');
				}
        }


		public function display_timetable_by_class_date()
			{
			   $date = $_POST['date'];
			   $class = $_POST['class'];
			   $division = $_POST['division'];
			   $data = array(
								'date'=>$date,   
								'class'=>$class,
								'division'=>$division,
			                 );

			  $this->load->model('attendence_model');
			  $data['res'] = $this->attendence_model->display_timetable_by_class_date($data);
              $this->load->view('timetable/admin_timetable',$data);
           }


            /* Function to Insert Time Table In DB*/
			public function add_timetable()
			{
					$date = $_POST['date'];
					$class = $_POST['class'];
					$time = $_POST['time'];
					$subject = $_POST['subject'];
					$topic = $_POST['topic'];
					$activity_type = $_POST['activity_type'];
					$faculty = $_POST['faculty'];
					$school_id = '11';

					$data = array(
									'date'=>$date,	
									'time'=>$time,	
									'class'=>$class,	
									'subject'=>$subject,	
									'topic'=>$topic,	
									'activity_type'=>$activity_type,
									'faculty'=>$faculty,
									'school_id'=>$school_id,
					             );
				
				$this->load->model('attendence_model');
				$data['success_message'] = $this->attendence_model->add_timetable($data);
                if($data['success_message'] == '1')
				{
                  $this->load->view('timetable/add_timetable',$data);
				}
	
			}



			public function edit_timetable()
			{
				 
				if(!empty($_POST))
					{
					  $timetable_id = $this->input->post('timetable_id');
                      $date = $this->input->post('date');
                      $class = $this->input->post('class');
					  $subject = $this->input->post('subject');
					  $time = $this->input->post('time');
					  $topic = $this->input->post('topic');
					  $activity_type = $this->input->post('activity_type');
					  $status = $this->input->post('status');
					  $faculty = $this->input->post('faculty');

					  $data = array(
					       'id'=>$timetable_id,
					       'date'=>$date,
						   'class'=>$class,	
						   'subject'=>$subject,	
						   'time'=>$time,	
						   'topic'=>$topic,	
						   'activity_type'=>$activity_type,	
						   'status'=>$status,	
						   'faculty'=>$faculty	
					  
					  );

					  $this->load->model('attendence_model');
						$data1['res'] = $this->attendence_model->edit_timetable($data);
						$this->load->view('timetable/admin_timetable');

					}
				else
					{
						$data = $this->input->get('id');
						$this->load->model('attendence_model');
						$data1['res'] = $this->attendence_model->get_timetable($data);
						$this->load->view('timetable/edit_timetable',$data1);
				    }
                
			}


				public function delete_timetable()
				{
					'<script>alert("Are you sure you want to delete?")</script>';

					$data = $this->input->get('id');
					$this->load->model('attendence_model');
					$data1['res'] = $this->attendence_model->delete_timetable($data);

					if($data1['res'] == 1)
					{ 
						$this->load->view('timetable/admin_timetable');
					}

				}


		

			public function timetable_by_class_date()
				{
					$date = $this->input->post('date');
				    $class = $this->input->post('class');
					$div = $this->input->post('division');

					$data = array(
									'date'=>$date,
									'class'=>$class,
									'div'=>$div
					              );

					$this->load->model('attendence_model');
					$data['res'] = $this->attendence_model->timetable_by_class_date($data);
					$this->load->view('timetable/student_timetable',$data);

				}
		








/* Functions For Examination  Module --------------------------------------------------- START */



 public function display_exam_schedule()
		{
		  $user_type = "0";
		     if($user_type == 0)
			  {
				 $this->load->model('attendence_model');
				 $data['res'] = $this->attendence_model->get_exame_chart();
				  echo $count = sizeof($data['res']);

					$uri = "index.php/welcome/display_exam_schedule";
					$total_rows = sizeof($data['res']);
					//$this->init_pagination($uri,$total_rows,$per_page=5,$segment=3);
				

				 
				 
				$this->load->view('exam/get_exam_schedule',$data);
			  }
			 elseif($user_type == 2)
			   {
				
				 $class = '12th';
				$this->load->model('attendence_model');
				$data['res'] = $this->attendence_model->get_exam_schedule_by_class($class);
				$this->load->view('exam/get_exam_schedule_student',$data);
			   }
	
		 }



		  public function show_exam_schedule()
		{
              if(!empty($_POST['class']))
			{
				//$date = $_POST['date'];
				$class = $_POST['class'];
					$data = array(
									//'date'=>$date,
									'class'=>$class,
								);
				$this->load->model('attendence_model');
				$data['res'] = $this->attendence_model->get_exam_schedule($data);
				$this->load->view('exam/get_exam_schedule',$data);
			}else{

				$data['res'] = $this->attendence_model->get_exame_chart($data);
				//$this->load->view('exam/get_exam_schedule',$data);
                  
                  $this->load->view('exam/get_exam_schedule');
			}

			 

		  
				
				
		 }


		   public function add_exam_schedule()
		{
			  if(!empty($_POST))
			{
				   
		$class = $_POST['class'];
		$subject = $_POST['subject'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$exam_type = $_POST['exam_type'];
		$exam_mode = $_POST['exam_mode'];
		$data = array(
		'class'=>$class,	
			'date'=>$date,	
			'time'=>$time,	
			'exam_type'=>$exam_type,
			'exam_mode'=>$exam_mode,
			'subject'=>$subject,	
		
		);
		 $this->load->model('attendence_model');
	     $data['success_message'] = $this->attendence_model->add_exam_schedule($data);
             //if($data['success_message'] == '1')
				 if(!empty($data['success_message']))
				{
                $this->load->view('exam/add_exam_schedule',$data);
				}
				
		
			}
			
		  
				 $this->load->view('exam/add_exam_schedule');
				
				
		 }





		 public function edit_exam_schedule()
		{   
             
			 if(!empty( $_GET['id']))
			{
		    $id = $_GET['id'];
			$this->load->model('attendence_model');
			$data['res'] = $this->attendence_model->get_exam_schedule_by_id($id);
			//echo"<pre>";
			//print_r($data);
			//exit;
			$this->load->view('exam/edit_exam_schedule',$data);
            }else{
             
                 $data=array(
					            'exam_schedule_id'=>$_POST['exam_schedule_id'],
								'subject'=>$_POST['subject'],	
								'class'=>$_POST['class'],
								'date'=>$_POST['date'],
								'time'=>$_POST['time'],
								'exam_type'=>$_POST['exam_type'],
								'exam_mode'=>$_POST['exam_mode']
							 
							);

			$this->load->model('attendence_model');
			$data['res'] = $this->attendence_model->edit_exam_schedule($data);
             $this->display_exam_schedule();
			}
			
				
		 }


		 public function delete_exam_schedule()
				{
                   '<script>alert("Are you sure you want to delete?")</script>';

					$data = $this->input->get('id');
					$this->load->model('attendence_model');
					$data1['res'] = $this->attendence_model->delete_exam_schedule($data);

					if($data1['res'] == 1)
					{ 
						 $this->display_exam_schedule();
					}

				}


		 


/* Functions For Examination Result  Module --------------------------------------------------- START */





	 public function display_exam_results()
		{
		  $user_type = "1";
		     if($user_type == 0)
			  {
				 //$this->load->model('attendence_model');
				// $data['res'] = $this->attendence_model->get_exam_results();
				 //echo"<pre>";
				 //print_r($data);
				$this->load->view('exam_results/add_exam_results');
			  }else if($user_type == 2){
                    
                    $this->load->model('attendence_model');
				    $data['res'] = $this->attendence_model->get_exam_results($user_type);
					//echo"<pre>";
					//print_r($data);
					//exit;
				 	$this->load->view('exam_results/get_exam_results_student',$data	);

			  }else if($user_type == 1){
                    
                    $this->load->model('attendence_model');
				    $data['res'] = $this->attendence_model->get_exam_results($user_type);
					//echo"<pre>";
					//print_r($data);
					//exit;
				 	$this->load->view('exam_results/get_exam_results_parents',$data	);

			  }
			
	
		 }



 public function get_students_list()
		{
		 $class = $this->input->post('class');
		  $subject = $this->input->post('subject');
		   $division = $this->input->post('division');
		    
			$this->load->helper('cookie');
             $this->input->set_cookie("class",$class,time()+3600);
			  $this->input->set_cookie("div",$division,time()+3600);
		
		     
				   $this->load->model('attendence_model');
				   $data['res'] = $this->attendence_model->get_students_list($class,$subject,$division);
				   $this->load->view('exam_results/add_exam_results',$data);
		
		 }

		  public function insert_student_result()
		{

				   $this->load->model('attendence_model');
				   $data['res'] = $this->attendence_model->insert_student_result();
				   $this->load->view('exam_results/add_exam_results',$data);
		
		 }



		 

	   public function exam_results_by_exam_type()
		{

			      $exam_type = $_REQUEST['exam_type'];
				  $this->load->model('attendence_model');
				  $data['res'] = $this->attendence_model->exam_results_by_exam_type($exam_type);
                  $this->load->view('exam_results/get_exam_results_parents',$data);
				 
		 }



		 
			public function insert_one_student_result()
			{
				$student_id = $_GET['student_id'];
				$class = $_GET['class'];
				$div = $_GET['div'];
				//$data['res'] = array(
								//'student_id'=>$student_id,	
								//'class'=>$class,	
							//	'division'=>$div,	
				
			             	//);
				 $this->load->model('attendence_model');
				 $data['res'] = $this->attendence_model->get_student_by_id($student_id);
				 //echo"<pre>";
            // print_r($data);
			 //exit;
			    $this->load->view('exam_results/add_results',$data);
            }
        

		
			public function insert_one_student_result1()
			{
				
       /*
				  $data1 = array(
					     'marks_out_of'=>$_POST['marks_out_of1'],
					     'marks_obtained'=>$_POST['marks_obtained1'],
					     'status'=>$_POST['status1']
					    // 'student_id'=>$_POST['student_id'],
					      'class'=>$_POST['class']
					  
				  );
				   $data2 = array(
					    'marks_out_of'=>$_POST['marks_out_of2'],
					    'marks_obtained'=>$_POST['marks_obtained2'],
					    'status'=>$_POST['status2'],
					    'student_id'=>$_POST['student_id'],
					     'class'=>$_POST['class'],
					     'division'=>$_POST['div'],
					     'exam_type'=>$_POST['exam_type']
					  
				  );
				   $data3 = array(
					    'marks_out_of'=>$_POST['marks_out_of3'],
					    'marks_obtained'=>$_POST['marks_obtained3'],
					    'status'=>$_POST['status3'],
					    'student_id'=>$_POST['student_id'],
					     'class'=>$_POST['class'],
					     'division'=>$_POST['div'],
					    'exam_type'=>$_POST['exam_type']
					  
				  );
				   $data4 = array(
					    'marks_out_of'=>$_POST['marks_out_of4'],
					    'marks_obtained'=>$_POST['marks_obtained4'],
					    'status'=>$_POST['status4'],
					    'student_id'=>$_POST['student_id'],
					     'class'=>$_POST['class'],
					     'division'=>$_POST['div'],
					   'exam_type'=>$_POST['exam_type']
					  
				  );
				   $data5 = array(
					    'marks_out_of'=>$_POST['marks_out_of5'],
					    'marks_obtained'=>$_POST['marks_obtained5'],
					    'status'=>$_POST['status5'],
					    'student_id'=>$_POST['student_id'],
					    'class'=>$_POST['class'],
					    'division'=>$_POST['div'],
					    'exam_type'=>$_POST['exam_type']
					  
				  );*/
            }



			

             //Function To display Ranks in the class
			public function get_ranks_in_class()
			{
				 $data['id'] = $_GET['id'];
				 $data['class'] = $_GET['class'];
				 $data['division'] = $_GET['division'];
				 $data['exam_type'] = $_GET['exam_type'];


				 $this->load->model('attendence_model');
				 $data1['res'] = $this->attendence_model->get_ranks_in_class($data);
                   
			    $this->load->view('exam_results/display_ranks_in_class',$data1);

                 //echo"<pre>";
				 //print_r($data1);
				 //exit;

			}

			public function get_results_by_class()
			{
				if(!empty($_POST))
				{
				
				 $data['class'] = $_POST['class'];
				 $data['division'] = $_POST['division'];
				 $data ['exam_type'] = $_POST['exam_type'];
				
				$this->load->model('attendence_model');
				//echo"<pre>";
				//print_r($data);
				$data1['res'] = $this->attendence_model->get_results_by_class($data);
				$this->load->view('exam_results/display_ranks_in_class_admin',$data1);

				}else{
                      
					   $this->load->view('exam_results/display_ranks_in_class_admin');
				}
				


				
                   
			   

                 //echo"<pre>";
				 //print_r($data1);
				 //exit;

			}

		 



/* Functions For Message Module --------------------------------------------------- START */




	   //Function To display Ranks in the class
			public function display_message()
			{
				$data['class'] =  $this->input->post('class');
				$data['division'] = $this->input->post('division');
				$this->load->model('attendence_model');
				$data1['res'] = $this->attendence_model->display_student_parents_list($data);
				$this->load->view('messages/add_messages',$data1);
			}

		 
		 


		 








		

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
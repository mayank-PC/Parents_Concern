<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



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



class Attendence_model extends CI_Model {
    
    
    function __construct() {
       // parent::__construct();
	   $this->load->database(); 
      
    }

 public function show_attendence() {
   $query = $this->db->query("SELECT pc_attendence.name, pc_attendence.id , pc_attendence.date ,  pc_attendence.time , pc_attendence.subject , pc_attendence.status, pc_attendence.parents_remark, pc_attendence.teachers_remark, pc_student.class, pc_student.school_name
	FROM pc_attendence
	INNER JOIN pc_student
	ON pc_attendence.student_id=pc_student.student_id ");
   
	//return $count;
	return $query->result_array();
  }


    /* Change when Login Systen is created */
   public function show_attendence_teacher() {
 
	$query = $this->db->query("SELECT id,name,date,status,parents_remark,teachers_remark FROM pc_attendence where class ='10th' AND school_id='11'");
	return $query->result_array();
  }


 public function insert_parents_remark($datar){
        //print_r($datar);
		$attendence_id = $datar['attendence_id'];
		$parents_remark = $datar['parents_remark'];

		$query = $this->db->query("UPDATE pc_attendence SET parents_remark = '$parents_remark' WHERE id = $attendence_id ");
      if($query == 1){
		  return 1 ;

	  }

	}


	 public function insert_teachers_remark($datar){
        //print_r($datar);
		$attendence_id = $datar['attendence_id'];
		$teachers_remark = $datar['teachers_remark'];

		$query = $this->db->query("UPDATE pc_attendence SET teachers_remark = '$teachers_remark' WHERE id = $attendence_id ");
      if($query == 1){
		  return 1 ;

	  }

	}

	

	public function add_attendence($data){
        //print_r($datar);

		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$class = $_POST['class'];
        $adm_no = $_POST['adm_no'];
		$adm_date = $_POST['adm_date'];
		$blood_group = $_POST['blood_group'];
        $gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$address1 = $_POST['address'];
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
			'address1'=>$address1,
			'mobile'=>$mobile,
			'father_name'=>$fathersname,
			'mothers_name'=>$mothersname,
			'faculty_name'=>$facultyname,
			'school_name'=>$schoolname
		
		);

		$result = $this->db->insert('pc_student', $data); 
		return $result;

	}


/* Function to get attendence of student by date */
	 public function get_attendence($date) {
		$date;
		$_SESSION['student_id'] = "12";
		$student_id = $_SESSION['student_id'];
	
		$query = $this->db->query("SELECT name, date ,time,subject, status, id, parents_remark, teachers_remark
		FROM pc_attendence WHERE student_id = '$student_id' AND date = ' $date'");
		return $query->result_array();
	}



	  /* Function */
   public function get_attendence_for_teachers() 
	   {
			$_SESSION['school_id'] = '11';
			$_SESSION['class'] = '10th';
			$school_id = $_SESSION['school_id'];
			$class = $_SESSION['class'];
			$date = $_REQUEST['cal_date'];
			$query = $this->db->query("SELECT id,name,date,status,parents_remark,teachers_remark FROM pc_attendence where class ='$class' AND school_id='$school_id' AND date = '$date'");
			
			return $query->result_array();
      }

  /* Function To Get Attendence for Admin */
   public function get_attendence_for_admin($data){
		$date = $data['date'];
		$class = $data['class'];
		$_SESSION['school_id'] = '11';
		$school_id = $_SESSION['school_id'];

		$query = $this->db->query("SELECT id,name,date,status,parents_remark,teachers_remark FROM pc_attendence where class ='$class' AND school_id='$school_id' AND date = '$date'");
		return $query->result_array();
     }


  /* Function To Edit Attendence */
   public function edit_attendence($data1){
	     $attendence_id = $data1['attendence_id'];
		 $name = $data1['name'];
		 $time = $data1['time'];
		 $subject = $data1['subject'];
		 $status = $data1['status'];
		 $date = $data1['date'];  
		 $parents_remark = $data1['parents_remark'];
		 $teachers_remark = $data1['teachers_remark'];

		
	    $query = $this->db->query("UPDATE pc_attendence SET name='$name',date = '$date', time='$time', subject='$subject', parents_remark='parents_remark', teachers_remark='$teachers_remark' WHERE id = '$attendence_id' ");
		//exit;
		
		//return $query->result_array();
     }


	  /* Function To Get Student By Class */
      public function get_student_by_class($data){
		  //print_r($data);
		  
		   $class = $data['class'];
	   //	 echo "SELECT firstname,middlename, lastname ,student_id,class FROM pc_student WHERE school_id = '11' AND class = '$class'";
	
		$query = $this->db->query("SELECT firstname,middlename, lastname ,student_id,class FROM pc_student WHERE school_id = '11' AND class = '$class'");
		return $query->result_array();
     }

       
 /* Function To Get Student By Class */
      public function mark_attendance($data){
		
		$result = $this->db->insert('pc_attendence', $data); 
		return $result;
		
     }

	 

		  /* Function To Get Student By Class */
      public function display_attendence_class_date($data){
         // print_r($data);
		  $date = $data['date'];
		  $class = $data['class'];
		 
		$query = $this->db->query("SELECT id,name,date,subject,time ,status,parents_remark,teachers_remark, student_id,class FROM pc_attendence WHERE date = '$date' AND school_id = '11' AND class LIKE '$class'");
		return $query->result_array();
		
		
		
     }


	  /* Function To Get attendence by Id */
      public function get_attendence_by_id($data){
      // echo $data;
	   
		 $id = $data;
		$query = $this->db->query("SELECT * FROM pc_attendence WHERE id = '$id' ");
		return $query->result_array();
		
	
     }

	   /* Function To Delete Attendence */
      public function delete_attendence($data){
       //echo $data;
	   
		 $id = $data;
		$this->db->delete('pc_attendence', array('id' => $id)); 
		//return $query->result_array();
		
	
     }



	 /* Functions For Time table  Module --------------------------------------------------- START */


       public function display_timetable_by_class_date($data)
		{

		   $date = $data['date'];
		   $class = $data['class'];
		   $division = $data['division'];

         $query = $this->db->query("SELECT * FROM pc_timetable	 WHERE date = '$date' AND class = '$class' AND division = '$division' ");
		return $query->result_array();
	
		}


		
		public function get_timetable($data)
		{
           $data;
	       $query = $this->db->query("SELECT * FROM pc_timetable	 WHERE id = $data ");
		   return $query->result_array();
		}



		  public function add_timetable($data)
		{
			 
		 $query = $this->db->insert('pc_timetable', $data); 
		 return $query ;
	
		}

	 

		public function edit_timetable($data)
			{
			 $id = $data['id'];
		     $this->db->update('pc_timetable', $data, "id = $id");
            }



			public function delete_timetable($data)
			{
				$id = $data;
				$query = $this->db->delete('pc_timetable', "id = $id"); 

				return $query;
			}


			/* This function is for getting time table of next five days */
			public function get_timetable_of_last5_days()
			{
				$class = "10th";
				$division = "A";

				$startdate =  date("Y-m-d");
                $date1 = strtotime("+5 day", strtotime("$startdate"));
                $enddate  = date("Y-m-d", $date1);

                $query = $this->db->query("SELECT * FROM pc_timetable WHERE date >= '$startdate' AND date <= '$enddate' AND class = '$class' AND division = '$division' ORDER BY date");
                return $query->result_array();
		    }


			/* This function is for getting time table of today */
			public function get_timetable_of_today()
			{
				$class = "10th";
				$division = "A";
                $date =  date("Y-m-d");
               
                $query = $this->db->query("SELECT * FROM pc_timetable WHERE date = 'date'  AND class = '$class' AND division = '$division'");
                return $query->result_array();
		    }

			

				/* This function is for getting time table by class , date and division */
			public function timetable_by_class_date($data)
			{
				 $date = $data['date'];
				 $class = $data['class'];
				 $div = $data['div'];

                $query = $this->db->query("SELECT * FROM pc_timetable WHERE date = '$date' AND class = '$class' AND division = '$div' ");
                return $query->result_array();
		    }




/* This Part consist functions for exam module*/
			public function get_exam_schedule($data)
			{
				$date = date('Y-m-d');
				// $date = $data['date'];
				 $class = $data['class'];
				 //$div = $data['div'];

                $query = $this->db->query("SELECT * FROM pc_exame WHERE class = '$class' AND date >= '$date' ORDER BY date ");
                return $query->result_array();
		    }


			public function get_exam_schedule_by_class($data)
			{
				 $date = date('Y-m-d');
				// $date = $data['date'];
				  $data;
				 //$div = $data['div'];
                   //echo "SELECT * FROM pc_exame WHERE class = '$data' AND date >= '$date' ORDER BY date ";
                $query = $this->db->query("SELECT * FROM pc_exame WHERE class = '$data' AND date >= '$date' ORDER BY date ");
                return $query->result_array();
		    }



			public function add_exam_schedule($data)
			{
				 $subject = $data['subject'];
				 $date = $data['date'];
				 $time = $data['time'];
				 $class = $data['class'];
				 $exam_type = $data['exam_type'];
				 $exam_mode = $data['exam_mode'];
				 $school_id = "11";


         $data = array(
				'subject'=>$subject, 
				'date'=>$date,
				'time'=>$time, 
				'class'=>$class,
				'exam_type'=>$exam_type,
			    'exam_mode'=>$exam_mode,
			    'school_id'=>$school_id
		 );


              $result = $this->db->insert('pc_exame', $data); 
		      return $result;
		    }



			public function get_exame_chart()
			{
			  $date = date("Y-m-d");

				 $query = $this->db->query("SELECT * FROM pc_exame WHERE date >= '$date' ");
                return $query->result_array();

		    }




			public function get_exam_schedule_by_id($data)
			{
				 $data;
                  
				 $query = $this->db->query("SELECT * FROM pc_exame WHERE id = $data ");
                return $query->result_array();

		    }


			
			public function edit_exam_schedule($data)
				{

				$id = $_POST['exam_schedule_id'];
					$data=array(
						       
								'subject'=>$_POST['subject'],	
								'class'=>$_POST['class'],
								'date'=>$_POST['date'],
								'time'=>$_POST['time'],
								'exam_type'=>$_POST['exam_type'],
								'exam_mode'=>$_POST['exam_mode'],
							 
							);
					$this->db->update('pc_exame', $data, "id = $id");

				}


				
				public function delete_exam_schedule($data)
					{
						$id = $data;
						$query = $this->db->delete('pc_exame', "id = $id"); 

						return $query;
					}










		public function get_students_list($class,$subject,$division)
			{
			    echo $class;
				echo $subject;
                echo $division;

				


				// $query = $this->db->query("SELECT pc_student.firstname,pc_student.student_id, pc_results.subject,pc_results.percentage,     pc_results.status,pc_results.exam_type,pc_results.marks_out_of,pc_results.marks_obtained
					//FROM pc_results
				//	INNER JOIN pc_student
				//	ON pc_student.student_id=pc_results.student_id WHERE pc_student.class = '$data'  ");

					//$query = $this->db->query("SELECT pc_student.firstname,pc_student.student_id, pc_results.subject,pc_results.percentage,     pc_results.status,pc_results.exam_type,pc_results.marks_out_of,pc_results.marks_obtained
					//FROM pc_student
					//INNER JOIN pc_results
					//ON pc_results.student_id=pc_student.student_id WHERE pc_student.class = '$data'  ");
                  
					$query = $this->db->query("SELECT * FROM pc_student WHERE class = '$class' AND division = '$division' ");
					return $query->result_array();

		    }


			public function insert_student_result()
			{
             $this->load->helper('cookie');

            $school_id='11'; 
			$student_id=$_POST['student_id'];
		    $subject=$_POST['subject'];
			$exam_type=$_POST['exam_type'];
			$class  = get_cookie('class');
			$division  = get_cookie('div');
			$marks_out_of=$_POST['marks_out_of'];
			$marks_obtained=$_POST['marks_obtained'];
			$status=$_POST['status'];	
			 $count = count($_POST['student_id']);

				for($i=0; $i<$count; $i++) {
					$data = array(
						       'school_id'=>$school_id,
							   'student_id' => $student_id[$i], 
						       'subject' => $subject,
							   'exam_type' => $exam_type,
						       'class' => $class,
					        	'division' => $division,
							   'marks_out_of' => $marks_out_of[$i],
							   'marks_obtained' => $marks_obtained[$i],
						       'status' => $status[$i]

							   );
 

					  $this->db->insert('pc_results', $data);
					}

				//echo"<pre>";
			   //print_r($_POST);
			   //foreach(){
				// $result = $this->db->insert('pc_results', $data); 
		        // return $result;

			 //  }
					//return $query->result_array();

		    }


			

				public function get_exam_results($data)
			{
			     $data;
				 $student_id = '13';
                 $exam_type = 'Annual Exam';


				 	$query = $this->db->query("SELECT * FROM pc_results WHERE student_id = '$student_id' AND exam_type = '$exam_type' ");
					return $query->result_array();
                  
				  //$result = $this->db->insert('pc_results', $data); 
		          // return $result;
                  //return $query->result_array();

		    }

			


				public function exam_results_by_exam_type($data)
			{
			      $data;
				
				 $student_id = '11';
               
				 $query = $this->db->query("SELECT * FROM pc_results WHERE student_id = '$student_id' AND exam_type = '$data' ");
                   
			     return $query->result_array();
                 
		    }

			

				public function get_student_by_id($data)
				{
					 $data;
					$query = $this->db->query("SELECT * FROM pc_student WHERE student_id = $data ");
					return $query->result_array();

				}


			

				public function get_ranks_in_class($data)
				{
					$student_id = $data['id'];
					$class = $data['class'];
					$exam_type = $data['exam_type'];
					$division = $data['division'];

				 //$data;

                 
	/*$query = $this->db->query(" SELECT pc_student.firstname,
									   pc_student.middlename,
									   pc_student.lastname,
									   SUM(pc_results.marks_obtained),
									   SUM(DISTINCT pc_results.marks_out_of),
									   pc_results.class,
									   pc_results.division,
									   pc_results.exam_type,
									   pc_results.student_id
								  FROM parents_concern.pc_student pc_student
									   INNER JOIN parents_concern.pc_results pc_results
										  ON (pc_student.student_id = pc_results.student_id)
								 WHERE    (pc_results.class = '$class')
									   OR (pc_results.division = '$division')
									   OR (pc_results.exam_type = '$exam_type')
								GROUP BY pc_results.student_id");*/

								$query = $this->db->query(" SELECT pc_student.firstname,
															   pc_student.middlename,
															   pc_student.lastname,
															   SUM(pc_results.marks_obtained) AS mo,
															   SUM(pc_results.marks_out_of) AS mof,
															   pc_results.class,
															   pc_results.division,
															   pc_results.exam_type,
																pc_results.status,
															   pc_results.student_id
														  FROM parents_concern.pc_student pc_student
															   INNER JOIN parents_concern.pc_results pc_results
																  ON (pc_student.student_id = pc_results.student_id)
														 WHERE    (pc_results.class = '$class')
															   OR (pc_results.division = '$division')
															   OR (pc_results.exam_type = '$exam_type')
														GROUP BY pc_results.student_id");

			
				return $query->result_array();

				

				}



			


	public function get_results_by_class($data)
				{
					 $class = $data['class'];
					 $division = $data['division'];
					 $exam_type = $data['exam_type'];
					
					$query = $this->db->query(" SELECT pc_student.firstname,
															   pc_student.middlename,
															   pc_student.lastname,
															   SUM(pc_results.marks_obtained) AS mo,
															   SUM(pc_results.marks_out_of) AS mof,
															   pc_results.class,
															   pc_results.division,
															   pc_results.exam_type,
																pc_results.status,
															   pc_results.student_id
														  FROM parents_concern.pc_student pc_student
															   INNER JOIN parents_concern.pc_results pc_results
																  ON (pc_student.student_id = pc_results.student_id)
														 WHERE    (pc_results.class = '$class')
															   AND (pc_results.division = '$division')
															   AND (pc_results.exam_type = '$exam_type')
														GROUP BY pc_results.student_id");
					return $query->result_array();

				}




			

//------------------------------------------------------Functions For Message Module ---------------------------------------------------------//
				

			




	public function display_student_parents_list($data)
				{
					 $class = $data['class'];
					 $division = $data['division'];
					
					
					$query = $this->db->query(" SELECT * FROM `pc_student` WHERE `class` = '$class' AND `division` = '$division' " );
					return $query->result_array();

				}

 



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
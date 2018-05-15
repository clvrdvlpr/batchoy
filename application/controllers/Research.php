<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller {


	public function index(){
		// $this->load->view('welcome_researcher');
		// $this->load->view('homepage');
	}
	
	public function homepage() {
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			if (strlen($_POST['p_id'])>0) {
				
				$yr_id = $_POST['year'];
				$incre = 1;
				$dateall = GETDATE();
				// print_r($dateall);
				// exit;
				$hours = $dateall['hours'];
				$minutes = $dateall['minutes'];
				$seconds = $dateall['seconds'];
				$time1 = (($hours < 10) ? '0' : '').number_format($hours);
				$time2 = (($minutes < 10) ? '0' : '').number_format($minutes);
				$time3 = (($seconds < 10) ? '0' : '').number_format($seconds);
				// print_r($res3);
				// exit;
				$month = $dateall['month'];
				$mday = $dateall['mday'];
				$yr = $dateall['year'];
				$date1 = $month;
				$date2 = (($mday < 10) ? '0' : '').number_format($mday);
				$date3 = $yr;
				
				$date = $time1.''.":".''.$time2.''.":".''.$time3.''." - ".''.$date1.''." ".''.$date2.''.",".''.$date3;
				// echo json_encode($yr_id);
			
				$this->load->model('settings_model');
				$last = $this->settings_model->last_settings($yr_id);
					foreach($last as $d){
						$idnum_last = $d['prop_id'];
						$idnum_new = $idnum_last + $incre;
						$data_new = array(
									  'prop_id'=>$idnum_new,
									  'year_id'=>$yr_id,
									  'date'=>$date,);
						$this->settings_model->create_settings($data_new);
					}

				$title = $_POST['p_title'];
				$subtitle = $_POST['p_subtitle'];
				$description = $_POST['p_description'];
				$duration = $_POST['p_duration'];
				$type = $_POST['p_type'];
				$budget =$_POST['p_budget_total'];
				$file = $_POST['p_file_fullpaper'];

				if (strlen($subtitle) == 0 && strlen($file) == 0) {
					$subtitle = "N/A";
					$file = "N/A";
				}
				elseif (strlen($file) == 0) {
					$file = "N/A";
				}
				else {
					$subtitle = "N/A";
				}
			
			
				if (strlen($title)>0 && strlen($description)>0 && strlen($duration)>0 && strlen($type)>0 && strlen($budget)>0) {
						
						
					// load the model
					$this->load->model('proposal_model');
					
					// create an array
					
					$new_proposal = array(
										'p_title'=>$title,
										'p_subtitle'=>$subtitle,
										'p_description'=>$description,
										'p_duration'=>$duration,
										'p_type'=>$type,
										'p_budget_total'=>$budget,
										'p_file_fullpaper'=>$file,
										);
						
					// print_r($new_proposal);
					// exit;
					$proposal_record = $this->proposal_model->create_proposal($new_proposal);
					echo 'Submission Success';
					header("refresh:2; url=http://localhost/researchportal/research/submit_proposal");
				}
				else {
					echo 'Submission Failed';
					header("refresh:2; url=http://localhost/researchportal/research/submit_proposal");
				}
			}
			else {
				
				// $year = $_POST['p_id'];
				// $this->load->model('settings_model');
				// $date = "N/A";
				// $date_data = array('date'=>$date);
				// $this->settings_model->create_settings($date_data);
				$this->load->model('proposal_model');
				$data['prop'] = $this->proposal_model->read_proposal();
				// print_r($data);
				// exit;
				$this->load->view('homepage',$data);
			}
			
		}
		else {
			$this->load->view('homepage');
			
				
				
		}		
	}
	
	public function recent_table(){
		$this->load->model('proposal_model');
			$data1 = $this->proposal_model->read_proposal();
				foreach($data1 as $d1){
					$propid = $d1['proposal_id'];
					$this->load->model('submit_model');
					$data2 = $this->submit_model->find_submit($propid);
						foreach($data2 as $d2){
							$res_id = $d2['researcher_id'];
							$this->load->model('researcher_model');
							$data3 = $this->researcher_model->find_researcher($res_id);
							foreach($data3 as $d3){
								$res_rec1 = $d3['fname'];
								$res_rec2 = $d3['mi'];
								$res_rec3 = $d3['lname'];
								
							}
							
						}
					
					}
		echo json_encode(array(
				'fname'=>$res_rec1,
				'mi'=>$res_rec2,
				'lname'=>$res_rec3,
				));
	}
	
	public function check_year(){
		
		$yr_id = $_GET['year'];
		// $num = 1;
		$this->load->model('settings_model');
		$last = $this->settings_model->last_settings($yr_id);
			foreach($last as $l){
				$last_num = $l['prop_id'];
					if ($last_num < 10){
						$idnum1 = (($last_num < 10) ? '00' : '').number_format($last_num);
					}
					elseif ($last_num < 100) {
						$idnum1 = (($last_num < 100) ? '0' : '').number_format($last_num);
						// print_r($idnum1);
					}
					else {
						$idnum1 = $last_num;
						// print_r($idnum1);
					}
			}
		echo json_encode(array(
				'yr_id'=>$yr_id,
				'last_num'=>$idnum1,
				));
	}
	
	public function search_btn(){
		
	}
}
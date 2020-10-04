<?php
namespace App\Controllers;
use App\Models\SubscriptionModel;
use CodeIgniter\Controller;
use Config\Services;
use CodeIgniter\I18n\Time;

class Relotzfnf extends BaseController
{
   public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $this->session->start();
       
    }


    public function index()
	{
       // $message = $session->getFlashdata('message');
		echo view('header');
         echo view('subscriptionview');
         echo view('footer');  
    }
     public function subscription(){
        // helper("date");
        
        if($this->validate([
            'users_name'=>'required',
            'email' => 'required|valid_email',
        ])){
            $myTime = new Time('now', 'America/Chicago', 'en_US');

            $data= array(
                'users_name'=> $this->request->getPost('users_name'),
                'email' => $this->request->getPost('email'),
                'created_at'=> $myTime
            );
            // dd($data);
            // $subscrtionModel = new SubscriptionModel();
            $db = \Config\Database::connect();
            $bulder = $db->table('subscriptionusers');
            $user= $bulder->insert($data);
            if($user){
               $session = \Config\Services::session();
                $message = " $data[users_name] Thank You For Subscription.";
                $session->setFlashdata('message',$message);
                $msg['message'] = $session->getFlashdata('message');
                echo view('header');
                echo view('subscriptionview',$msg);
                echo view('footer'); 
                
                //return redirect()->to('/Relotzfnf',$messae); 
                
                 $emailmessage = view('mail_templates/thankyou_mail', $data);
                $mailStatus = $this->sendEmail($data['email'], $emailmessage, "Thank You - Subscription");
                if ($mailStatus) {
                    $admin_message = view('mail_templates/lead_mail', $data);
                    $admin_mailStatus = $this->sendEmail("sgp8953@gmail.com", $admin_message , "New Lead - Subscription");
                }
                echo 1;
                exit();                

            }else {
                echo "User was not Submmited";
                exit();
            }
        }else{
            return $this->validator->getErrors();
        }
        
                
     }

     private function sendEmail($receiver, $emailMessage, $subject)
    {

        $config['protocol'] = 'smtp';
        $config['charset'] = 'iso-8859-1';
        $config['wordWrap'] = true;
        $config['SMTPUser'] = 'info@handsfreeflipping.com';
        $config['SMTPPass'] = '#f2m$^r4333#';
        $config['SMTPPort'] = 465;
        $config['SMTPCrypto'] = 'ssl';
        $config['mailType'] = 'html';
        $config['SMTPHost'] = 'handsfreeflipping.com'; //gethostname();

        $email = Services::email();
        $email->initialize($config);

        $email->setFrom('info@handsfreeflipping.com', 'Handsfreeflipping ');
        $email->setTo($receiver);
        $email->setSubject($subject);
        $email->setMessage($emailMessage);
        $result = $email->send();
        //$email->printDebugger();
        if (!$result) {
            // echo $email->printDebugger();
            return false;
        }
        return true;
    }


	

}


?>
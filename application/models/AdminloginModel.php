<?php
class AdminloginModel extends CI_Model {

    public function getuser($username,$password) {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function ForgotPassword($email){
        //var_dump($email);exit;
        $this->db->where('email', $email);
        $query = $this->db->get('admin');

        //echo $this->db->last_query();
        return $query->row();
    }

    public function sendpassword($data)
   {
        $email = $data->email;
        $query1=$this->db->query("SELECT *  from admin where email = '".$email."' ");
        $row=$query1->result_array();

        //var_dump($row);exit;
            if ($query1->num_rows()>0)
            {
                    $passwordplain = "";
                    $passwordplain  = rand(999999999,9999999999);
                    //$newpass['password'] = md5($passwordplain);
                    $newpass['password'] =$passwordplain;
                    $this->db->where('email', $email);
                    $this->db->update('admin', $newpass); 
                    $mail_message='Dear '.$row[0]['name'].','. "\r\n";
                    $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
                    $mail_message.='<br>Please Update your password.';
                    $mail_message.='<br>Thanks & Regards';
                    
                    $config=array('protocol' => 'smtp',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'mwp@myweddingpalette.com',
                    'smtp_pass' => 'zbtobteenohkkxwk',
                    'mailtype'  => 'html', 
                    'charset'   => 'utf-8',
                    'newline'=>"\r\n",
                    'smtp_crypto'=>'tls',
                    'Return-Path' => 'mwp@myweddingpalette.com');
                    $this->email->initialize($config);
                    $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
                    $this->email->from("mwp@myweddingpalette.com","My Wedding Palette");
                    $this->email->to($email); 

                    $this->email->subject("Forgot password email");
                    $this->email->message($mail_message);  
                    if (!$this->email->send()) 
                    {
                        $this->session->set_flashdata('msg','Failed to send password, please try again!');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('msg','Password sent to your email!');
                    }
                    redirect(base_url().'admin/AdminLogin/forgotpassword','refresh');       
            }
            else
            {  
               $this->session->set_flashdata('msg','Email not found try again!');
               redirect(base_url().'admin/AdminLogin/forgotpassword','refresh');
            }
    }
}
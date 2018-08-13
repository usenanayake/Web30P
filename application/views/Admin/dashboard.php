<?php

if(!($this->session->userdata('loggedin'))){
	redirect('Users/Login');
}

if($this->session->flashdata('wel')){

	echo "<h3>".$this->session->flashdata('wel')."</h3>";

}


echo $this->session->userdata('fname')." ".$this->session->userdata('lname'); ?>

<a href="<?php echo base_url('index.php/Login/LogoutUser'); ?>"> Logout </a>


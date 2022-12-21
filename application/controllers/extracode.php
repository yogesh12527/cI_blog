	if ($this->form_validation->run() == FALSE){
		echo"<script>
				alert('please fill required form');
			</script>";
	}
	else
	{
		if ( ! $this->upload->do_upload('userfile'))
		{
		$error = array('error' => $this->upload->display_errors());
		// echo '
		<pre>';print_r($error);echo'</pre>';
		echo $error['error'];
	}
	else
	{
		$data = array('upload_data' => $this->upload->data());
		//echo '
		<pre>';print_r($data);echo'</pre>';
		$this->post_model->insert_post($data);
	}
	redirect('post');
	}
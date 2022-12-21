<?php

class Post_model extends CI_Model
{
        public function insert_post($data){
            $post_data = array( 
                'post_title' => $this->input->post('post_title'),
                'post_desc' => $this->input->post('post_desc'),
                'post_image'=>$data['upload_data']['file_name'],
                'post_user_id'=>$this->session->userdata('loggedin_user_id')
            );

            $this->db->insert('post',$post_data);
        }

        public function select_post ( $user_id )
        { 
            $this->db->select('*,post.id as post_id');
            $this->db->from('post');
            $this->db->order_by("post.id", "desc");
            $this->db->join('users', 'users.id = post.post_user_id','left');
            $this->db->join('post_like', 'post_like.post_id = post.id','left');
            $query = $this->db->get();

            if ( $query->num_rows() > 0 )
            {
                $get_data = $query->result_array();
                return $get_data;   
            }

        } 
        public function get_user_data ()
        { 
            $this->db->select('*');
            $this->db->from('users');
            $query2 = $this->db->get();
            if ( $query2->num_rows() > 0 )
            {
                $get_data2 = $query2->result_array();
                return $get_data2;  
            } 
        }

        public function insert_comment($comment_detail){
            //print_r($comment_detail);
            $post_data = array( 
                    'post_id' =>$comment_detail[2],
                    'comment_by'=>$comment_detail[1],
                    'comment_desc'=>$comment_detail[0]
            );
            $this->db->insert('comments',$post_data);
        }        

        public function like_post(){
            $response_obj=array('status'=>false,'message'=>'');
            $post_data = array( 
                'post_id' =>$this->input->post('post_id'),
                'user_id'=>$this->input->post('user_id'),
                'is_like'=>$this->input->post('islike')
            );

            $this->db->where('post_id',$this->input->post('post_id'));
            $this->db->where('user_id',$this->input->post('user_id'));
            $query=$this->db->get('post_like');


            $islike_message='unliked';
            if($this->input->post('islike')==1){
                $islike_message='liked';
            }

            if($query->num_rows()==0){
                if($this->db->insert('post_like',$post_data)){
                    $response_obj=array('status'=>true,'message'=>'You '.$islike_message.' the Post');
                }
            }
            else{
                $this->db->where('post_id',$this->input->post('post_id'));
                $this->db->where('user_id',$this->input->post('user_id'));
                $this->db->update('post_like',$post_data);
                $response_obj=array('status'=>true,'message'=>'You '.$islike_message.' the Post');
            }
            return $response_obj;
        }
}


?>
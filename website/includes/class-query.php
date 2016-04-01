<?php
	require_once('class-db.php');

	if ( !class_exists('QUERY') ) {
		class QUERY {
			public function all_posts1() {
				global $db;
				
				$query = "
								SELECT * FROM posts
								WHERE `post_category` LIKE '%cat1%'
							";
				
				return $db->select($query);
			}
			public function all_posts2() {
				global $db;
				
				$query = "
								SELECT * FROM posts
								WHERE `post_category` LIKE '%cat2%'
							";
				
				return $db->select($query);
			}
			public function all_posts3() {
				global $db;
				
				$query = "
								SELECT * FROM posts
								WHERE `post_category` LIKE '%cat3%'
							";
				
				return $db->select($query);
			}
			public function all_posts4() {
				global $db;
				
				$query = "
								SELECT * FROM posts
								WHERE `post_category` LIKE '%cat4%'
							";
				
				return $db->select($query);
			}	
			public function all_posts5() {
				global $db;
				
				$query = "
								SELECT * FROM posts
								WHERE `post_category` LIKE '%cat5%'
							";
				
				return $db->select($query);
			}
			public function post($postid) {
				global $db;
			
				$query = "
								SELECT * FROM posts
								WHERE ID = '$postid'
							";
							
				return $db->select($query);
			}
		}
	}
	
	$query = new QUERY;
?>
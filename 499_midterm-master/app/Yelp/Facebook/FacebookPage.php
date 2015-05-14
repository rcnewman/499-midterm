<?php
namespace Yelp\Facebook;

class FacebookPage {
	public function get($id){
		$endpoint = "https://graph.facebook.com/" . $id;
		return json_decode(file_get_contents($endpoint));
	}

}
?>
<?php
class RestaurantController extends BaseController {
	public function getAll(){
		$restaurants = Restaurant::all();

		return View::make('/restaurants/list',['restaurants' => $restaurants]);
	}
	public function listReviews($id){
		$restaurant = Restaurant::find($id);
		$reviews = Review::getByRestaurantId($id);
		$fbpage = "";

		if($restaurant->facebook_page != null){ 
			$fbpage = new \Yelp\Facebook\FacebookPage();
			$fbpage = $fbpage->get($restaurant->facebook_page);

		}		

		return View::make('/restaurants/reviews',['restaurant' => $restaurant,'reviews'=>$reviews,'fbpage'=>$fbpage]);
	}
}
?>
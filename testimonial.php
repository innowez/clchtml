<?php

function getGoogleReviews($place_id, $api_key) {

    $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews&key=$api_key";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

$place_id = "ChIJ70lyEEZZpjsRrOCvQj4O1RE";
$api_key = 'AIzaSyDku-8QHu2RnkNGsAjpqnRA-z6fEfqTFDE';

// Fetch Reviews
$reviews = getGoogleReviews($place_id, $api_key);

if (!empty($reviews['result']['reviews'])) {
    echo json_encode($reviews['result']['reviews'], JSON_PRETTY_PRINT);
} else {
    echo json_encode(["message" => "No reviews found or invalid Place ID."], JSON_PRETTY_PRINT);
}

?>

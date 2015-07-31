<?php

	/* Author: Hawkan Bergman */
	/* Description: JSON Class to modify json files */

	class json {

		/* Begin function insert */
		/* Inserts data into a JSON-file */
		public function insert($filename, $root = NULL, $array = NULL, $object_data) {

			/* Hawkan Code */
			/* Get our source from filename */
			$source = file_get_contents($filename);
			
			/* Fetch our data from source */
			$data = json_decode($source);

			/* Create a new object to insert */
			$post_object = new stdClass();
		
			/* Fetch data from our object_data */
			foreach ($object_data as $key => $value) {
				$post_object->$key = $value;
			}

			/* Insert our new object */
			$data->$root->$array[] = $post_object;

			/* Encode our new data to JSON */
			$jsonData = json_encode($data);

			/* Write the new data into our file */
			file_put_contents('plejsa.json', $jsonData);

		}
		/* End function insert */

	}

?>
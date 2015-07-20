<?php

	class Json {

		public function output($data)
		{
			if (is_array($data))
			{
				echo json_encode(array_merge(array('status' => true),$data));
			}
			else {
				echo json_encode(
					array(
						'status' => false,
						'error' => 'data not formatted correctly'
					)
				);
			}				
		}

	}
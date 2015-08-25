<?php namespace app\Http;


class Flash {

	public function create($type, $title, $message){
		session()->flash('flash_message', [
			'message' => $message,
			'title' => $title,
			'type' => $type
		]);
	}

	public function message($title, $message){
		$this->create('info', $title,$message);
	}

	public function success($title, $message){
		$this->create('success', $title,$message);
	}

	public function error($title, $message){
		$this->create('error', $title,$message);
	}
}
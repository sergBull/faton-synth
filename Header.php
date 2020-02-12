<?php
	class Header
	{
		const RIFF = 'RIFF';
		const WAVE = 'WAVE';
		
		protected $format;
		protected $id;
		protected $size;
		
		public static function createFromArray(array $data)
		{
			$header = new Header();
			$header->format = $data['format'];
			$header->id = $data['id'];
			$header->size = $data['size'];
			return $header;
		}
		
		public function getFormat()
		{
			return $this->format;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getSize()
		{
			return $this->size;
		}
	}
?>

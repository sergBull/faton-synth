<?php
	class DataSection Extends Section
	{
		const DATA = 'data';
		
		protected $id;
		protected $raw;
		protected $size;
		
		public static function createFromArray(array $data) 
		{
			$chunk = New DataSection();
			
			$chunk->id = $data['id'];
			$chunk->raw = $data['raw'];
			$chunk->size = $data['size'];
			
			return $chunk;
		} 
		
		public static function createFromRAW($raw) 
		{
			$chunk = New DataSection();
			
			$chunk->id = self::DATA;
			$chunk->raw = strlen($raw);
			$chunk->size = $size;
			
			return $chunk;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getRaw()
		{
			return $this->raw;
		}
		
		public function getSize()
		{
			return $this->size;
		}
	}
?>

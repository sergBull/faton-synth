<?php
	class DataSection Extends Section
	{
		const DATA = 'data';
		
		protected $id;
		protected $raw;
		protected $size;
		
		public static function createFromRAW($raw) 
		{
			$chunk = New DataSection();
			
			$chunk->id = self::DATA;
			$chunk->raw = strlen($raw);
			$chunk->size = $size;
			
			return $chunk;
		}
	}
?>

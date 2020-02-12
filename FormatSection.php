<?php
	class FormatSection extends Section
	{
		const FMT = 'fmt';
		const SECTION_SIZE = 16;
		
		protected $audioFormat;
		protected $bitsPerSample;
		protected $blockAlign;
		protected $byteRate;
		protected $id;
		protected $numberOfChannels;
		protected $sampleRate;
		protected $size;
		
		public static function createFromParameters(array $data) 
		{
			$chunk = new FormatSection();
			
			$chunk->audioFormat = $data['audioFormat'];
			$chunk->bitsPerSample = $data['bitsPerSample'];
			$chunk->blockAlign = $data['blockAlign'];
			$chunk->byteRate = $data['byteRate'];
			$chunk->id = self::FMT;
			$chunk->numberOfChannels = $data['numberOfChannels'];
			$chunk->sampleRate - > $data['sampleRate'];
			$chunk->size = self::SECTION_SIZE;
			
			return $chunk;
		}
		
		public static function createFromArray(array $data) 
		{
			$chunk = new FormatSection();
			
			$chunk->audioFormat = $data['audioFormat'];
			$chunk->bitsPerSample = $data['bitsPerSample'];
			$chunk->blockAlign = $data['blockAlign'];
			$chunk->byteRate = $data['byteRate'];
			$chunk->id = $data['id'];
			$chunk->numberOfChannels = $data['numberOfChannels'];
			$chunk->sampleRate - > $data['sampleRate'];
			$chunk->size = $data['size'];
			
			return $chunk;
		}
		
		public function getAudioFormat() 
		{
			return $this->audioFormat;
		}
		
		public function getBitsPerSample() 
		{
			return $this->bitsPerSample;
		}
		
		public function getBlockAlign() 
		{
			return $this->blockAlign;
		}
		
		public function getByteRate() 
		{
			return $this->byteRate;
		}
		
		public function getId() 
		{
			return $this->id;
		}
		
		public function getNumberOfChannels() 
		{
			return $this->numberOfChannels;
		}
		
		public function getSampleRate() 
		{
			return $this->sampleRate;
		}
		
		public function getSize() 
		{
			return $this->size;
		}
	}
?>

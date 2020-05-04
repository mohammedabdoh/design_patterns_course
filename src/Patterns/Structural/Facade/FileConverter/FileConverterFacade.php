<?php
namespace App\Patterns\Structural\Facade\FileConverter;

use App\Patterns\Structural\Facade\FileConverter\Compress\Compress;
use App\Patterns\Structural\Facade\FileConverter\Compress\Types\GZCompress;
use App\Patterns\Structural\Facade\FileConverter\Compress\Types\ZipCompress;
use App\Patterns\Structural\Facade\FileConverter\Converter\Audio\AudioConverter;
use App\Patterns\Structural\Facade\FileConverter\Converter\Audio\AudioTypes;
use App\Patterns\Structural\Facade\FileConverter\Converter\Converter;
use App\Patterns\Structural\Facade\FileConverter\Converter\Video\VideoConverter;
use App\Patterns\Structural\Facade\FileConverter\Converter\Video\VideoTypes;
use App\Patterns\Structural\Facade\FileConverter\FileScanner\Audio\MP3FileScanner;
use App\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;
use App\Patterns\Structural\Facade\FileConverter\FileScanner\Video\MP4FileScanner;
use App\Patterns\Structural\Facade\FileConverter\Normalizer\Audio\AudioNormalizer;
use App\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;
use App\Patterns\Structural\Facade\FileConverter\Normalizer\Video\VideoNormalizer;

class FileConverterFacade
{
    private string $file;
    private bool $isAudio = true;

    private FileScanner $fileScanner;
    private Normalizer $normalizer;
    private Converter $converter;
    private Compress $fileCompress;

    /**
     * FileConverterFacade constructor.
     * @param string $filePath
     * @throws CorruptedFileException
     */
    public function __construct(string $filePath)
    {
        $this->file = $filePath;
        $this->detectType();
        $this->load();
    }

    private function detectType()
    {
        if(preg_match('/\.(mp3|aa|aac)/i', $this->file)) {
            $this->fileScanner = new MP3FileScanner($this->file);
            $this->normalizer = new AudioNormalizer();
            $this->converter = new AudioConverter();
            $this->fileCompress = new ZipCompress();
        } else {
            $this->fileScanner = new MP4FileScanner($this->file);
            $this->normalizer = new VideoNormalizer();
            $this->converter = new VideoConverter();
            $this->fileCompress = new GZCompress();
            $this->isAudio = false;
        }
    }

    /**
     * @throws CorruptedFileException
     */
    private function load()
    {
        if($this->fileScanner->scan()) {
            $this->normalizer->normalize($this->file);
        } else {
            throw new CorruptedFileException();
        }
    }

    public function convert()
    {
        if($this->isAudio) {
            $this->converter->convert($this->file, AudioTypes::AUDIO_MP3, AudioTypes::AUDIO_AAC);
        } else {
            $this->converter->convert($this->file, VideoTypes::AUDIO_MP4, VideoTypes::AUDIO_AVI);
        }
        $this->fileCompress->compress($this->file);
    }
}
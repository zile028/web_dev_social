<?php

class Upload
{

    public $file;
    public $valid_type;
    public $valid_size;
    public $unit;

    public const KB = 1024;
    public const MB = 1048576;


    public $err = [];
    private $unit_sign = [self::KB => "KB", self::MB => "MB"];
    private $name;
    private $extension;
    private $size;
    private $temp_name;

    static $have_error = false;

    public function __construct($file, array $valid_type, float $valid_size, $unit)
    {
        $this->file = $file;
        $this->valid_type = $valid_type;
        $this->valid_size = $valid_size;
        $this->unit = $unit;

    }


    public function fileInfo()
    {
        return [
            "name" => $this->name = $this->file["name"],
            "extension" => $this->extension = pathinfo(strtolower($this->name), PATHINFO_EXTENSION),
            "size" => $this->size = $this->file["size"],
            "temp_name" => $this->temp_name = $this->file["tmp_name"],
        ];
    }

    public function checkFile()
    {
        $file_info = $this->fileInfo();
        if (!in_array($this->extension, $this->valid_type)) {
            $this->err["err_type"] = "Not valid file type, valid type is " . implode(", ", $this->valid_type);
            self::$have_error = true;
        }
        if ($this->size > $this->valid_size * $this->unit) {
            $this->err["err_size"] = "Not valid file size, valid size is less then " . $this->valid_size . $this->unit_sign[$this->unit];
            self::$have_error = true;
        }
        return [
            "file_info" => $file_info,
            "file_err" => $this->err
        ];
    }

    public function haveError()
    {
        $this->checkFile();
        return self::$have_error;
    }

    public function haveFaile()
    {
        $this->fileInfo();
        return $this->size > 0;
    }

    public function uploadFile($directory)
    {
        $store_name = time() . "." . $this->extension;
        move_uploaded_file($this->temp_name, $directory . "/" . $store_name);
        return $store_name;
    }

}

?>
<?php

namespace App\Services;

use App\Services\HelperServices;
define('UPLOAD_DIR', public_path().'/upload');

class UploadServices
{

    private function createFileDefault($folder = null) {
        $filePhp = fopen($folder . "/index.php","w");
        fwrite($filePhp,"<?php \n //globale slient \n die();");
        fclose($filePhp);
    }

    public function uploadFile($_fileName = '', $imageData = '') {
        $year = date('Y');
        $month = date('m');

        list($type, $imageData) = explode(';', $imageData);
        list(,$extension) = explode('/',$type);
        list(,$imageData)      = explode(',', $imageData);
        $fileName = $_fileName.'-'.date('YmdHis').'.'.$extension;
        $imageData = base64_decode($imageData);

        if ($extension == 'jpg' || $extension == 'png' || $extension == 'bmp' || $extension == 'jpeg' || $extension == 'gif') {

            $folderYear = UPLOAD_DIR. '/' .$year;
            $folderMonth = $folderYear . '/' .$month;
            $baseUrl = $year. '/' .$month;
            if (!file_exists(UPLOAD_DIR) && !is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777);
                chmod(UPLOAD_DIR, 0777);
                if (!file_exists($folderYear) && !is_dir($folderYear)) {
                    mkdir($folderYear, 0777);
                    chmod($folderYear, 0777);
                    $this->createFileDefault($folderYear);
                    if (!file_exists($folderMonth) && !is_dir($folderMonth)) {
                        mkdir($folderMonth, 0777);
                        chmod($folderMonth, 0777);
                        $this->createFileDefault($folderMonth);
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    } else {
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    }
                    return $baseUrl.'/'.$fileName;
                } else {
                    $this->createFileDefault($folderYear);
                    if (!file_exists($folderMonth) && !is_dir($folderMonth)) {
                        mkdir($folderMonth, 0777);
                        chmod($folderMonth, 0777);
                        $this->createFileDefault($folderMonth);
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    } else {
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    }
                    return $baseUrl.'/'.$fileName;
                }
            } else {
                if (!file_exists($folderYear) && !is_dir($folderYear)) {
                    mkdir($folderYear, 0777);
                        chmod($folderYear, 0777);
                    $this->createFileDefault($folderYear);
                    if (!file_exists($folderMonth) && !is_dir($folderMonth)) {
                        mkdir($folderMonth, 0777);
                        chmod($folderMonth, 0777);
                        $this->createFileDefault($folderMonth);
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    } else {
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    }
                    return $baseUrl.'/'.$fileName;
                } else {
                    $this->createFileDefault($folderYear);
                    if (!file_exists($folderMonth) && !is_dir($folderMonth)) {
                        mkdir($folderMonth, 0777);
                        chmod($folderMonth, 0777);
                        $this->createFileDefault($folderMonth);
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    } else {
                        file_put_contents($folderMonth.'/'.$fileName, $imageData);
                        $data = array(
                            'id'    =>  rand(0,78934),
                            'fileName'  =>  $fileName,
                            'path'  =>  $baseUrl.'/'.$fileName
                        );
                    }
                    return $baseUrl.'/'.$fileName;
                }
            }
        } else {
            die();
        }

    }

    public function uploadMultipleFileContent($files, $_fileName, $typeFolder) {
        $folder = UPLOAD_DIR .'/'.$typeFolder;
        if (!file_exists(UPLOAD_DIR) && !is_dir(UPLOAD_DIR)) {
            mkdir(UPLOAD_DIR, 0777);
            chmod(UPLOAD_DIR, 0777);
            if (!file_exists($folder) && !is_dir($folder)) {
                mkdir($folder, 0777);
                chmod($folder, 0777);
                $this->createFileDefault($folder);
            } else {
                $this->createFileDefault($folder);
            }
        } else {
            if (!file_exists($folder) && !is_dir($folder)) {
                mkdir($folder, 0777);
                chmod($folder, 0777);
                $this->createFileDefault($folder);
            } else {
                $this->createFileDefault($folder);
            }
            $this->createFileDefault(UPLOAD_DIR);
        }
        $helper = new HelperServices();
        $time = strtotime(date('Y-m-d H:i:s'));
        foreach($files as $file)
        {
            $imageData = '';
            list($type, $imageData) = explode(';', $file->fileContent);
            list(,$extension) = explode('/',$type);
            list(,$imageData)      = explode(',', $imageData);
            $imageData = base64_decode($imageData);
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'bmp' || $extension == 'jpeg' || $extension == 'gif') {
                $fileName = $helper->toSlug($_fileName).'-'.date('YmdHs').'_'.rand(0, $time).'.'.$extension;
                file_put_contents($folder.'/'.$fileName, $imageData);
                $data[] = $typeFolder.'/'.$fileName;
            }
        }
        return $data;
    }

    public function uploadImageInTinymce($files, $_fileName) {
        $year = date('Y');
        $month = date('m');
        $folderYear = UPLOAD_DIR. '/' .$year;
        $folderMonth = $folderYear . '/' .$month;
        $baseUrl = $year. '/' .$month;
        if (!file_exists(UPLOAD_DIR) && !is_dir(UPLOAD_DIR)) {
            mkdir(UPLOAD_DIR, 0777);
            chmod(UPLOAD_DIR, 0777);
            if (!file_exists($folderYear) && !is_dir($folderYear)) {
                mkdir($folderYear, 0777);
                chmod($folderYear, 0777);
                $this->createFileDefault($folderYear);
                if (!file_exists($folderMonth) && !is_dir($folderMonth)) {
                    mkdir($folderMonth, 0777);
                    chmod($folderMonth, 0777);
                    $this->createFileDefault($folderMonth);
                } else {
                    $this->createFileDefault($folderMonth);
                }
            } else {
                $this->createFileDefault($folderYear);
            }
        } else {
            $this->createFileDefault(UPLOAD_DIR);
        }
        $helper = new HelperServices();
        $time = strtotime(date('Y-m-d H:i:s'));
        $data = [];
        $extension = $files->getClientOriginalExtension();
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'bmp' || $extension == 'jpeg' || $extension == 'gif') {
            $fileName = $helper->toSlug($_fileName).'-'.date('YmdHs').'_'.rand(0, $time).'.'.$extension;
            $files->move($folderMonth, $fileName);
            $data[] = $baseUrl.'/'.$fileName;
        }
        return $data;
    }

    public function uploadMultipleFiles($files, $_fileName, $typeFolder) {
        $folder = UPLOAD_DIR .'/'.$typeFolder;
        if (!file_exists(UPLOAD_DIR) && !is_dir(UPLOAD_DIR)) {
            mkdir(UPLOAD_DIR, 0777);
            chmod(UPLOAD_DIR, 0777);
            if (!file_exists($folder) && !is_dir($folder)) {
                mkdir($folder, 0777);
                chmod($folder, 0777);
                $this->createFileDefault($folder);
            } else {
                $this->createFileDefault($folder);
            }
        } else {
            $this->createFileDefault(UPLOAD_DIR);
        }
        $helper = new HelperServices();
        $time = strtotime(date('Y-m-d H:i:s'));
        foreach($files as $file)
        {
            $extension = $file->getClientOriginalExtension();
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'bmp' || $extension == 'jpeg' || $extension == 'gif') {
                $fileName = $helper->toSlug($_fileName).'-'.date('YmdHs').'_'.rand(0, $time).'.'.$extension;
                $file->move($folder, $fileName);
                $data[] = $typeFolder.'/'.$fileName;
            }
        }
        return $data;
    }
}
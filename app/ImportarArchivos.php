<?php 
namespace App;
use Maatwebsite\Excel\Files\ExcelFile;

class ImportarArchivos extends ExcelFile {
    public function getFile()
    {
        return public_path('archivos') . '/evaluadosAlen3dfecha.csv';
    }
    public function getFilters()
    {
        return [
            'chunk'
        ];
    }
}
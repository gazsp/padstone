<?php
namespace Imarc\Padstone;

use ZipArchive;

class Install
{
    /**
     * This function returns an array of files that should not be extracted
     * from the craft.zip file.
     *
     * @return array
     */
    private static function skippedFiles()
    {
        return array(
            'craft/config/db.php',
            'craft/config/general.php',
            'craft/templates/404.html',
            'craft/templates/_layout.html',
            'craft/templates/index.html',
            'craft/templates/news',
            'craft/templates/news/_entry.html',
            'craft/templates/news/index.html',
            'craft/templates/web.config',
            'public/htaccess',
            'public/web.config',
        );
    }

    public static function run()
    {
        $install = new Install();
    }

    public function __construct()
    {
        $zip_file = 'craft_latest.zip';

        echo "Downloading Craft from https://craftcms.com/latest.zip...\n";

        file_put_contents(
            $zip_file,
            fopen("https://craftcms.com/latest.zip?accept_license=yes", "r")
        );

        echo "Created ZIP file '$zip_file'. Extracting contents...\n";

        $zip = new ZipArchive();
        if ($zip->open($zip_file) === true) {

            $files = array();
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $files[] = $zip->getNameIndex($i);
            }

            $files = array_diff($files, static::skippedFiles());

            $zip->extractTo('.', $files);
            $zip->close();
        } else {
            echo "'$zipfile' is not a valid ZIP archive.\n";
            exit(1);
        }

        echo "Extraction complete.\n";
    }
}

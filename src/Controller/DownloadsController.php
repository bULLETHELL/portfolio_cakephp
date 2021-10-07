<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Static content controller
 *
 * This controller will render views from templates/Downloads/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class DownloadsController extends AppController
{
    public function index(){
        $files_dir = new Folder(WWW_ROOT . DS . "files");
        $files = $files_dir->find('.*\.pdf');
        $this->set(compact('files'));
    }
}
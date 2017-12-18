<?php
namespace Home\Controller;
use Think\Controller;
class GalleryController extends Controller
{
    public function index()
    {
        $galleryUrl = U('Gallery/gallery');
        $this->assign('galleryUrl',$galleryUrl);
        $this->display();
    }
}
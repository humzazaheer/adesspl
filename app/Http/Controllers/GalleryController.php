<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Gallery $gallery)
    {
        $gallery = DB::table('galleries')->where('gallery_active_status', '1')->get();
        return view('/admin/gallery', ['galleryData' => $gallery]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gallery $gallery)
    {
        $gallery->gallery_description = $request->get('gallery_description');
        $gallery->gallery_thumbnail = $request->get('gallery_thumbnail');
        $thumb = $request->file('gallery_thumbnail');
        $thumb_fname = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME);
        $thumb_name = $thumb_fname . '_thumb_' . date('d_m_y_H_s_i') . '.' . $thumb->getClientOriginalExtension();
        $thumb->move(public_path('/uploads'), $thumb_name);
        $gallery->gallery_thumbnail = $thumb_name;
        $img_array = array();
        $g_images = $request->file('gallery_images');
        foreach ($g_images as $g_image) {
            $img_fname = pathinfo($g_image->getClientOriginalName(), PATHINFO_FILENAME);
            $image_name = $img_fname . '_' . date('d_m_y_H_s_i') . '.' . $g_image->getClientOriginalExtension();
            $g_image->move(public_path('/uploads'), $image_name);
            $img_array[] = $image_name;
        }
        $all_images = implode('|', $img_array);
        $gallery->gallery_images = $all_images;
        $gallery->gallery_active_status = 1;
        $gallery->save();
        return Redirect::route('galleryData.admin')->with('success', 'Gallery added successfully.');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {

        return view('admin.edit_gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $gallery->gallery_description = $request->get('gallery_description');
        $gallery_current_thumb = $request->get('gallery_current_thumbnail');
        $thumb = $request->file('gallery_thumbnail');
        if ($thumb) {
            if (file_exists(public_path() . '/uploads/' . $gallery_current_thumb)) {
                unlink(public_path() . '/uploads/' . $gallery_current_thumb);
            }
            $thumb_fname = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME);
            $thumb_name = $thumb_fname . '_thumb_' . date('d_m_y_H_s_i') . '.' . $thumb->getClientOriginalExtension();
            $thumb->move(public_path('/uploads'), $thumb_name);
            $gallery->gallery_thumbnail = $thumb_name;
        }

        $gallery_current_images = $request->get('gallery_current_images');
        $g_images = $request->file('gallery_images');
        if ($g_images) {
            if($gallery_current_images){
                foreach (explode('|', $gallery_current_images) as $c_img){
                    if (file_exists(public_path() . '/uploads/' . $c_img)) {
                        unlink(public_path() . '/uploads/' . $c_img);
                    }
                }
            }

            foreach ($g_images as $g_image) {
                $img_fname = pathinfo($g_image->getClientOriginalName(), PATHINFO_FILENAME);
                $image_name = $img_fname . '_' . date('d_m_y_H_s_i') . '.' . $g_image->getClientOriginalExtension();
                $g_image->move(public_path('/uploads'), $image_name);
                $img_array[] = $image_name;
            }
            $all_images = implode('|', $img_array);
            $gallery->gallery_images = $all_images;
        }
        $gallery->save();
        return Redirect::route('galleryData.admin')->with('success', 'gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery, Request $request)
    {
        $gallery->gallery_active_status = 0;
//        $data = array('gallery_active_status' => '0');
        $gallery->save();
        return Redirect::route('galleryData.admin')->with('success', 'Gallery deleted successfully.');


    }
}

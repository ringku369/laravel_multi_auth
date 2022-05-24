<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;


use App\Models\SiteBanner;


class BannerController extends Controller
{
  const VIEW_PATH = 'admin.banner.';
  public function __construct()
  {

  }

  public function index()
  {
    $this->authorize('read',SiteBanner::class);
    $banners = SiteBanner::where(['status'=>1])->orderBy('sort','asc')->get();
    return view(self::VIEW_PATH . 'index',compact('banners'));
  }

  public function create()
  {
    $this->authorize('create',SiteBanner::class);
    return view(self::VIEW_PATH . 'add_edit');
  }

  public function store(Request $request)
  {
    $this->authorize('create',SiteBanner::class);
    //return $request->all();
    //dd($request->all());
    $this->validate($request, [
        'thumb' => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:20000',
        'thumb' => 'required',
        'sort' => 'required',
        'name' => 'required|min:1|max:128'
    ]);

    $data = $request->except('_token');
    $authUser = Auth::user('admin')->id;
    array_walk_recursive($data, function (&$val) {
        $val = trim($val);
        $val = is_string($val) && $val === '' ? null : $val;
    });

    $data['created_by'] = $authUser;

    if ($request->hasFile('thumb')) {
      $thumb = $request->file('thumb');
      $randNumber = rand(1, 999);
      $name = 'thumb-' . $authUser . '-' . time() . $randNumber . '.' . $thumb->getClientOriginalExtension();
      $year = date('Y/');
      $month = date('F/');
      $destinationPath = storage_path('app/public/banner/' . $year . $month);
      $thumb->move($destinationPath, $name);
      $filePath = 'banner/' . $year . $month;
      $data['thumb'] = $filePath . '' . $name;
    }

    SiteBanner::create($data);

    return redirect()->route('admin.banner')->with([
                    'mesage' => __('admin.common.success'),
                    'alert-type' => 'success'
                ])->withInput();
  }

  public function edit(Request $request, $id)
  {
    $this->authorize('update',SiteBanner::class);
    $banner = SiteBanner::where(['id'=>$id])->first();
    return view(self::VIEW_PATH . 'add_edit', compact('banner'));
  }

  public function update(Request $request, $id)
  {
    $this->authorize('update',SiteBanner::class);
    //dd($request->all());
    $this->validate($request, [
      'thumb' => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:20000',
      //'thumb' => 'required',
      'sort' => 'required',
      'name' => 'required|min:1|max:128'
  ]);

    $banner = SiteBanner::where(['id'=>$id])->first();
    if ( is_null($banner) == true) {
      return back()->with([
        'error' => __('admin.common.error'),
        'alert-type' => 'error'
      ]);
    }
    $data = $request->except('_token');
    $authUser = Auth::user('admin')->id;
    array_walk_recursive($data, function (&$val) {
        $val = trim($val);
        $val = is_string($val) && $val === '' ? null : $val;
    });

    $data['updated_by'] = $authUser;

    if ($request->hasFile('thumb')) {
      @unlink(storage_path('/app/public/' . $banner->thumb));
      $thumb = $request->file('thumb');
      $randNumber = rand(1, 999);
      $name = 'thumb-' . $authUser . '-' . time() . $randNumber . '.' . $thumb->getClientOriginalExtension();
      $year = date('Y/');
      $month = date('F/');
      $destinationPath = storage_path('app/public/banner/' . $year . $month);
      $thumb->move($destinationPath, $name);
      $filePath = 'banner/' . $year . $month;
      $data['thumb'] = $filePath . '' . $name;
    }

    SiteBanner::find($id)->update($data);

    return redirect()->route('admin.banner')->with([
      'mesage' => __('admin.common.success'),
      'alert-type' => 'success'
    ]);

  }

  public function delete(Request $request, $id)
  {
    $this->authorize('delete',SiteBanner::class);
    $banner = SiteBanner::find($id);
    if ( is_null($banner) == true) {
      return back()->with([
        'error' => __('admin.common.error'),
        'alert-type' => 'error'
      ]);
    }

    @unlink(storage_path('/app/public/' . $banner->thumb));
    $banner->delete();

    return redirect()->route('admin.banner')->with([
      'message' => __('admin.common.success'),
      'alert-type' => 'success'
    ]);
  }


}

<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables as Datatables;

class ModulesController extends Controller
{
    public function home()
    {
        $data['component'] = [
            'title' => 'Modules / Home',
            'menu' => 'Modules',
            'submenu' => 'Home'
        ];
        return view('backend.modules.home', $data);
    }
    function get_ajax_list_home(Request $request)
    {
        if ($request->ajax()) {
            $query = "SELECT * FROM home h ORDER BY h.id ";
            $data = DB::select($query);
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm "><i class="ti ti-edit"></i></a> ';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete"><i class="ti ti-trash"></i></a>';
                    return $btn;
                })
                ->addColumn('image_url', function ($row) {
                    $image_url = asset('images/' . $row->cover);
                    return $image_url;
                })
                ->addColumn('is_active', function ($row) {
                    if ($row->is_active == 1) {
                        $ck = 'checked';
                    } else {
                        $ck = '';
                    }
                    $btn = '<div class="d-flex justify-content-center">';
                    $btn .= '<div class="form-check form-switch">';
                    $btn .= '<input class="form-check-input ubah" type="checkbox" data-id="' . $row->id . '" role="switch" id="switch' . $row->id . '"' . ($row->is_active ? ' checked' : '') . '>';
                    $btn .= '</div>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['slogan', 'action', 'is_active'])
                ->make(true);
        }
    }
    public function addhome(Request $request)
    {

        $request->validate([
            'slogan' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk tipe dan ukuran gambar
        ]);
        if ($request->hasFile('cover')) {
            if ($request->file('cover')->isValid()) {
                $imageName = time() . '.' . $request->file('cover')->extension();
                $request->file('cover')->move(public_path('images'), $imageName);
            } else {
                return response()->json(['error' => 'Invalid image file.'], 422);
            }
        } else {
            $imageName = 'default/default.png';
        }

        Home::create([
            'slogan' => $request->slogan,
            'cover' => $imageName,
            'is_active' => 1
        ]);
        return response()->json(['success' => 'Record saved successfully.']);
    }
    function home_edit(string $id)
    {
        $home = Home::find($id);
        return response()->json($home);
    }
    public function home_edit_save(Request $request, string $id)
    {
        $id = $request->id_home;
        $request->validate([
            'slogan' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk tipe dan ukuran gambar
        ]);
        if ($request->hasFile('cover')) {
            if ($request->file('cover')->isValid()) {
                $imageName = time() . '.' . $request->file('cover')->extension();
                $request->file('cover')->move(public_path('images'), $imageName);
            } else {
                return response()->json(['error' => 'Invalid image file.'], 422);
            }
            Home::where('id', $id)
                ->update(
                    [
                        'slogan' => $request->slogan,
                        'cover' => $imageName,
                    ]
                );
        } else {
            Home::where('id', $id)
                ->update(
                    [
                        'slogan' => $request->slogan
                    ]
                );
        }

        return response()->json(['success' => 'Record Update successfully.']);
    }
    public function home_delete(string $id)
    {
        Home::find($id)->delete();

        return response()->json(['success' => 'Record deleted successfully.']);
    }
    public function home_switch(Request $request, string $id)
    {
        $id = $request->id;
        $is_active = $request->input('is_active');

        Home::where('id', $id)
            ->update(
                [
                    'is_active' => $is_active,
                ]
            );
        return response()->json(['success' => 'Record Update successfully.']);
    }
    public function about()
    {
        $data['component'] = [
            'title' => 'Modules / About',
            'menu' => 'Modules',
            'submenu' => 'About'
        ];
        return view('backend.modules.about', $data);
    }
    public function product()
    {
        $data['component'] = [
            'title' => 'Modules / Product',
            'menu' => 'Modules',
            'submenu' => 'Product'
        ];
        return view('backend.modules.product', $data);
    }
    public function blog()
    {
        $data['component'] = [
            'title' => 'Modules / Blog',
            'menu' => 'Modules',
            'submenu' => 'Blog'
        ];
        return view('backend.modules.blog', $data);
    }
    public function add_blog()
    {
        $data['component'] = [
            'title' => 'Modules / New Blog',
            'menu' => 'Modules',
            'submenu' => 'New Blog'
        ];
        return view('backend.modules.add_blog', $data);
    }
    public function manage_kategori()
    {
        $data['component'] = [
            'title' => 'Modules / Manage Kategori',
            'menu' => 'Modules',
            'submenu' => 'Manage Kategori'
        ];
        return view('backend.modules.manage_kategori', $data);
    }
}

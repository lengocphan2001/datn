<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\BrandService;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $data = [];
    protected $brandService;
    public function __construct(BrandService $brandService){
        $this->brandService = $brandService;
    }
    /*
    * Danh sach nhan hang
    */
    public function index(){

        return view('admin.brands.index',[
            'title' => 'Danh sách nhãn hàng',
            'brands' => $this->brandService->getAll()
        ]);
    }
    /*
    * Trang them nhan hang
    */
    public function create(){
        return view('admin.brands.add',[
            'title' => 'Thêm nhãn hàng'
        ]);
    }
    /*
    * Xu ly them nhan hang
    */
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:200|unique:brands,name,'
        ]);

        $data = $request->except('_token');
        $this->data = $this->brandService->getData($data);

        $this->brandService->create($this->data);
        return redirect()->route('admin.brands.create')->with('msg','Thêm nhãn hàng thành công');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', [
            'title' => 'Cập nhật nhãn hàng',
            'brand' => $brand
        ]);
    }

    /*
    * Xu ly cap nhat ma giam gia
    */
    public function update(Request $request, Brand $brand)
    {
        $data = $request->except('_token', '_method');
        $this->data = $this->brandService->getData($data);
        $this->brandService->update($this->data, $brand->id);
        return redirect()->route('admin.brands.edit', $brand->id)->with('msg', 'Sửa nhãn hàng thành công');
    }
    /*
    * thay doi trang thai nhan hang
    */
    public function changeStatus(Request $request)
    {
        $this->brandService->changeStatus($request);
        return response()->json(
            [
                'message' => 'Cập nhật trạng thái thành công'
            ]
        );
    }
    /*
    * Xoa nhan hang
    */
    public function destroy($id)
    {
        $this->brandService->delete($id);
        return redirect(route('admin.brands.index'))->with('success', 'Xóa nhãn hàng thành công');
    }
}

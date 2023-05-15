<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $slug, $status, $brand_id;

   protected function rules() {

       return [
        'name' => 'required|string|min:3',
        'slug' => 'required|string',
        'status' => 'nullable',

       ];
   }
   public function resetInput(){
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
        $this->brand_id = NULL;


   }

    public function storeBrand(){
        $validatedData =  $this->validate();
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Marca adicionada com sucesso!');
        $this->dispatchBrowserEvent('fechar-modal');
        $this->resetInput();
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function openModal(){
        $this->resetInput();
    }

    public function editBrand(int $brand_id) {
        $this->brand_id = $brand_id;
        $brand = Brand::findOrFail($brand_id);
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->status = $brand->status;
    }

    public function updateBrand(){
         $this->validate();
        Brand::findOrFail($this->brand_id)->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Marca atualizada com sucesso!');
        $this->dispatchBrowserEvent('fechar-modal');
        $this->resetInput();
    }

    public function deleteBrand($brand_id){
        $this->brand_id = $brand_id;
    }

    public function destroyBrand(){
        Brand::findOrFail($this->brand_id)->delete();
        session()->flash('message', 'Marca exluída!');
        $this->dispatchBrowserEvent('fechar-modal');
        $this->resetInput();
    }
    public function render()
    {
        $brands =  Brand::orderBy('id', 'DESC')->paginate(6);
        return view('livewire.admin.brand.index', compact('brands'))
                    ->extends('layouts.admin')
                    ->section('content');
    }
}

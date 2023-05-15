<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $category_id;
    protected $paginationTheme = 'bootstrap';

    public function deleteCategory($category_id)
    {
        $this->category_id = $category_id;
    }

    public function destroyCategory()
    {
       $category = Category::find($this->category_id);
        $path = 'uploads/category/' . $category->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $category->delete();
        session()->flash('message', 'Categoria deletada');
        $this->dispatchBrowserEvent('fechar-modal');
    }
    public function render()
    {
        $categorias = Category::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.category.index', compact('categorias'));
    }
}

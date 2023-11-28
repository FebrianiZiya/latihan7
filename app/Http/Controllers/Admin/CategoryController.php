    <?php


    namespace App\Http\Controllers\Admin;

    use App/Http/Controllers\Controller;
    use App\Models\Admin\Category;
    use Illuminate\Http\Request;



 class Category Controller extends Controller
 {

    public function index()
    {
        $data = Category::all();
        return view('admin.category.index', compact('data'));

    }

    public function store (Request $request)
       {

            $request->validate([
                'title_category '=> 'required unique:categories'
            ]);

            Category::create([

                'title_category' => $request->title_category, 
                'slug_category'  => str_replace(' ', '-', $request->title_category)
            ]); 
            return redirect()->route('admin.category.index')->with('success', 'Category Hass Been Added');
        }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redict()->route('admin.category.index')->with('success','Category Hass Been Deleted');
    }

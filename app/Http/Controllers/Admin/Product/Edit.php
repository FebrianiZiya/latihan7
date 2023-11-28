public function edit($id)
    {
        $category = Category : :all();
        $data  = Product : :findorfail($id);
        return view('admin.product.edit', compact('data', 'category'));
        
    }
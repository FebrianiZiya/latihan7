public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|numeric',
            'harga' => 'required|numeric'.
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,jpng,jpeg'
        ]);
           
    

        $image_file = time() . '.' . $request->image->extension();
        Product: :create([
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'slung'       => str_replace(' ', '-', $request->title),
            'harga'       => $request->harga,
            'body'        => $request->body,
            'image'       => $image_file
        ]);

        $request->image->move(public_path('image'), $image_file);

        return redirect()->route('admin.product.index')->with('success','New Product Hass Been Added');
    }

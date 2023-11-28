public function update(Request $request, $id)
        {
            $data = Product : :find($id);
            $request->validate([
                'title' => 'required',
                
                ])
        }
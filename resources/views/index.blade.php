<tbody>
        @forelse ($data as $cat)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th>
                    <img src="{{ asset('image/. $cat->image) }}" alt="" width="100px" height="50px">
                </th>
                <td>{{ $cat->title }}</td>
                <td>{{ $cat->category->title_category }}</td>
                <td>{{ $cat->harga }}</td>
                <td>
                    <a href="{{ route('admin.product.edit', Scat->id) }}" 
                        class="btn btn-warning btn-sa"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{ route('admin.product.delete', Scat->id) }}" 
                        class="btn btn-danger btn-sa"><i class="fa fa-trash"></i> Hapus</a>
                </td>

          </tr>
       @empty
         <tr>
            <th colspan="6" class="text-center">Not Found</th>
         </tr>
@end forelse

  
</tbody>
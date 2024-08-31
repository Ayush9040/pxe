@foreach($datas as $data)
<tr id="blog-bulk-delete">
   

  <td>
      <img src="{{ isset(json_decode($data->photo,true)[0]) ?  asset('assets/images/'.json_decode($data->photo,true)[0]) : asset('assets/images/placeholder.png')}}" alt="">

  </td>
  <td>
        {{ $data->blog }}
    </td> 
    <td>
        {{ $data->title }}
    </td> 
    <td>
    {{ $data->details }}
    </td>
    <td>
    {{ $data->created_at }}
    </td>
   
</tr>
@endforeach

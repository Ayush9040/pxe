@foreach($datas as $data)
<tr>
    <td>
        <img src="{{ $data->image ? asset('assets/images/'.$data->image) : asset('assets/images/placeholder.png') }}" alt="Image Not Found">
    </td>

    
    <td>
       {{strtoupper($data->title)}}
    </td>

    

    <td>
        <div class="action-list">
            
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.exclusive.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach

@foreach($datas as $data)
<tr>
    <td>
        {{ $data->first_name }} {{ $data->last_name }}
    </td>
    <td>
        {{ $data->email }}
    </td>
    <td>
        {{ $data->phone }}
    </td>
    
        @if($data->activestatus==1)
        <td> {{ __('Active') }} </td>
        @else
        <td> {{ __('InActive') }} </td>
        @endif  

    
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="{{ route('back.user.show',$data->id) }}">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.user.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach

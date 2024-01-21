@foreach($datas as $data)
<tr>
    <td>
        {{ $data->pr_info_name }}
    </td>
    <td>
        {{ $data->email }}
    </td>
    <td>
        {{ $data->mobile_telephone }}
    </td>

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="{{ route('back.franchise.show',$data->id) }}">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.franchise.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach

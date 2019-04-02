
 <div>
 <table>
        
            @if(!empty($data))
                @foreach($data as $key=>$value )
                    {{$key[$value]}}
                @endforeach
            @else
                <tr>
                    <td colspan="6">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
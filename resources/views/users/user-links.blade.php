@extends("dashboard")

@push("PAGE_TITLE")
  {{  "  روابطك " }}
@endpush
    
@section("contant")

    <div class="frame">


        <div class="base-box fd-column table-section">

                <div class="section-header">
                روابطك
                </div>
        
                <table class="top-links-table">
                    <thead>
                        <tr>
                            <th>اسم الرابط</th>
                            <th> الرابط </th>
                            <th> النقاط </th>
                            <th> الإخطاء </th>
                            <th> الحالة </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>link 0</td>
                            <td>www.golden-links.com/code/152658</td>
                            <td>500</td>
                            <td>UNKNOWN_ERROR</td>
                            <td> <input type="checkbox" name="DELETE_LINK[]" ></td>
                        </tr>
                        <tr>
                            <td>link 1</td>
                            <td>www.golden-links.com/code/152658</td>
                            <td>500</td>
                            <td>AD_BLOCK_ERROR</td>
                            <td> <input type="checkbox" name="DELETE_LINK[]" ></td>
                        </tr>
                        <tr>
                            <td>link 2</td>
                            <td>www.golden-links.com/code/152658</td>
                            <td>500</td>
                            <td>USER_ERROR</td>
                            <td> <input type="checkbox" name="DELETE_LINK[]" ></td>
                        </tr>
                        <tr>
                            <td>link 3</td>
                            <td>www.golden-links.com/code/152658</td>
                            <td>500</td>
                            <td>LINK_ERROR</td>
                            <td> <input type="checkbox" name="DELETE_LINK[]" ></td>
                        </tr>
                        <tr>
                            <td>link 4</td>
                            <td>www.golden-links.com/code/152658</td>
                            <td>500</td>
                            <td>CODE_ERROR</td>
                            <td> <input type="checkbox" name="DELETE_LINK[]" ></td>
                        </tr>
                    </tbody>
                </table>
    </div>
</div>


@endsection
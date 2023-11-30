<template>
    <table id="item_table"  class="table table-striped table-borderless " role="grid" style="width: 100%;height:260px;overflow: auto;">
        <thead>
            <tr role="row">
                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#"
                    style="width: 61px;">
                    Stock #</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Business type: activate to sort column ascending" style="width: 20px;">Item</th>
              
            
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Updated at: activate to sort column ascending" style="width: 93px;">App Price</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;">App
                    Year</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 4px;">
                    Actions</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
</template>
<script>
export default {
    name: 'item_table',
    components: {

    }
}
</script>
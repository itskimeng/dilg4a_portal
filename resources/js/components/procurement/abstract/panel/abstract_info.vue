<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><font-awesome-icon :icon="['fas', 'circle-info']"></font-awesome-icon>&nbsp;Information
            </h5>
            <div class="row">
                <div class="col-lg-3">
                    <TextInput label="Abstract Number" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="RFQ Number" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="Purchase Request Number" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="Total ABC" v-model="abstract_no" :value="abstract_no" />
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <TextInput label="Abstract Date" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="RFQ Date" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="Purchase Request Date" v-model="abstract_no" :value="abstract_no" />
                </div>
                <div class="col-lg-3">
                    <TextInput label="Office" v-model="abstract_no" :value="abstract_no" />
                </div>

            </div>

        </div>
    </div>
</template>
<script>

export default{
    name: 'Abstrace Information',
}
</script>
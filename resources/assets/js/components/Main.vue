<template>
    <div class="container">
        <div class="page-header">
            <h2>Semua Catatan</h2>
        </div>

        <div class="notes table-responsive">
            <table class="table">

                <thead>
                    <tr>
                        <th>Note Title</th>
                        <th class="bl">Created At</th>
                        <th class="bl">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr v-for="note in notes">
                        <td>{{ note.title }}</td>
                        <td class="bl">20/03/1998</td>
                        <td class="bl"><a href="#" data-toggle="modal" data-target="#editModal">Edit</a> Delete</td>
                    </tr>

                </tbody>

            </table>

        </div>

        <div class="text-center">
            <pagination></pagination>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                notes: {}
            }
        },
        created () {
            this.get_notes();
        },
        methods: {
            get_notes () {
                var vm = this;
                axios.get('/notes')
                .then(function (response) {
                    if (response.status == 200) {
                        console.log(response)
                        Vue.set(vm.$data,'notes',response.data.data)
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>

<style>
    .bl {
        border-left: 1px dashed #ccc
    }
</style>

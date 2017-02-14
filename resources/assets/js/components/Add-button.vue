<template>
    <div class="tombol-tambah">
        <div class="tombol" data-toggle="modal" data-target="#addModal">
            <a href="#" title="Tambah Catatan">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>
    </div>
</template>

<script>

</script>

<style>
.tombol-tambah {
    position:fixed;
    bottom: 80px;
    right: 40px;
    z-index: 99999;
}
.tombol-tambah a {
    color: #fff
}
.tombol {
    border-radius: 50%;
    background-color: #333;
    color: #fff;
    padding: 5px 10px 5px 10px;
}
</style>

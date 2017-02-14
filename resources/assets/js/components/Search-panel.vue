<template>
    <div class="container">

        <nav class="search-panel row">

            <div class="home col-xs-2 col-sm-2 text-right">
                <a title="Home" href="#"><span class="lg glyphicon glyphicon-home"></span></a>
            </div>

            <div class="search col-xs-8 col-sm-8">
                <form action="#" method="post">

                    <div class="input-group">
                        <input class="kolom-cari" type="text" name="search" placeholder="Cari Catatan">
                        <div class="input-group-addon">
                            <button type="submit" class="tombol-cari"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="logout col-xs-2 col-sm-2">
                <a title="Log Out" href="#"><span class="lg glyphicon glyphicon-log-out"></span></a>
            </div>

        </nav>

    </div>
</template>

<script>

</script>

<style>
    .input-group-addon {
        background: #ccc;
        border : none;
        z-index: 9999;
        box-shadow: 1px 1px 5px #ccc;
    }
    .form-inline {
        width: 100%
    }
    .tombol-cari {
        width: 100%;
        height: 100%;
        padding: 10px 10px 10px 10px;
        border: 1.5px solid #ccc;
        outline: none;
        background: none;
        color: #fff
    }
    .tombol-cari:hover {
        color: #eee;
    }
    .kolom-cari {
        background: #fefefe;
        width: 100%;
        height: 50px;
        border-radius: 5px;
        border-top-right-radius:1px;
        border-bottom-right-radius: 1px;
        padding: 10px 10px 10px 20px;
        box-shadow: 1px 1px 5px #ccc;
        border: none;
        z-index: 99999
    }
    .kolom-cari:focus {
        outline: none;
        border: none
    }
    .lg {
        font-size: 40px;
        color: #bbb;
        text-shadow: 1px 2px 5px #ccc
    }
    .lg:hover {
        color: #ddd;
        text-shadow: 2px 2px 10px #fff
    }
    .home, .logout {
        padding: 5px
    }
</style>

<template>
    <div class="container">
        <nav aria-label="...">
          <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
          </ul>
        </nav>
    </div>
</template>

<script>

</script>

<style>

li.active {
    color: red
}

li a {
    margin: 5px;
    border-radius: 50%;
    transition: all .2s ease-in-out
}

li a:hover {
    transform: scale(1.2);
}
.active a{
    background-color: #ccc !important;
    border-color: #ccc !important
}
li a {
    color: #888 !important
}

</style>

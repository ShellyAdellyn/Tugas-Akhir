<?php require "header.php"; ?>
<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/4.jpg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;
    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>ABOUT US</h3>
            <p>Home > <a href="#">About Us</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pt-4 pb-4">
    <div class="row no-gutter">
        <div class="col-sm-8 text-justify">
            <h4>ABOUT US Beadslyy.id</h4>
            <p>Beadslyy.id, sebuah butik fashion wanita yang berdiri megah, 
                merupakan persembahan dari visi dan dedikasi dua tokoh kreatif
                 yang brilian: Shelly Adellyn dan Liguori Afra. 
                 Dengan sentuhan personalitas dan keahlian desain yang luar biasa, 
                 mereka menciptakan sebuah tempat di mana gaya dan keanggunan bersatu, 
                 menciptakan pengalaman berbelanja yang tak terlupakan.</p>
            <p>Beadslyy.id, dengan kepemimpinan Shelly Adellyn dan Liguori Afra, 
                menjadi pusat fashion yang menggabungkan seni dan gaya. 
                Butik ini tidak hanya menawarkan produk berkualitas, 
                tetapi juga merayakan keindahan individual dan kreativitas dalam setiap aspeknya.</p>
        </div>
        <div class="col-sm-4">
            <img src="assets/img/141.jpg" height="300px" width="100%">
        </div>
    </div>
</div>
<?php require "footer.php"; ?>
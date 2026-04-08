<?php require "includes/header.php" ?>
<?php require "database/connection.php" ?>
<main>
    <h1>Ons aanbod</h1>

    <h3 class="section-title">Al Onze Auto's</h3>
    <div class="cars">
        <?php for ($i = 0; $i <= 3; $i++) : ?>
            <div class="car-details">
                <div class="car-brand">
                    <h3>Toyota Supra</h3>
                    <div class="car-type">
                        Sport
                    </div>
                </div>
                <img src="assets/images/products/car.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">53l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">2 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€150,00</span> / dag</span>
                    <a href="/car-detail" class="button-primary">Bekijk nu</a>
                </div>
            </div>
<div class="car-details">
                <div class="car-brand">
                    <h3>Volkswagen Touran</h3>
                    <div class="car-type">
                        SUV
                    </div>
                </div>
                <img src="assets/images/products/car-5.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">58l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">7 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€100,00</span> / dag</span>
                    <a href="/car-detail2" class="button-primary">Bekijk nu</a>
                </div>
            </div>
        <?php endfor; ?>
    </div>
<div class="cars">
<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
<div class="car-brand">
<h3>BMW M4 Cabrio</h3>
<div class="car-type">
        Sport
    </div>
</div>
<img src="assets/images/products/car-2.svg"(<?= $i ?>).svg" alt="">
<div class="car-specification">
    <span><img src="assets/images/icons/gas-station.svg" alt="">59l</span>
    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
    <span><img src="assets/images/icons/profile-2user.svg" alt="">4 Personen</span>
</div>
    <div class="rent-details">
            <span><span class="font-weight-bold">€150,00</span> / dag</span>
        <a href="/car-detail3" class="button-primary">Bekijk nu</a>
    </div>
</div>
<?php endfor; ?>
<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
                <div class="car-brand">
                    <h3>Skoda Karoq</h3>
                    <div class="car-type">
                        SUV
                    </div>
                </div>
                <img src="assets/images/products/car-6.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">50l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">5 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€120,00</span> / dag</span>
                    <a href="/car-detail4" class="button-primary">Bekijk nu</a>
                </div>
            </div>
        <?php endfor; ?>
<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
<div class="car-brand">
<h3>BMW M4 Cabrio</h3>
<div class="car-type">
        Sport
    </div>
</div>
<img src="assets/images/products/car-2.svg"(<?= $i ?>).svg" alt="">
<div class="car-specification">
    <span><img src="assets/images/icons/gas-station.svg" alt="">59l</span>
    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
    <span><img src="assets/images/icons/profile-2user.svg" alt="">4 Personen</span>
</div>
    <div class="rent-details">
            <span><span class="font-weight-bold">€150,00</span> / dag</span>
        <a href="/car-detail3" class="button-primary">Bekijk nu</a>
    </div>
</div>
<?php endfor; ?>

<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
                <div class="car-brand">
                    <h3>Volkswagen Touran</h3>
                    <div class="car-type">
                        SUV
                    </div>
                </div>
                <img src="assets/images/products/car-5.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">58l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">7 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€100,00</span> / dag</span>
                    <a href="/car-detail2" class="button-primary">Bekijk nu</a>
                </div>
            </div>
        <?php endfor; ?>
        <?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
                <div class="car-brand">
                    <h3>Skoda Karoq</h3>
                    <div class="car-type">
                        SUV
                    </div>
                </div>
                <img src="assets/images/products/car-6.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">50l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">5 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€120,00</span> / dag</span>
                    <a href="/car-detail4" class="button-primary">Bekijk nu</a>
                </div>
            </div>
        <?php endfor; ?>
<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
                <div class="car-brand">
                    <h3>Skoda Karoq</h3>
                    <div class="car-type">
                        SUV
                    </div>
                </div>
                <img src="assets/images/products/car-6.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">50l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">5 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€120,00</span> / dag</span>
                    <a href="/car-detail4" class="button-primary">Bekijk nu</a>
                </div>
            </div>
        <?php endfor; ?>
<?php for ($i = 0; $i <= 3; $i++) : ?>
<div class="car-details">
<div class="car-brand">
<h3>BMW M4 Cabrio</h3>
<div class="car-type">
        Sport
    </div>
</div>
<img src="assets/images/products/car-2.svg"(<?= $i ?>).svg" alt="">
<div class="car-specification">
    <span><img src="assets/images/icons/gas-station.svg" alt="">59l</span>
    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
    <span><img src="assets/images/icons/profile-2user.svg" alt="">4 Personen</span>
</div>
    <div class="rent-details">
            <span><span class="font-weight-bold">€150,00</span> / dag</span>
        <a href="/car-detail3" class="button-primary">Bekijk nu</a>
    </div>
</div>
<?php endfor; ?>
 <?php for ($i = 0; $i <= 3; $i++) : ?>
            <div class="car-details">
                <div class="car-brand">
                    <h3>Toyota Supra</h3>
                    <div class="car-type">
                        Sport
                    </div>
                </div>
                <img src="assets/images/products/car.svg"(<?= $i ?>).svg" alt="">
                <div class="car-specification">
                    <span><img src="assets/images/icons/gas-station.svg" alt="">53l</span>
                    <span><img src="assets/images/icons/car.svg" alt="">Schakel</span>
                    <span><img src="assets/images/icons/profile-2user.svg" alt="">2 Personen</span>
                </div>
                <div class="rent-details">
                    <span><span class="font-weight-bold">€150,00</span> / dag</span>
                    <a href="/car-detail" class="button-primary">Bekijk nu</a>
                </div>
            </div>
<?php endfor; ?>
</main>
<?php require "includes/footer.php" ?>
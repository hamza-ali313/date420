<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
?>

<section class="hero-section-register regis2">
    <div class="hs1">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="hs-logo">
                        <a href="index.php">
                            <!-- <img class="img-fluid" src="images/logo.png" alt=""> -->
                        </a>
                    </div>

                </div>
                <div class="col-5 p-0">
                    <div class="hs-right">
                        <img class="img-fluid" src="images/regis.png" alt="">
                        <h2>Join For Free</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="register_body regis2">
    <div class="container">
        <div class="col-12">
            <div class="regis_form regis2">
                <form class="myForm" action="dashboard_sub_pkgs.php">
                    <h2>Register your profile</h2>
                    <div class="form-control">
                        <input type="text" name="realName" placeholder="Real name" />
                        <p class="empty_field">First name & Last name</p>
                    </div>
                    <div class="reg2_form">
                        <div class="form-control">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Here for</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class='custom-checkbox'>
                                        <input type="checkbox">
                                        <label for="">Fun</label>
                                    </div>
                                    <div class='custom-checkbox'>
                                        <input type="checkbox">
                                        <label for="">Whatever</label>
                                    </div>
                                    <div class='custom-checkbox'>
                                        <input type="checkbox">
                                        <label for="">Dating</label>
                                    </div>
                                    <div class='custom-checkbox'>
                                        <input type="checkbox">
                                        <label for="">Friendship</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-control regis_last regis2">
                            <div class="form_gender">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <h5>Birthday</h5>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                        <div class="d-flex gap-3 flex-wrap">
                                            <select name="sources" class="custom-select sources" placeholder="Month">
                                                <option value="jan">Jan</option>
                                                <option value="feb">Feb</option>
                                                <option value="mar">Mar</option>
                                                <option value="apr">Apr</option>
                                                <option value="may">May</option>
                                                <option value="jun">Jun</option>
                                                <option value="jul">Jul</option>
                                                <option value="aug">Aug</option>
                                                <option value="sep">Sep</option>
                                                <option value="oct">Oct</option>
                                                <option value="nov">Nov</option>
                                                <option value="dec">Dec</option>
                                            </select>
                                            <select name="sources" class="custom-select sources" placeholder="Day">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                            </select>
                                            <select name="sources" class="custom-select sources" placeholder="Year">
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="row  align-items-center">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Looking For</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="looking101" name="looking1-group">
                                            <label for="looking101">Woman</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="looking1022" name="looking1-group">
                                            <label for="looking1022">Man</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="looking1023" name="looking1-group">
                                            <label for="looking1023">Both</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-control regis_last regis2 ">
                            <div class="form_gender">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <h5>Desired Age</h5>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                        <div class="da">
                                            <label for="">From</label>
                                            <select name="sources" class="custom-select sources" placeholder="18">
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div class="da">
                                            <label for="">to</label>
                                           
                                            <select name="sources" class="custom-select sources" placeholder="52">
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-control regis2">
                            <textarea rows="8" placeholder="About Me"></textarea>
                        </div>
                    </div>
                    <div class="r2_appear">
                        <h2>Appearance</h2>
                        <div class=" flex-column align-items-start">
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column ">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Ethnicity</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity01" name="ethnicity-group">
                                            <label for="ethnicity01">African</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity02" name="ethnicity-group">
                                            <label for="ethnicity02">Arab</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity03" name="ethnicity-group">
                                            <label for="ethnicity03">Caucasian (white)</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity04" name="ethnicity-group">
                                            <label for="ethnicity04">Indian</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity05" name="ethnicity-group">
                                            <label for="ethnicity05">Native American</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity06" name="ethnicity-group">
                                            <label for="ethnicity06">African American</label>
                                        </div>

                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity07" name="ethnicity-group">
                                            <label for="ethnicity07">Asian</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity08" name="ethnicity-group">
                                            <label for="ethnicity08">Hispanic</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity09" name="ethnicity-group">
                                            <label for="ethnicity09">Mixed</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="ethnicity010" name="ethnicity-group">
                                            <label for="ethnicity010">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column ">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Body type</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="bodytype01" name="bodytype-group">
                                            <label for="bodytype01">Silm</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="test022" name="bodytype-group">
                                            <label for="test022">Average</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="test023" name="bodytype-group">
                                            <label for="test023">Athletic</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="test024" name="bodytype-group">
                                            <label for="test024">A little plump</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="test025" name="bodytype-group">
                                            <label for="test025">Big and lovely</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column ">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Hair color</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="haircolor01" name="haircolor-group">
                                            <label for="haircolor01">Blond</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="haircolor022" name="haircolor-group">
                                            <label for="haircolor022">Brown</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="haircolor023" name="haircolor-group">
                                            <label for="haircolor023">Red</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="haircolor024" name="haircolor-group">
                                            <label for="haircolor024">Black</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column ">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Eye color</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor01" name="eyecolor-group">
                                            <label for="eyecolor01">Amber</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor022" name="eyecolor-group">
                                            <label for="eyecolor022">Brown</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor023" name="eyecolor-group">
                                            <label for="eyecolor023">Green</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor024" name="eyecolor-group">
                                            <label for="eyecolor024">Blue</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor025" name="eyecolor-group">
                                            <label for="eyecolor025">Gray</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="eyecolor026" name="eyecolor-group">
                                            <label for="eyecolor026">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Lifestyle</h2>
                        <div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column ">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Favorite way to spend time</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="">
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Books</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Clubs</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Friends</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Music</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Nightlife</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Internet</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Outdoor</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Sports</label>
                                        </div>
                                        <div class='custom-checkbox'>
                                            <input type="checkbox">
                                            <label for="">Other</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-control regis2">
                                <textarea rows="8" placeholder="In my own words"></textarea>
                            </div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Smoking</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking01" name="smoking-group">
                                            <label for="smoking01">Never</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking022" name="smoking-group">
                                            <label for="smoking022">Quit</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking023" name="smoking-group">
                                            <label for="smoking023">Rarely</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking024" name="smoking-group">
                                            <label for="smoking024">Socially</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking025" name="smoking-group">
                                            <label for="smoking025">Often</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="smoking026" name="smoking-group">
                                            <label for="smoking026">Very Often</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3 align-items-md-center flex-md-row align-items-start flex-column">
                                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                    <h5>Drinking</h5>
                                </div>
                                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                                    <div class="pkg_dash regis2_pkg">
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking01" name="drinking-group">
                                            <label for="drinking01">Never</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking022" name="drinking-group">
                                            <label for="drinking022">Quit</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking023" name="drinking-group">
                                            <label for="drinking023">Rarely</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking024" name="drinking-group">
                                            <label for="drinking024">Socially</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking025" name="drinking-group">
                                            <label for="drinking025">Often</label>
                                        </div>
                                        <div class="pkg_regis_ d-inline-block">
                                            <input type="radio" id="drinking026" name="drinking-group">
                                            <label for="drinking026">Very Often</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-4">User photo</h2>
                        <!-- <div class="file_upload_regis my-4">
                            <input class="form-control" type="file" id="formFile">
                            <label>
                                <a href="javascript:;" class="btn-theme2">Choose file</a>
                                <h6>No File Choosen</h6>
                            </label>
                        </div> -->
                        <div class="file_upload_regis my-4">
                            <input class="form-control formFile position-absolute" type="file" accept="image/*"
                                multiple>
                            <label>
                                <a href="javascript:;" class="btn-theme2">Choose file</a>
                                <h6>No File Chosen</h6>
                            </label>
                        </div>
                        <div>
                            <ul class="imageList d-flex gap-3">
                                <!-- Placeholder for uploaded images -->
                            </ul>
                        </div>
                        <h2 class="pt-3">Term of use</h2>
                        <div class=" p-sm-3 term_use_regis d-flex justify-content-between">
                            <div class='custom-checkbox'>
                                <input type="checkbox">
                                <label for="">I agree with terms of use</label>
                            </div>
                            <a href="dashboard_sub_pkgs.php" class="button-container-2">
                                <span class="mas">Join<i class="fa-solid fa-arrow-right-long"></i></span>
                                <button type="button" name="Hover">Join<i
                                        class="fa-solid fa-arrow-right-long"></i></button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
?>
<script>
AOS.init({
    once: true,
});
</script>
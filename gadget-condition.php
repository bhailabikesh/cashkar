<!-- Header start -->
<?php include "./partials/header.php" ?>
<!-- Header end -->

<!-- Main content -->
<div class="gadget-detail">
    <div class="container">
        <div class="gadget-detail__wrapper">
             <div class="row">
                 <div class="col-xs-12 col-sm-4">
                    <img class="device-image img-responsive center-block" src="img/device1.png" alt="Apple iPhone XS Max">
                    
                    <hr>
                    <div class="gadget-detail__info">
                        <h3>Device Evaluation</h3>
                        
                        <div class="mt-2 gadget-detail__info--list">
                            <h3>Does Your Device Switch on Successfully?</h3>
                            <ul></ul>
                        </div> 
                        
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-8">
                     <div class="row">
                        <div class="col-sm-12 gadget-detail__wrapper--details">
                            <h6>Sell Old</h6>
                            <h1 class="device-name">Apple iPhone XS Max</h1>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-5 variant-title">Tell us a few things about your device!</h3>
                                    <form action="#" class="gadget-detail__wrapper--form">
                                        <div class="question__wrapper">
                                            <h6>Does Your Device Switch on Successfully?</h6>
                                            <div class="form-group">
                                                <div class="option">
                                                    <input class="radio" type="radio" id="yes" name="switch" value="yes">
                                                    <label for="yes">Yes</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">No</label>
                                                </div>
                                                <div class="mt-2 note">Note: If not. Please sell another product*</div>
                                            </div>
                                        </div>

                                        <div class="question__wrapper">
                                            <h6>Select Screen Condition</h6>
                                            <div class="form-group">
                                                <div class="option">
                                                    <input class="radio" type="radio" id="yes" name="switch" value="yes">
                                                    <label for="yes">Flawless Screen(Like New Screen)</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">Scratches On Screen (Visible Scratches On Screen)</label>
                                                </div>
                                                <div class="option">
                                                    <input class="radio" type="radio" id="yes" name="switch" value="yes">
                                                    <label for="yes">Cracked Screen (Crack On Screen/Broken Screen)</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">Faulty Screen (Lines/Spots/Blank Display/Non-Working Touch)</label>
                                                </div>
                                             </div>
                                        </div>

                                        <div class="question__wrapper">
                                            <h6>Select Device Functionality</h6>
                                            <div class="form-group">
                                                <div class="option">
                                                    <input class="radio" type="radio" id="yes" name="switch" value="yes">
                                                    <label for="yes">Fully Functional</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">Facing Issues</label>
                                                </div>
                                             </div>
                                        </div>

                                        <div class="question__wrapper">
                                            <h6>Select Device Functionality</h6>
                                            <div class="form-group">
                                                <div class="option">
                                                    <input type="checkbox" id="yes" name="switch" value="yes">
                                                    <label for="yes">Box</label>
                                                </div>
                                                <div class="option">
                                                    <input type="checkbox" id="no" name="switch" value="no">
                                                    <label for="no">Charger</label>
                                                </div>
                                                <div class="option">
                                                    <input type="checkbox" id="no" name="switch" value="no">
                                                    <label for="no">Earphone</label>
                                                </div>
                                                <div class="option">
                                                    <input type="checkbox" id="no" name="switch" value="no">
                                                    <label for="no">Bill</label>
                                                </div>
                                             </div>
                                        </div>
                                        <div class="question__wrapper">
                                            <h6>Select Overall Body Condition</h6>
                                            <div class="form-group">
                                                <div class="option">
                                                    <input class="radio" type="radio" id="yes" name="switch" value="yes">
                                                    <label for="yes">Good (Light Usage Signs/ Minor Scratches)</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">Average (Minor Dents/ Major Scratches)</label>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" id="no" name="switch" value="no">
                                                    <label for="no">Below Average(Major Dents/ Cracked Or Broken Panel)</label>
                                                </div>
                                             </div>
                                             <div class="mt-2 note"><input type="checkbox" class="mr-3">Check if back glass is broken*</div> 
                                        </div>
            
                                        <button class="px-5 py-2 mt-5 btn btn-primary" type="submit" data-toggle="modal" data-target="#staticBackdrop">Next</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Kindly Enter Your Phone Number.</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Your Phone Number:</h2>
                                                <label for="phone">Your Phone Number: </label>
                                                <input type="text" class="form-control" placeholder="+9881901910">
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/redesign-cashkar/listmobile.php">See All Brands</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>   
        </div>
    </div>
</div>
<!-- End of Main content -->

<!-- Footer start -->
<?php include "./partials/footer.php" ?>
<!-- Footer end -->
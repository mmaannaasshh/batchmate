<?php
// include("../_slide.php");

 ?>

 <style>
 .container-1{
   max-width: 800px;
   margin: auto;
   padding-top: 30px;
   padding-bottom: 60px;
 }


 </style>


<!--Form with header-->
<div class="container-1">
<div class="container-fluid my-4"

                    <form method="post" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-dark text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Enquiry</h3>
                                    <p class="m-0">Student Enquiry</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="example@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-mobile text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="mobile" placeholder="91+980000000" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Your Massage" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-dark btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
</div>

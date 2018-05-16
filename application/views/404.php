<!-- <div class="content-wrapper">    
    <section class="content-header">
      <h1>
        404
        <small>This is not the page you are looking forsdd</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="<?php //echo base_url() ?>assets/images/404.png" alt="Page Not Found Image" />
            </div>
        </div>
    </section>
</div> -->

<style>
.SetErrorMsg{text-align: center;font-size: 23px;font-weight: 700; margin-top:50px; padding: 8px;}
.SetError{left: 0; right: 0;  margin: 0 auto;  width: 60%;}
.SetMatterError{color:#fff;}
.SetError_p{    font-size: 113%;color: #fff;text-shadow: 1px 1px 1px #000000;}
h1{text-shadow: 1px 2px 2px #4a3333;}

body{background:url('<?php echo base_url()?>img/errorImg.png') top center;background-size:cover;background-attachment:fixed;background-color:#6a92a7}
</style>
<section style='min-height:90vh;'>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">             
                <div class="SetError">
                    <div  class="SetErrorMsg">
                            <div>
                                <img src="<?php echo base_url();?>img/oops2.png" style="height:250px;">
                            </div>
                            <div class="SetMatterError">
                                <h1>HMMM , SOMETHING'S NOT RIGHT  !?</h1>                               
                                <p class="SetError_p">The page you are looking for might have been removed, <br>
                                    had it's name changed, or is temporarily unavailable.</p>
                                <p class="SetError_p">Click <a href="<?=base_url()?>" >Here</a> to try our service.</p>
                            </div>                      
                    </div>
                </div>
            </div>          
        </div>
    </div>
</section>
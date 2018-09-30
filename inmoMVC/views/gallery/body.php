<section style="background: #ccc;"> 
    <article>
        <div class="container"> 
            <div class="row" style="height: 450px; display: table-cell;  vertical-align: middle;">
                <style>
                    .galleryPa1 {
                        width: 200px; 
                        padding: 10px;
                    }
                    .galleryImg1  {
                        width: 200px; 
                        padding: 10px;                        
                    }                    
                    .galleryPa1 h3 {
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px; 
                        font-weight: bold;
                        text-decoration: none;                                     
                        text-align: justify;   
                        text-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb; 
                    }
                    .galleryPa1  p { 
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 12px; 
                        text-decoration: none;                                     
                        text-align: left;   
                        text-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb;    
                    } 
                    .galleryImg1 img { 
                        position:relative;
                        width: 150%;
                        height: 150%; 
                         padding: 5px;
                        -moz-box-shadow: 
                            3px 3px 6px #777, 
                            3px 3px 6px #bbb;  
                        -webkit-box-shadow: 
                            3px 3px 6px #777, 
                            3px 3px 6px #bbb;  
                        box-shadow: 
                            3px 3px 6px #777, 
                            3px 3px 6px #bbb;                       
                    }
                </style>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="galleryPa1">
                        <h3>Casas y Countries</h3>
                    </div>
                    <?php echo GalleryController::getListAction(); ?>
                </div>
                <div class="col-sm-4"></div> 
            </div>
        </div>
    </article>
</section>
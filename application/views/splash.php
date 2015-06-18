<script>
    $(function(){
        $("#carousel").carousel();
    });
</script>
<div class="tile-container bg-orange">
        <div class="grid">
            <div class="row cells12">
                <div class="cell"></div>
                <div class="cell colspan10">
                    <div class="tile bg-red fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-cogs"></span>
                        </div>
                    </div>

                    <div class="tile bg-cyan fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-envelop"></span>
                            <span class="tile-label">Contactos</span>
                        </div>
                    </div>

                    <div class="tile-wide bg-orange fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-cloud"></span>
                            <span class="tile-label">Cloud service</span>
                        </div>
                    </div>

                    <div class="tile-wide bg-orange fg-white" data-role="tile">
                        <div class="tile-content image-set">
                            <img src="images/photos/image0.jpg">
                            <img src="images/photos/image1.jpg">
                            <img src="images/photos/image2.jpg">
                            <img src="images/photos/image1.jpg">
                            <img src="images/photos/image2.jpg">
                        </div>
                        <span class="tile-label">image-set</span>
                    </div>
                </div>
                <div class="cell"></div>
            </div>
            <!--row1-->

            <div class="row cells12">
                <div class="cell"></div>
                <div class="cell colspan10">
                    <a class="tile-large bg-orange fg-white" data-role="tile" href="<?=base_url()."information"?>">
                        <div class="tile-content">
                            <div class="image-container">
                                <div class="frame">
                                    <img src="images/photos/image2.jpg">
                                </div>
                                <div class="image-overlay op-green">
                                    <h2>Terapias</h2>
                                    <p>
                                        Fonoaudiologia <br>
                                        Fisitoreapia <br>
                                        Estimulacion Temprana <br>
                                        Indeoendencia del Hogar <br>
                                    </p>
                                </div>
                            </div>
                            <div class="tile-label">Terapias</div>
                        </div>
                    </a>


                    <div class="tile-wide bg-orange fg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-controls="false" data-markers="true" id="carousel">
                                <div class="slide"><img src="<?=base_url()."images/photos/image0.jpg"?>">
                                </div>
                                <div class="slide"><img src="<?=base_url()."images/photos/image1.jpg"?>">
                                </div>
                                <div class="slide"><img src="<?=base_url()."images/photos/image2.jpg"?>">
                                </div>
                            </div>
                            <div class="tile-label">Carousel</div>
                        </div>
                    </div>

                    <div class="tile-large fg-white" data-role="tile">
                        <div class="tile-content slide-up">
                            <div class="slide">
                                <img src="images/photos/image3.jpg" data-role="fitImage" data-format="square">
                            </div>
                            <div class="slide-over op-cyan text-small padding10">
                                Antecedentes
                            </div>
                            <div class="tile-label">Resena Historica</div>
                        </div>
                    </div>

                    <div class="tile-large fg-white" data-role="tile">
                        <div class="tile-content slide-up">
                            <div class="slide">
                                <img src="images/photos/image5.jpg" data-role="fitImage" data-format="square">
                            </div>
                            <div class="slide-over op-cyan text-small padding10">
                                Antecedentes
                            </div>
                            <div class="tile-label">Resena Historica</div>
                        </div>
                    </div>

                </div>
                <div class="cell"></div>
            </div>
            <div class="row cells12">
                <div class="cell"></div>
                <div class="cell colspan10">
                    <div class="tile-wide fg-white" data-role="tile">
                        <div class="tile-content slide-up">
                            <div class="slide">
                                <img src="images/3.jpg" data-role="fitImage" data-format="hd">
                            </div>
                            <div class="slide-over op-orange text-small padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="tile-label">slide-up</div>
                        </div>
                    </div>

                    <div class="tile-wide fg-white" data-role="tile">
                        <div class="tile-content slide-up-2">
                            <div class="slide">
                                <img src="images/3.jpg" data-role="fitImage" data-format="fill">
                            </div>
                            <div class="slide-over bg-orange text-small padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="tile-label">slide-up-2</div>
                        </div>
                    </div>

                    <div class="tile fg-white" data-role="tile">
                        <div class="tile-content slide-down">
                            <div class="slide">
                                <img src="images/4.jpg" data-role="fitImage" data-format="square">
                            </div>
                            <div class="slide-over op-cyan text-small padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="tile-label">slide-down</div>
                        </div>
                    </div>


                </div>
                <div class="cell"></div>
            </div>
         </div>
    </div>

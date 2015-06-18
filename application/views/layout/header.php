<div style="height:50px; width:100%; border:0px solid #000;" class="ui-widget">
    <div class="app-bar">
        <a class="app-bar-element branding" href="<?=base_url().'home'?>"><span id="toggle-tiles-dropdown2" class="mif-home mif-2x"></span></a>

        <span class="app-bar-divider"></span>
        <a class="app-bar-element branding" href="<?=base_url().'info/main'?>">ASDC</a>
        <ul class="app-bar-menu">
<!--            <li><a href="<?=base_url().'player'?>"><span class="mif-users fg-amber"></span> Reseña Histórica</a>
            </li>-->
            <li>
                <a href="" class="dropdown-toggle"><span class="mif-enter fg-amber"></span> Reseña Histórica</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="<?=base_url().'info/antecedentes'?>">Antecendentes</a>
                    </li>
                    <li><a href="<?=base_url().'info/mision'?>">Mision</a>
                    </li>
                    <li><a href="<?=base_url().'info/vision'?>">Vision</a>
                    </li>
                    <li><a href="<?=base_url().'info/objectivo'?>">Objectivo</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle"><span class="mif-cabinet fg-amber"></span> Terapias</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="<?=base_url().'info/fonoaudio'?>">Fonoaudiología</a>
                    </li>
                    <li><a href="<?=base_url().'info/fisioterapia'?>">Fisioterapia</a>
                    </li>
                    <li><a href="<?=base_url().'info/visual'?>">Estimulación Visual</a>
                    </li>
                    <li><a href="<?=base_url().'info/hogar'?>">Independencia del Hogar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle"><span class="mif-contacts-dialer fg-amber"></span> Contáctos</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="<?=base_url().'info/direccion'?>">Dirección</a>
                    </li>
                    <li><a href="<?=base_url().'info/mesa'?>">Mesa Directiva</a>
                    </li>
                    <li><a href="<?=base_url().'info/terapeutas'?>">Terapeutas</a>
                    </li>
                </ul>
            </li>
        </ul>
        <span class="app-bar-pull"></span>
    </div>
</div>

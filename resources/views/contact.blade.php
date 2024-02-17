@extends('base')

@section('page_title', 'Contact')

@section('content')
    <h2> Contact </h2>
    <hr>
<section class="contact" id="contact">
        <h3>Ocnamo</h3>

          <span>5 rue Boulevard Louis XIV</span>
            <span>59800 Lille France</span>
          <br>  
          <br>

        <a href="tel:+33320556179">
            <span class="text">0612122020</span>
            <span class="icon">
            <i class="ic ic-phone"></i></span> </a>

        <div class="infohoraire">
            <ul>
                <li>
                    <span class="Jours">Lundi</span>
                    <span class="heures">
                        12:00-14:30 / 19:00-22:00
                    </span>
                    </li>
                <li>
                    <span class="Jours">Mardi</span>
                    <span class="heures">Fermé
                    </span>
                </li>
                <li>
                    <span class="Jours">Mercredi</span>
                    <span class="heures"> Fermé
                    </span>
                </li>
                <li>
                    <span class="Jours">Jeudi</span>
                    <span class="heures">
                        12:00-14:30 / 18:30-22:00
                    </span>
                </li>
                <li>
                    <span class="Jours">Vendredi</span>
                    <span class="heures">
                        12:00-14:30 / 18:30-23:00
                    </span>
                </li>
                <li>
                    <span class="Jours">Samedi</span>
                    <span class="heures">
                        12:00-15:00 / 18:00-23:00
                    </span>
                </li>
                <li>
                    <span class="Jours">Dimanche</span>
                    <span class="heures">
                        12:00-15:00
                    </span>
                </li>
            </ul>
        </div>

        {{-- <div class="social-networks">
             <a href="https://www.facebook.com/tablen9uf" target="_blank" title="Facebook">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://instagram.com/tablen9uf?igshid=YmMyMTA2M2Y=" target="_blank" title="Instagram">
                <i class="fa-brands fa-instagram"></i> --}}
        </a>
        </div>
    <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9155085815955!2d3.067824012181228!3d50.62868637439592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1701958548689!5m2!1sfr!2sfr"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection

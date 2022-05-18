<section class="resume-section" id="awards">
    <div class="resume-section-content">
        <h2 class="mb-3 text-primary">Awards & Certifications</h2>
        <ul class="fa-ul mb-0">
            @foreach ($awards as $award)
            <li>
                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                <a href="{{$award->certificate_link}}" style="text-decoration: none">{{$award->certificate_name}}</a>-{{$award->certificate_provider}}
            </li>
            @endforeach
        </ul>
    </div>
</section>
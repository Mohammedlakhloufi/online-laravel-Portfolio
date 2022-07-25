<section class="resume-section" id="interests">
    <div class="resume-section-content">
        <h2 class="mb-4 text-primary">Interests</h2>
        @foreach ($interests as $interest)

        <p>{{$interest->content}}</p> 
        
        @endforeach
        
        </div>
</section>
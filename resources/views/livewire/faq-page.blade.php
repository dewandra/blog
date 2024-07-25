<main>
    <section class="section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
              <div class="section-title text-center">
                <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                <h1>Frequently Asked Questions</h1>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="accordion accordion-border-bottom" id="accordionFAQ">
                @php
                    $c=1;
                @endphp
                @foreach ($faq as $f)
                <div class="accordion-item">
                  <h2 class="accordion-header accordion-button h5 border-0 active"
                    id="heading-{{ $c }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-{{ $c }}" aria-expanded="true"
                    aria-controls="collapse-{{ $c }}">
                    {{ $f->question }} 
                  </h2>
                  <div id="collapse-{{ $c }}"
                    class="accordion-collapse collapse border-0"
                    aria-labelledby="heading-{{ $c }}" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">{!! $f->answer !!}</div>
                  </div>
                </div>
                @php
                    $c++;
                @endphp
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
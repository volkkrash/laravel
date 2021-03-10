

<!-- Contact Info Start -->
@if($companyData)
<div class="contact-info">{{ $companyData->company_address ?? '' }} <br> <a href="tel:{{ $companyData->company_phone }}">{{ $companyData->company_phone ?? '' }}</a> <br> <a href="mailto:{{ $companyData->company_email }}">{{ $companyData->company_email ?? '' }}</a></div>
@endif
<!-- Contact Info End -->

<!-- Footer Social Icons Start -->
@if($socialsData)
  <ul class="footer-social-icons social-media-link justify-content-center">

        @foreach($socialsData as $socialItem)
        <li><a href="{{ $socialItem->link }}" class=""><img height="20px" src="{{ asset("uploads/{$socialItem->icon}") }}" alt=""></a></li>
        @endforeach
      

      <!-- <li><a href="#" class="icofont-facebook"></a></li>
      <li><a href="#" class="icofont-twitter"></a></li>
      <li><a href="#" class="icofont-google-plus"></a></li>
      <li><a href="#" class="icofont-linkedin"></a></li>
      <li><a href="#" class="icofont-rss"></a></li>
      <li><a href="#" class="icofont-dribbble"></a></li> -->
  </ul>
@endif
<!-- Footer Social Icons End -->
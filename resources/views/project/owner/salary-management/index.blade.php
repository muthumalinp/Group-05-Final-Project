@extends('layouts.owner_forms')
@extends('layouts.owner_nav')

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Salon Yaraa Salary Management</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/salary-management.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>

    @section('content')
   <body class="full-container">
  
<div class="container-block container">
  <p class="text-blk team-head-text">
    Our Team
  </p>
  <div class="responsive-container-block teamcard-container">
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <a href="{{ route('project.owner.service.index') }}">
          <img class="team-img" src="{{ asset('css/Owner/owner_profile_image.jpeg') }}" alt="Owner Profile Image">
          </a>
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="css/Owner/owner_profile_image.jpeg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="css/Owner/owner_profile_image.jpeg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="css/Owner/owner_profile_image.jpeg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="css/Owner/owner_profile_image.jpeg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft14.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft12.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft13.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft14.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft12.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft13.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
      <div class="team-card">
        <div class="team-img-wrapper">
          <img class="team-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft14.svg">
        </div>
        <div class="team-card-content">
          <p class="text-blk name">
            Roger Lubin
          </p>
          <p class="text-blk position">
            CEO
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
   </body>
</html>


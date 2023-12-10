@extends('layouts.owner_sidebar')

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Salary Management</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/salary-management.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
  </head>

  <body>
    @section('cont')
    <h2>Manage salary</h2>
    <div class="cards">
    <div class="container-block container1">
      <p class="text-blk team-head-text">
          Our Team
      </p>
      <br/><br/>
      <div class="responsive-container-block teamcard-container">
        <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
          <div class="team-card">
            <div class="team-img-wrapper">
              <a href="{{url('/viewemployee_salary') }}">
                <img class="team-img" src="{{ asset('css/Owner/owner_profile_image.jpeg') }}" alt="Owner Profile Image">
              </a>
            </div>
            <div class="team-card-content">
              <p class="text-blk name">
                Yaraa De Silva
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
                Shyalika Laknali
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
                 Yashika Kodikara
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
                Nilupa Jayarathna
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
                Subash jasinghe
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
                Pilip Kaizer 
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
                Chandimal
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
              Chandimal
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
              Chandimal
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
              Chandimal
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
              Chandimal
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
              Chandimal
              </p>
              <p class="text-blk position">
                CEO
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    @endsection
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Dema Uninus</title>
  <link rel="icon" href="favicon.ico"><link href="{{ asset('frontend/style.css') }}" rel="stylesheet"></head>
  <body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >

  @include('frontend.partials.navbar')
  @yield('content')
  @include('frontend.partials.footer')
  @include('frontend.partials.backToTop')

  <script>
    //  Pricing Table
    const setup = () => {
      return {
        isNavOpen: false,

        billPlan: 'monthly',

        plans: [
          {
            name: 'Starter',
            price: {
              monthly: 29,
              annually: 29 * 12 - 199,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
          {
            name: 'Growth Plan',
            price: {
              monthly: 59,
              annually: 59 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
          {
            name: 'Business',
            price: {
              monthly: 139,
              annually: 139 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
        ],
      };
    };
  </script>
<script defer src="{{ asset('frontend/bundle.js') }}"></script></body>
</html>
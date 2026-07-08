@extends('layouts.app')

{{-- Section order follows the shared landing blueprint
     (riviera-residencial/app/docs/landing-page-structure.md):
     identity → project → amenity tease band → product → aspiracional
     → availability → community amenities → location → gallery proof
     → conversion form → final CTA. --}}
@section('content')
    @include('partials.hero')
    @include('partials.esencia')
    @include('partials.casa-club')
    @include('partials.residencias')
    @include('partials.aspiracional')
    @include('partials.disponibilidad')
    @include('partials.amenidades')
    @include('partials.ubicacion')
    @include('partials.galeria')
    @include('partials.contacto')
    @include('partials.cta-final')
@endsection

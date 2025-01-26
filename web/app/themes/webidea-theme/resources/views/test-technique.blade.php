@extends('layouts.app')

@section('content')

<!-- SECTION HERO -->
<section class="section-hero">
    <img class="hero-bg" src="@asset('images/hero-bg-2x.jpg')" alt="hero bg" width="1920"
        srcset="@asset('images/hero-bg-1x.jpg') 1x, @asset('images/hero-bg-2x.jpg') 2x">
    <div class="row">
        @include('components.header')

    </div>
    <div class="row">
        <div class="container">
            <div class="section-hero__content">
                <h1 class="section-hero__title">Test d’intégration d’un site internet pour un <span class="bold">poste
                        de développeur</span>.</h1>
                <p class="section-hero__subtitle">
                    Réalisez ce test d’intégration web pour évaluer vos compétences et tentez de rejoindre l’équipe Web
                    Idea !
                </p>
            </div>
        </div>
    </div>
    <div class="row section-hero__scroll-row">
        <div class="container">
            <div class="section-hero__scroll-wrapper">
                <div class="section-hero__scroll-line"></div>
                <div class="section-hero__scroll-text">Faites défiler</div>
            </div>
        </div>
    </div>

</section>

<!-- SECTION SERVICES -->

<section class="section-services">

    <!-- SERVICE 1 -->
    <div class="row">
        <div class="container">
            <div class="section-services__service">
                <div class="section-services__content">
                    <span class="surtitle section-services__surtitle">Nisi nec velit</span>
                    <h2 class="section-services__title">Nullam pulvinar felis at metus malesuada</h2>
                    <p class="section-services__text">Pellentesque tincidunt tristique neque, eget venenatis enim
                        gravida quis. Fusce at egestas
                        libero. Cras convallis
                        egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa
                        dui. Morbi et purus
                        velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla
                        tortor quam quis dolor.
                        Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.</p>
                    <div class="btn-link section-services__button">Découvrez le service</div>
                </div>
                <div class="section-services__content section-services__content-2">
                    <img src="@asset('images/serivce-1-2x.jpg')" alt="service" loading="lazy" width="737" height="488"
                        srcset="@asset('images/serivce-1-1x.jpg') 1x, @asset('images/serivce-1-2x.jpg') 2x">
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICE 2 -->

    <div class="row">
        <div class="container">
            <div class="section-services__service-2">
                <div class="section-services__content section-services__content-3">
                    <span class="surtitle section-services__surtitle">Bibendum curabitur magna</span>
                    <h2 class="section-services__title">Aenean sed nibh a magna posuere</h2>
                    <p class="section-services__text">Maecenas interdum lorem eleifend orci aliquam mollis aliquam non
                        rhoncus magna :</p>
                    <ul class="section-services__list">
                        <li>Suscipit libero</li>
                        <li>Duis et risus accumsan sem tempus porta nec sit amet est</li>
                        <li>Libero adipiscing</li>
                    </ul>
                    <div class="btn-link section-services__button">Découvrez le service</div>
                </div>
                <div class="section-services__content section-services__content-4">
                    <img class="section-services__img-bg" src="@asset('images/bg-img-2x.jpg')" alt="bg-image"
                        loading="lazy" width="383" height="506"
                        srcset="@asset('images/bg-img-1x.jpg') 1x, @asset('images/bg-img-2x.jpg') 2x">
                    <img class="section-services__pc" src="@asset('images/pc-2x.png')" alt="bg-image" loading="lazy"
                        width="599" height="507" srcset="@asset('images/pc-1x.png') 1x, @asset('images/pc-2x.png') 2x">
                </div>
            </div>
        </div>
    </div>


</section>

<!-- SECTION SLIDER -->

<section class="section-slider">

    <!--  CONTENT -->
    <div class="row">
        <div class="container">
            <div class="section-slider__wrapper">
                <div class="content section-slider__content">
                    <span class="surtitle surtitle section-slider__surtitle">Massa metus proin</span>
                    <h2 class="title section-slider__title">Dolor imperdiet</h2>
                    <p class="text section-slider__text">Phasellus risus turpis, pretium sit amet magna non, molestie
                        ultricies enim.
                        Nullam pulvinar felis at metus malesuada.</p>
                </div>
                <div class="section-slider__navigation">
                    <div class="section-slider__prev-btn">
                        <img src="@asset('images/arrow.svg')" alt="logo" width="24" height="24" loading="lazy">
                    </div>
                    <div class="section-slider__next-btn">
                        <img src="@asset('images/arrow.svg')" alt="logo" width="24" height="24" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  SLIDER -->
    <div class="row">
        <div class="container">
            @include('components.slider')
        </div>
    </div>
</section>

<!-- SECTION FORMULAIRE -->

<section class="section-form">
    <div class="row">
        <div class="container">
            <div class="section-form__wrapper">
                <div class="content section-form__content">
                    <span class="surtitle section-form__surtitle">Sodales aliquam</span>
                    <h2 class="title section-form__title">Odio mauris diam</h2>
                    <p class="text section-form__text">Phasellus risus turpis, pretium sit amet magna non, molestie
                        ultricies enim. Nullam pulvinar felis at metus malesuada.</p>
                </div>
                <div class="section-form__form">
                    <div class="section-form__form-wrapper">
                        <div class="input-form">
                            <label for="lastname">Nom</label>
                            <input type="text" name="lastname" placeholder="Kelm">
                        </div>
                    </div>
                    <div class="section-form__form-wrapper">
                        <div class="input-form">
                            <label for="name">Prénom</label>
                            <input type="text" name="name" placeholder="Benjamin">
                        </div>
                    </div>
                    <div class="section-form__form-wrapper">
                        <div class="input-form">
                            <label for="mail">Adresse mail</label>
                            <input type="email" name="mail" placeholder="k.benjamin@exemple.fr">
                        </div>
                    </div>
                    <div class="section-form__form-wrapper">
                        <div class="input-form">
                            <label for="tel">Téléphone <span>(facultatif)</span></label>
                            <input type="tel" name="tel" placeholder="+330000000">
                        </div>
                    </div>
                    <hr>
                    <div class="section-form__form-wrapper">
                        <div class="select-form">
                            <label for="topic">Sujet</label>
                            <select name="topic">
                                <option value="" disabled selected>Choisissez un sujet</option>
                                <option value="value-1">Option 1</option>
                                <option value="value-2">Option 2</option>
                                <option value="value-3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-form__form-wrapper-full">
                        <div class="textarea-form">
                            <label for="message">Message</label>
                            <textarea name="message" cols="30" rows="10"></textarea>
                        </div>

                        <div class="checkbox-form">
                            <label for="check">
                                <input type="checkbox" name="check" id="check">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis risus mi. Ut
                                    placerat
                                    quam lectus. Curabitur dictum
                                    velit non lacus ornare tempor.
                                </span>
                            </label>
                        </div>
                        <div class="btn-primary section-form__submit">Envoyer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include(' components.footer') @endsection

<div class="overlay"></div>
@extends('common.master')

@section('content')
    <div class="columns" style="margin: 50px">
        <div class="column is-12 has-text-centered"><h1 class="title is-1">Contact Us</h1></div>
    </div>

    <section class="section" style="padding: 24px">
        <div class="container">
            <div class="columns">
                <div class="card" style="margin-left: 250px">
                    <div class="card-content">
                        <div class="content" style="margin: 50px">

                            <span class="icon-text">
                                <span class="icon is-large mb-4">
                                    <i class="fas fa-2x fa-user"></i>
                                </span>
                                <span class="is-size-4">Joeri Versluis</span>
                            </span>

                            <br>

                            <span class="icon-text">
                                <span class="icon is-large mb-4">
                                    <i class="fas fa-2x fa-phone"></i>
                                </span>
                                <span class="is-size-4 is-spaced">06-123-456-78</span>
                            </span>

                            <br>

                            <span class="icon-text">
                                <span class="icon is-large mb-6">
                                    <i class="fas fa-2x fa-at"></i>
                                </span>
                                <span class="is-size-4">joeriversluis@hz.nl</span>
                            </span>

                            <br>

                            <a href="https://www.linkedin.com/">
                            <span class="icon-text">
                                <span class="icon is-large">
                                    <i class="fab fa-2x fa-linkedin"></i>
                                </span>
                            </span>
                            </a>

                        </div>
                    </div>
                </div>

                <section class="hero  is-medium  is-bold">
                    <div class="header-img columns">
                        <div class="column">
                            <img style="height: 360px; width: 360px; margin: 10px 50px 50px 180px;" src="./image/contact.png" />
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>

@endsection

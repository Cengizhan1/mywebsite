@extends('layout')

@section('content')
    <div class="container">
        <!-- Video Modal Start -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white"
                        style="-webkit-text-stroke: 1px #dee2e6;">{!! __('home.about.about') !!}</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{!! __('home.about.aboutMe') !!}</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid rounded w-100" src="img/about.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <h3 class="mb-4">{!! __('home.about.title') !!}</h3>
                        {!! __('home.about.content') !!}
                        <div class="row mb-3">
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.nameKey') !!} <span
                                        class="text-secondary">{!! __('home.about.name') !!}</span>
                                </h6></div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.birthdayKey') !!} <span
                                        class="text-secondary">{!! __('home.about.birthday') !!}</span>
                                </h6>
                            </div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.degreeKey') !!} <span
                                        class="text-secondary">{!! __('home.about.degree') !!}</span>
                                </h6>
                            </div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.experienceKey') !!} <span
                                        class="text-secondary">{!! __('home.about.experience') !!}</span></h6>
                            </div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.emailKey') !!} <span
                                        class="text-secondary">{!! __('home.about.email') !!}</span>
                                </h6></div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.addressKey') !!} <span
                                        class="text-secondary">{!! __('home.about.address') !!}</span></h6>
                            </div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.github') !!} <span
                                        class="text-secondary">{!! __('home.about.githubUrl') !!}</span></h6>
                            </div>
                            <div class="col-sm-6 py-2"><h6>{!! __('home.about.linkedin') !!} <span
                                        class="text-secondary">{!! __('home.about.linkedinUrl') !!}</span></h6>
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-primary mr-4">{!! __('home.about.hireMe') !!}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Qualification Start -->
        <div class="container-fluid py-5" id="qualification">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">
                        {{ __('home.qualification.title') }}</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{!! __('home.qualification.subTitle') !!}</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-4">{{ __('home.qualification.education') }}</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.school1') }}</h5>
                                <p class="mb-2"><strong>{{ __('home.qualification.department1') }}</strong> | <small>{{ __('home.qualification.year1') }}</small></p>
                            </div>
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.school2') }}</h5>
                                <p class="mb-2"><strong>{{ __('home.qualification.department2') }}</strong> | <small>{{ __('home.qualification.year2') }}</small></p>
                            </div>
                        </div>
                        <h3 class="mb-4">{{ __('home.qualification.sports') }}</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.sport1') }}</h5>
                                <p class="mb-2"><small>{{ __('home.qualification.year3') }}</small></p>
                            </div>
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.sport2') }}</h5>
                                <p class="mb-2"><small>{{ __('home.qualification.year4') }}</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">{{ __('home.qualification.experience') }}</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.job1Title') }}</h5>
                                <p class="mb-2"><strong>{{ __('home.qualification.job1Company') }}</strong> | <small>{{ __('home.qualification.job1Date') }}</small></p>
                                <p>
                                    {!! __('home.qualification.job1Description') !!}
                                </p>
                            </div>
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                   style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1">{{ __('home.qualification.job2Title') }}</h5>
                                <p class="mb-2"><strong>{{ __('home.qualification.job2Company') }}</strong> | <small>{{ __('home.qualification.job2Date') }}</small></p>
                                <p>
                                    {!! __('home.qualification.job2Description') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qualification End -->


        <!-- Skill Start -->
        <div class="container-fluid py-5" id="skill">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">
                        {!! __('home.skills.title') !!}</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{!! __('home.skills.mySkills') !!}</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.java.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{!! __('home.skills.java.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.phpLaravel.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{!! __('home.skills.phpLaravel.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.docker.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{!! __('home.skills.docker.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.postman.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="{!! __('home.skills.postman.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.springBoot.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{!! __('home.skills.springBoot.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.hibernate.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="{!! __('home.skills.hibernate.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.springSecurity.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{!! __('home.skills.springSecurity.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{!! __('home.skills.git.name') !!}</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{!! __('home.skills.git.progress') !!}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skill End -->

        <!-- Blog Start -->
        <div class="container-fluid pt-5" id="blog">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{!! __('home.blog.blog') !!}</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{!! __('home.blog.latestBlog') !!}</h1>
                </div>

                <div class="row">
                    @include('partials.blog',['blogs' => \App\Models\Blog::all()])
                </div>
            </div>
            <a href="{{ route('blogs.index') }}" class="btn btn-primary">
                {!! __('page.blog.index.button2') !!}
            </a>
        </div>
        <!-- Blog End -->
        <!-- Contact Start -->
{{--        <div class="container-fluid py-5" id="contact">--}}
{{--            <div class="container">--}}
{{--                <div class="position-relative d-flex align-items-center justify-content-center">--}}
{{--                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">--}}
{{--                        Contact</h1>--}}
{{--                    <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-8">--}}
{{--                        <div class="contact-form text-center">--}}
{{--                            <div id="success"></div>--}}
{{--                            <form name="sentMessage" id="contactForm" novalidate="novalidate">--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="control-group col-sm-6">--}}
{{--                                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name"--}}
{{--                                               required="required"--}}
{{--                                               data-validation-required-message="Please enter your name"/>--}}
{{--                                        <p class="help-block text-danger"></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="control-group col-sm-6">--}}
{{--                                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email"--}}
{{--                                               required="required"--}}
{{--                                               data-validation-required-message="Please enter your email"/>--}}
{{--                                        <p class="help-block text-danger"></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="control-group">--}}
{{--                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject"--}}
{{--                                           required="required"--}}
{{--                                           data-validation-required-message="Please enter a subject"/>--}}
{{--                                    <p class="help-block text-danger"></p>--}}
{{--                                </div>--}}
{{--                                <div class="control-group">--}}
{{--                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"--}}
{{--                                          required="required"--}}
{{--                                          data-validation-required-message="Please enter your message"></textarea>--}}
{{--                                    <p class="help-block text-danger"></p>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send--}}
{{--                                        Message--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Contact End -->
    </div>
@endsection

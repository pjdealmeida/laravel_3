<!-- ./Team -->
<section class="section bg-light">
    <div class="container bring-to-front pt-0 pb-5">
        <div class="section-heading text-center">
            <h2>Get to know our team</h2>
            <p class="lead text-secondary">These amazing people have made possible to stay where we are</p>
        </div>
        <!-- sm: 576px, md: 768px,-->
        <div class="swiper-container pb-5" data-sw-centered-slides="false" data-sw-show-items="2"
            data-sw-space-between="30"
            data-sw-breakpoints='{"576": {"slidesPerView": 1, "spaceBetween": 10, "slidesPerGroup": 1}}'>
            <div class="swiper-wrapper">
                {% set team = [
                    { name: "Rafael Freeman", position: "Founder & CEO", quote: "Long time ago, this guy started it all." },
                    { name: "Aline De Souza", position: "Marketing Director", quote: "The girl that influences our products." },
                    { name: "Jayden Gardner", position: "Account Manager", quote: "Keeps all the numbers in place." },
                    { name: "Jacobi Edwards", position: "VP of Sales", quote: "The man that leads the Global Sales team." },
                    { name: "Allison Fernandez", position: "Client Support", quote: "Need any assistance with the product?" },
                    { name: "Richard Smith", position: "Lead Developer", quote: "Geek, manager, and manager of geeks." }
                ] %}
                {% for member in team %}
                <div class="swiper-slide">
                    <div class="card shadow">
                        <div class="container-fluid py-0">
                            <div class="row">
                                <div class="col-md-5 py-9 py-sm-7 overlay overlay-dark alpha-2 image-background cover center-top"
                                    style="background-image: url({{ baseUrl.path }}img/avatar/team/{{ loop.index }}.jpg)">
                                </div>
                                <div class="col-md-7">
                                    <div class="p-4">
                                        <h6 class="bold font-l">{{ member.name }}</h6>
                                        <p class="small mt-0 text-primary text-uppercase mb-5">{{ member.position }}</p>

                                        <blockquote class="team-quote pt-1">
                                            <i class="quote fas fa-quote-left"></i>
                                            <p class="italic ps-4">{{ member.quote }}</p>
                                        </blockquote>

                                        <hr class="w-25 mt-5">
                                        <nav class="nav">
                                            <a href="javascript:;" class="nav-item nav-link pb-0">
                                                <i class="fab fa-facebook text-secondary"></i>
                                            </a>
                                            <a href="javascript:;" class="nav-item nav-link pb-0">
                                                <i class="fab fa-twitter text-secondary"></i>
                                            </a>
                                            <a href="javascript:;" class="nav-item nav-link pb-0">
                                                <i class="fab fa-dribbble text-secondary"></i>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
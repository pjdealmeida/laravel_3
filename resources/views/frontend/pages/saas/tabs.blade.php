<!-- ./Every thing you need - Tabs -->
<x-utils.container class="section">
    <div class="section-heading text-center">
        <h2 class="bold">Everything you need - all in one theme</h2>
    </div>

    <nav class="slide nav nav-tabs nav-outlined nav-rounded justify-content-around justify-content-md-center mb-5">
        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#dashboard-tab">Dashboard</a>
        <a class="nav-item nav-link" data-bs-toggle="tab" href="#tasks-tab">Invoicing</a>
        <a class="nav-item nav-link" data-bs-toggle="tab" href="#calendar-tab">Calendar</a>
        <a class="nav-item nav-link" data-bs-toggle="tab" href="#inbox-tab">Inbox</a>
    </nav>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="dashboard-tab">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 @rtl ms-md-auto @else me-md-auto @endrtl">
                    <div class="browser shadow" data-aos="@rtl fade-start @else fade-end @endrtl">
                        <img src="{{ asset("img/screens/dash/4.png") }}" class="img-responsive" alt="">
                    </div>
                </div>

                <div class="col-md-5 @rtl text-end @endrtl">
                    <p class="rounded-pill py-2 px-4 bold badge badge-info">New feature</p>
                    <h2 class="display-4 light">Dashboard</h2>
                    <p>When buying Dashcore you will get right in your hand a powerful tool to boost your design.
                        You will get not just a template but a complete ready-to-use HTML code snippets to start
                        right away with your project.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tasks-tab">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 order-md-2 @rtl me-md-auto @else ms-md-auto @endrtl">
                    <div class="browser shadow" data-aos="@rtl fade-end @else fade-start @endrtl">
                        <img src="{{ asset("img/screens/dash/3.png") }}" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="col-md-5 @rtl ms-md-auto text-end @else me-md-auto @endrtl">
                    <h2 class="display-4 light">Invoicing</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime numquam
                        perspiciatis saepe totam.</p>

                    <hr class="mt-5">
                    <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium aspernatur atque dolor dolorem ea esse expedita hic iste laboriosam libero nihil
                        nostrum obcaecati, odio qui reprehenderit sint vel veniam voluptatibus.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="calendar-tab">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 @rtl ms-md-auto @else me-md-auto @endrtl position-relative">
                    <div class="browser shadow-box" data-aos="@rtl fade-start @else fade-end @endrtl">
                        <img src="{{ asset("img/screens/dash/2.png") }}" alt="" class="img-responsive">
                    </div>

                    <img src="{{ asset("img/screens/dash/2.1.png") }}" alt=""
                        class="absolute img-responsive shadow rounded" style="right: 0; top: 0">
                </div>

                <div class="col-md-5 @rtl text-end @endrtl">
                    <h2 class="display-4 light">Calendar</h2>
                    <p class="lead text-secondary">Calendar plugin included and beautified</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque cum, delectus dicta
                        doloribus enim fuga hic itaque modi nobis pariatur porro quasi ratione repellat sint veniam
                        veritatis voluptas voluptates.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="inbox-tab">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 order-md-2 @rtl me-md-auto @else ms-md-auto @endrtl">
                    <div class="browser shadow" data-aos="@rtl fade-end @else fade-start @endrtl">
                        <img src="{{ asset("img/screens/dash/1.png") }}" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="col-md-5 @rtl text-end @endrtl">
                    <p class="rounded-pill py-2 px-4 bold badge badge-info">Outstanding</p>
                    <h2 class="display-4 light">Inbox</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, accusantium
                        aliquid dolore dolorem excepturi exercitationem fugiat incidunt iure nesciunt nihil non
                        numquam perferendis quaerat quisquam rem saepe sunt temporibus.</p>
                </div>
            </div>
        </div>
    </div>
</x-utils.container>

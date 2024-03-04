@extends('LayoutClient.index')
@section('title')
    Home
@endsection
@section('contents')
    <div class="container">
        <div class="row row-cols-2 ">
            {{-- begin navbar --}}
            <div class="col-3 bg-primary">
                <nav class="nav flex-column bg-primary">
                    <a class="nav-link text-white" aria-current="page" href="#">Active</a>
                    <a class="nav-link text-white" href="#">Link</a>
                    <a class="nav-link text-white" href="#">Link</a>
                </nav>
            </div>
            {{-- end navbar --}}

            <div class="col-9">
                {{-- begin carousel by slider --}}
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsaxxNGANPVpC46sQLnO3P14WSShTdGVcLhA&usqp=CAU=65E78030"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt4UVYcJye4sJL8kVHoiWFQuyasJ49rITF0w&usqp=CAU"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJBe67hDXzPyUNrZWrGOQYzcACK2cH_o4soQ&usqp=CAU"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-black bg-black" aria-hidden="true"></span>
                        <span class="visually-hidden bg-black">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon text-black bg-black" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- end carousel by slider --}}

                {{-- begin Product feauted --}}

                <div class="container mt-5">
                    <h5>SẢN PHẨM NỔI BẬT</h5>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-2 row-cols-xl-4">
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/430869488_7173041339469591_130132828012571934_n.jpg?stp=dst-jpg_s640x640&_nc_cat=104&ccb=1-7&_nc_sid=c42490&_nc_ohc=UR-iu_SpOs4AX8ysM1q&_nc_ht=scontent.fdad3-4.fna&oh=00_AfA9gDdiJRFLuZiT_-eB9PIqo4qY3SlvOVOn7b3HFO2kLw&oe=65E7F61C"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/430901251_10231273819125687_4867357176627735653_n.jpg?stp=dst-jpg_p526x296&_nc_cat=107&ccb=1-7&_nc_sid=c42490&_nc_ohc=eLzZtmuuWrQAX8KiOJr&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAZABqTaqMwnwRb2NT4VgC5g5laCX6jVz5coP1Ey6BCFg&oe=65E92AE5"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/430178146_122148640562074297_3335695384804709994_n.jpg?stp=dst-jpg_p526x296&_nc_cat=1&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=I63egtuSausAX-lQdin&_nc_ht=scontent.fdad3-5.fna&oh=00_AfBxgUx-KJE2xs39GLC18E0fz0ae3Gvk8KJnA4QivFu-_A&oe=65E8D856"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/417543254_3691257187809568_7484268223022899917_n.jpg?stp=dst-jpg_p180x540&_nc_cat=101&ccb=1-7&_nc_sid=c42490&_nc_ohc=-tULh5lZUuAAX8zsOeE&_nc_ht=scontent.fdad3-4.fna&oh=00_AfC3twpe9qU6O736gcVtaEUZb6CUR90TesesMjrdRjvVmA&oe=65E87B33"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end Product feauted --}}

                {{-- begin new producrt  --}}
                <div class="container mt-5">
                    <h5>SẢN PHẨM MỚI</h5>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-2 row-cols-xl-4">
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end new producrt  --}}
            </div>
        </div>
    </div>
@endsection
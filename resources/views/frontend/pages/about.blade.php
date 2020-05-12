{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.index` --}}
@extends('frontend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.index` --}}
@section('title')
LATOP - Giới Thiệu
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.index` --}}
@section('main-content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('theme/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        About
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class=" cl2 p-b-16">
                        SHOP LATOP - Shop máy tính xách tay hàng đầu Việt Nam
                    </h3>

                    <p class="cl6 p-b-26">
                    Là doanh nghiệp phân phối hàng đầu Việt nam về tất cả các thương hiệu nổi 
                    tiếng về máy tính – công nghệ lớn trên thế giới , với hơn 2000 mẫu sản phẩm 
                    mới chính hãng như Dell, HP, APPLE MACBOOK, LENOVO, ACER, ASUS, PANASONIC, 
                    SAMSUNG, TOSHIBA… , và hơn 1000 sản phẩm máy tính xách tay cao cấp. Các sản 
                    phẩm của chúng tôi chuyên cung ứng cho doanh nghiệp khối văn phòng, xây dựng, 
                    kinh doanh, đồ hoạ, và giải trí Game. Các đối tác của chúng tôi thường là các
                    doanh nghiệp trong ngành thương mại như Ngân hàng Agribank, Vietcombank, TIKI… 
                    các công ty xây dựng như Hoàng Anh Gia Lai, Cotecon ….và hơn 300 doanh nghiệp 
                    vừa và nhỏ tin dùng vì chất lượng vượt trội và giá thành tốt.
                    </p>

                    <p class="cl6 p-b-26">
                    Với sự hỗ trợ chuyên môn từ các chuyên gia kỹ sư IT của “ Shop LATOP” của 
                    chúng tôi, trong quá trình sử dụng , Quý khách sẽ được hỗ trợ hướng dẫn , 
                    bảo dưỡng máy tính một cách chuyên nghiệp và tận tâm  trong suốt quá trình 
                    sử dụng kể cả sau bảo hành.
                    </p>

                    <p class="cl6 p-b-26">
                    Chúng tôi có nhiều kinh nghiệm trong chuyên môn về công nghệ nên sẽ giúp 
                    Quý khách tư vấn sản phẩm phù hợp và tiết kiệm chi phí khi chọn lựa sản 
                    phẩm cùng chúng tôi.
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{ asset('theme/cozastore/images/about-01.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Thông tin liên hệ
                    </h3>

                    <p class="cl6 p-b-26">
                    HỆ THỐNG LAPTOP XACH TAY LATOP <br><br>

                    Địa chỉ: Số 228 đường 3/2, Phường Hưng Lợi, Quận Ninh Kiều, TP Cần Thơ <br>
                    Hotline: 0339 522 221 - 0339 522 221 <br>
                    Hỗ trợ kỹ thuật: 0339-522-221 <br>
                    Góp ý: cafroostb19081@gmail.com <br>
                    Thời gian làm việc: Thứ 2 – Chủ nhật (8h30 – 21h)   
                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="cl6 p-r-40 p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something,
                            they feel a little guilty because they didn't really do it, they just saw something. It
                            seemed obvious to them after a while.
                        </p>

                        <span class="stext-111 cl8">
                            - Steve Job’s
                        </span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{ asset('theme/cozastore/images/about-02.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.index` --}}
@section('custom-scripts')
@endsection
@extends('layout.master')

{{--@section('title', 'Page Title - ')--}}

@section('content')
    <section class="section_topstory row">
        <div class="col-4-3">
            <div class="thumbart">
                <img itemprop="contentUrl" loading="lazy"
                     intrinsicsize="680x408" alt="Philippines tố Trung Quốc muốn 'chiếm thêm' ở Biển Đông"
                     class="lazy loading"
                     src="https://i1-vnexpress.vnecdn.net/2021/04/04/167890809-513997356644652-4134-9560-8352-1617533244.jpg?w=680&amp;h=408&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=T5xc9FM1ankaTLwdawhiig"
                     data-ll-status="loading">
            </div>
            <h3><a href="">Philippines tố Trung Quốc muốn 'chiếm thêm' ở Biển Đông</a></h3>
            <p><a href="">Bộ trưởng Quốc phòng Philippines nói Trung Quốc duy trì hiện diện của dân quân biển và thể
                    hiện mưu đồ "chiếm thêm các khu vực ở Biển Đông".</a></p>
            <div class="col-3">
                <h3><a href="`">Hơn 40 người chết vì lũ quét ở Indonesia</a></h3>
                <p><a href="">Mưa lớn gây lũ quét nhấn chìm nhiều ngôi nhà và gây mất điện diện rộng ở đảo Flores, khiến ít nhất 41 người chết.</a></p>
            </div>
            <div class="col-3">
                <h3><a href="`">Tài xế Đài Loan khóc xin lỗi vì vụ xe tải 'xé toạc' tàu</a></h3>
                <p><a href="">Lee Yi-hsiang, tài xế của xe tải trượt xuống đường ray, xin lỗi và hứa hợp tác với các nhà điều tra sau khi được tại ngoại.</a></p>
            </div>
            <div class="col-3">
                <h3><a href="`">Dám khác biệt</a></h3>
                <p><a href="">Một giám đốc ở tỉnh Nam trung bộ chia sẻ với tôi, họ muốn đột phá nhưng khó được làm, và cố làm thì rủi ro cho chính mình.</a></p>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('/image/ads1.jpg') }}" alt="">
        </div>
    </section>

    <hr>

    <section class="section_stream_home row">
        <div class="col-2">
            <a href="">
                <img class="img212x132" src="https://cdn.tuoitre.vn/zoom/212_132/2021/4/4/lat-du-thuyen-o-lao-16175512647501959022286-crop-1617551341885410838143.jpeg"
                     data-src="https://cdn.tuoitre.vn/zoom/212_132/2021/4/4/lat-du-thuyen-o-lao-16175512647501959022286-crop-1617551341885410838143.jpeg" alt="Lật du thuyền ở Lào, 8 người thiệt mạng">
            </a>
            <div class="name-news">
                <h3 class="title-news">
                    <a title="Lật du thuyền ở Lào, 8 người thiệt mạng" href="/lat-du-thuyen-o-lao-8-nguoi-thiet-mang-20210404225149119.htm">
                        Lật du thuyền ở Lào, 8 người thiệt mạng</a>
                </h3>
                <p>TTO - Dù lý do gì đi nữa, với cái phòng bệnh được cải tạo thành 'động lắc', là nơi cất giữ và phân phối ma túy, Bệnh viện Tâm thần...</p>
            </div>
        </div>
        <div class="col-2">b</div>
    </section>

    <p>This is my body content.</p>
@endsection

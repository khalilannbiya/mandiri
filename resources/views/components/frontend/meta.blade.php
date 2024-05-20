<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

@yield('meta-description')

<meta name="keywords"
    content="percetakan, percetakan terdekat, cetak banner terdekat, cetak spanduk terdekat, tempat cetak spanduk terdekat, cetak spanduk terdekat dari lokasi saya, cetak spanduk murah terdekat, percetakan 24 jam, cetak undangan terdekat, percetakan banner terdekat, cetak kalender murah, percetakan mandiri, percetakan mandiri printing, percetakan mandiri printing dan graphic" />
<meta name="author" content="Percetakan Mandiri Printing & Graphic" />
<meta name="robots" content="all, index, follow">

{{-- Open Graph --}}
<meta property="og:site_name" content="Percetakan Mandiri Printing & Graphic" />
<meta property="og:title"
    content="Percetakan Mandiri Printing dan Graphic | Cetak Murah Berkualitas Tinggi 24 Jam di Jakarta" />
<meta property="og:image" content="{{ asset('assets/images/logo-thumb.png') }}" />
<meta property="og:description"
    content="Percetakan Mandiri Printing dan Graphic menawarkan layanan percetakan murah, cepat, dan berkualitas di Jakarta. Buka 24 jam, kami siap membantu kebutuhan cetak banner, spanduk, undangan, dan berbagai produk cetak lainnya." />
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="product" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<meta name="twitter:card" content="summary" />

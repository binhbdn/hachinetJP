@extends('Website.layouts.default')
@section('content')

    <div id="bao-mat" class="section pt-3 pb-5" >
    
    <div class="container">
  
        <div class="row">
            <div class="col-md-12">
            
                <div class="col-md-1"></div>
                
                <div class="col-md-10 ">
                    <div class="btn-home mb-2" >
                        <a style="color:black" href="/"><i class="fa fa-home" aria-hidden="true"></i> TOP</a>
                    </div>
                    <div class="text-content">
                        <h2 class="text-center">サイトご利用にあたって | 株式会社HACHINET</h2>
                        <p>株式会社HACHINET(以下、「本ウェブサイト」といいます)を利用いただきまして、誠にありがとうございます。本ウェブサイトは、株式会社HACHINET (以下、「当社」といいます)が運営しています。 本ウェブサイトをご利用された場合には、本利用条件に同意いただいたものとさせていただきます。なお内容につきましては、予告なく変更する場合がありますので、 最新の内容をご確認いただきますようお願いいたします。</p>
                        <h4 class="text-center">免責事項について</h4>
                        <p>本ウェブサイト上のコンテンツ(文、表、図、写真)は、当社または当社に使用を認めた著作権所有者に帰属します。著作権所有者に 無断でのご利用はお控えください。但し、個々のコンテンツに利用条件が示されている場合、またはそれを示すコンテンツにリンクしている場合は当該条件が優先されます。</p>
                        <h4 class="text-center">免責事項について</h4>
                        <p>本ウェブサイトの利用は、お客様の責任において行われるものとします。   <br>
                        当社は、本ウェブサイトで提供される情報の内容について、その正確性、有用性を含め、特に記載のある場合をのぞき、何ら保証するものではありません。 <br>
                        また、当社は、本ウェブサイトに中断・中止その他の障害のないことを保証するものではありません。  <br>
                        当社は、本ウェブサイト及び当ホームページにリンクが設定されている他のウェブサイトから取得された各種情報の利用によって生じたあらゆる損害に関して、一切の責任を負いません。
                        </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="align-items-center d-flex flex-1 justify-content-center mt-3">
                <a class="btn dream-btn more-btn " href="{{route('contact')}}">ご相談はコチラ！</a>
            </div>
        </div>
    
    </div>
    </div>
    

@endsection

<!-- Javascripts -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>--}}

{{--  <script src="/js/jquery-2.2.0.min.js"></script>  --}}
{{--  <script src="/js/materialize.min.js"></script>  --}}
<script src="/js/materialPreloader.min.js"></script>
<script src="/js/alpha.min.js"></script>
<script src="/js/dashboard.js"></script>

<script src="/js/jquery.blockui.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.sparkline.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/jquery.flot.min.js"></script>
<script src="/js/jquery.flot.time.min.js"></script>
<script src="/js/jquery.flot.symbol.min.js"></script>
<script src="/js/jquery.flot.resize.min.js"></script>
<script src="/js/jquery.flot.tooltip.min.js"></script>
<script src="/js/curvedLines.js"></script>
<script src="/js/jquery.peity.min.js"></script>

{{--<script src="/js/select2.min.js"></script>--}}
{{--<script src="/js/form-select2.js"></script>--}}
<script src="/js/form-input-mask.js"></script>
<script src="/js/jquery.inputmask.bundle.js"></script>
{{--<script src="/js/select2.full.min.js"></script>--}}
{{--<script src="/js/init.js"></script>--}}
{{----}}
<script type="text/javascript">

    $(document).ready(function(){

        $('select').material_select();

        $('select').on('contentChanged', function() {
        // re-initialize (update)
            $(this).material_select();
        });

        $('#provincia-id').on('change',function(){
            var prov_id = $(this).val();
            var div=$(this).parent();

            $.ajax({
                type:'post',
                url:'{!!URL::to('findDistrito')!!}',
                data:{'id':prov_id},
                success:function(data){
                    for(var i=0;i<data.length;i++){
                        $('#distrito').append('<option value="'+data[i].id+'">'+data[i].distritonome+'</option>');
                    }

                    $('#distrito').trigger('contentChanged');
                },
                error:function(err){
                    alert('erro encontrado'+err);
                }
            });
        });

        $('#distrito').on('change',function(){
            var distr_id=$(this).val();
            var div=$(this).parent();

            $.ajax({
                type:'post',
                url:'{!!URL::to('findLocalidade')!!}',
                data:{'id':distr_id},
                success:function(data){
                    for(var i=0;i<data.length;i++){
                        $('#localidade').append('<option value="'+data[i].id+'">'+data[i].localidadenome+'</option>');
                    }
                    $('#localidade').trigger('contentChanged');
                },
                error:function(err){
                    alert('erro encontrado'+err);
                }
            });
        });

    });
</script>
<script type="text/javascript">

    $("#case").hide();
    $("#notcase").hide();
    $("#addmorepessoas").hide();
    $("#addmorepessoas1").hide();
    $("#addmorepessoas2").hide();
    function showHidecaso() {
        if(document.getElementById('naocaso').checked) {
            $("#case").show();
            $("#notcase").hide();
            $("#addmorepessoas").hide();
            $("#addmorepessoas1").hide();
            $("#addmorepessoas2").hide()
        } else {
            $("#notcase").show();
            $("#case").hide();
        }
    }

    function addpessoa() {
        if(document.getElementById('addpessoas').checked) {
            $("#addmorepessoas").show();
            $("#addmorepessoas1").show();
            $("#addmorepessoas2").show();
        }else {
            $("#addmorepessoas").hide();
            $("#addmorepessoas1").hide();
            $("#addmorepessoas2").hide();
        }
    }
</script>
<script>

    $(window).on('load', function() {
        //  $('.preloader-background').delay(1700).fadeOut('slow'); 

        setTimeout(function(){
            $('body').addClass('loaded');
        }, 2000);
    });

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#registar-contacto').on('click', function (e) {
            alert('Heheehehehehy');
            e.preventDefault();

            var dados = $('#addcontacto').serialize();

            $.ajax({
                method: 'Post',
                url: '/registarcontacto',
//                enctype: 'multipart/form-data',
                data: dados,
                success: function (data) {

                    if (data) {

                        setTimeout(function(){ Materialize.toast('Registado com Sucesso!', 4000) }, 4000);
                        $('#addcontacto')[0].reset();
//                        window.location.href = '/';
                        alert('Salvo com Sucesso!');

                    }
                    else {
                        alert(error)

                    }
                }
            });

        })


    });
</script>
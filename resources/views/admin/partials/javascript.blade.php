{{--<!-- Javascript -->--}}
{{--<!-- Vendors -->--}}
{{--<script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>--}}

<!-- Javascripts -->
<script src="/js/jquery-2.2.0.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/materialPreloader.min.js"></script>
<script src="/js/jquery.blockui.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/jquery.sparkline.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/jquery.flot.min.js"></script>
<script src="/js/jquery.flot.time.min.js"></script>
<script src="/js/jquery.flot.symbol.min.js"></script>
<script src="/js/jquery.flot.resize.min.js"></script>
<script src="/js/jquery.flot.tooltip.min.js"></script>
<script src="/js/curvedLines.js"></script>
<script src="/js/jquery.peity.min.js"></script>
<script src="/js/alpha.min.js"></script>
<script src="/js/dashboard.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.provincia',function(){
            // console.log("hmm its change");

            var prov_id=$(this).val();
//            alert(prov_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findDistrito')!!}',
                data:{'id':prov_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>--Escolhe o Distrito--</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].distritonome+'</option>';
                    }
//                   alert(op);
                    div.find('.distritonome').html(" ");
                    div.find('.distritonome').append(op);
                },
                error:function(){
                alert('erro encontrado');
                }
            });
        });


        $(document).on('change','.distritonome',function(){
            // console.log("hmm its change");

            var distr_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findLocalidade')!!}',
                data:{'id':distr_id},
                success:function(data){

                    op+='<option value="0" selected disabled>--Escolhe a Localidade--</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].localidadenome+'</option>';
                    }

                    div.find('.localidadenome').html(" ");
                    div.find('.localidadenome').append(op);
                },
                error:function(){

                }
            });
        });

    });





    $("#case").hide();
    $("#notcase").hide();
    $("#addmorepessoas").hide();
    function showHidecaso() {
        if(document.getElementById('naocaso').checked) {
            $("#case").show();
            $("#notcase").hide();
        } else {
            $("#notcase").show();
            $("#case").hide();
        }
    }

    function addpessoa() {
        if(document.getElementById('addpessoas').checked) {
            $("#addmorepessoas").show();
        }else {
            $("#addmorepessoas").hide();
        }
    }
    </script>

{{--<!-- App functions and actions -->--}}
{{--<script src="/js/app.min.js"></script>--}}
